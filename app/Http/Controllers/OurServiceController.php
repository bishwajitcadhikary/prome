<?php

namespace App\Http\Controllers;

use App\DataTables\OurServiceDataTable;
use App\Http\Requests\OurServices\StoreOurServiceRequest;
use App\Http\Requests\OurServices\UpdateOurServiceRequest;
use App\Models\OurService;
use File;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function index(OurServiceDataTable $dataTable)
    {
        return $dataTable->render('our-services.index');
    }


    public function create()
    {
        return view('our-services.create');
    }

    public function store(StoreOurServiceRequest $request)
    {
        try {
            $validated = $request->validated();
            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);
            }

            OurService::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image' => $fileName ?? null,
                'is_accordion' => $validated['is_accordion']
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.created', ['type' => trans_choice('general.our_services', 1)]),
                'redirect' => route('admin.our-services.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function edit(OurService $ourService)
    {
        return view('our-services.edit', compact('ourService'));
    }

    public function update(UpdateOurServiceRequest $request, OurService $ourService)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $oldFilename = $ourService->image;

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);

                \File::delete(public_path('storage/uploads/images/'.$oldFilename));
            }

            $ourService->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'is_accordion' => $validated['is_accordion'],
                'image' => $request->hasFile('image') ? $fileName : $ourService->image
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.updated', ['type' => trans_choice('general.our_services', 1)]),
                'redirect' => route('admin.our-services.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function destroy(OurService $ourService)
    {
        File::delete(public_path('storage/uploads/images/'.$ourService->image));

        $ourService->delete();

        return response()->json([
            'success' => true,
            'message' => trans('messages.success.deleted', ['type' => trans_choice('general.our_services', 1)]),
        ]);
    }
}
