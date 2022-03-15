<?php

namespace App\Http\Controllers;

use App\DataTables\OurWorkDataTable;
use App\Http\Requests\OurWorks\StoreOurWorkRequest;
use App\Http\Requests\OurWorks\UpdateOurWorkRequest;
use App\Models\OurWork;
use File;

class OurWorkController extends Controller
{
    public function index(OurWorkDataTable $dataTable)
    {
        return $dataTable->render('our-works.index');
    }

    public function create()
    {
        return view('our-works.create');
    }

    public function store(StoreOurWorkRequest $request)
    {
        try {
            $validated = $request->validated();
            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);
            }

            OurWork::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image' => $fileName ?? null,
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.created', ['type' => trans_choice('general.our_works', 1)]),
                'redirect' => route('admin.our-works.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function edit(OurWork $ourWork)
    {
        return view('our-works.edit', compact('ourWork'));
    }

    public function update(UpdateOurWorkRequest $request, OurWork $ourWork)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $oldFilename = $ourWork->image;

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);

                \File::delete(public_path('storage/uploads/images/'.$oldFilename));
            }

            $ourWork->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image' => $request->hasFile('image') ? $fileName : $ourWork->image
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.updated', ['type' => trans_choice('general.our_works', 1)]),
                'redirect' => route('admin.our-works.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function destroy(OurWork $ourWork)
    {
        File::delete(public_path('storage/uploads/images/'.$ourWork->image));

        $ourWork->delete();

        return response()->json([
            'success' => true,
            'message' => trans('messages.success.deleted', ['type' => trans_choice('general.our_works', 1)]),
        ]);
    }
}
