<?php

namespace App\Http\Controllers;

use App\DataTables\CarouselDataTable;
use App\Http\Requests\Carousels\StoreCarouselRequest;
use App\Http\Requests\Carousels\UpdateCarouselRequest;
use App\Models\Carousel;
use File;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index(CarouselDataTable $dataTable)
    {
        return $dataTable->render('carousels.index');
    }

    public function create()
    {
        return view('carousels.create');
    }

    public function store(StoreCarouselRequest $request)
    {
        try {
            $validated = $request->validated();
            $fileName = time() . '.' . $validated['image']->extension();

            $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);

            Carousel::create([
                'title' => $validated['title'],
                'image' => $fileName
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.created', ['type' => trans_choice('general.carousels', 1)]),
                'redirect' => route('admin.carousels.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function edit(Carousel $carousel)
    {
        return view('carousels.edit', compact('carousel'));
    }

    public function update(UpdateCarouselRequest $request, Carousel $carousel)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $oldFilename = $carousel->image;

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);

                \File::delete(public_path('storage/uploads/images/'.$oldFilename));
            }

            $carousel->update([
                'title' => $validated['title'],
                'image' => $request->hasFile('image') ? $fileName : $carousel->image
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.updated', ['type' => trans_choice('general.carousels', 1)]),
                'redirect' => route('admin.carousels.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function destroy(Carousel $carousel)
    {
        File::delete(public_path('storage/uploads/images/'.$carousel->image));

        $carousel->delete();

        return response()->json([
            'success' => true,
            'message' => trans('messages.success.deleted', ['type' => trans_choice('general.carousels', 1)]),
        ]);
    }
}
