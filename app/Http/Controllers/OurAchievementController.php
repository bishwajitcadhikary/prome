<?php

namespace App\Http\Controllers;

use App\DataTables\OurAchievementDataTable;
use App\Http\Requests\OurAchievements\StoreOurAchievementRequest;
use App\Http\Requests\OurAchievements\UpdateOurAchievementRequest;
use App\Http\Requests\OurServices\StoreOurServiceRequest;
use App\Http\Requests\OurServices\UpdateOurServiceRequest;
use App\Models\OurAchievement;
use App\Models\OurService;
use File;

class OurAchievementController extends Controller
{
    public function index(OurAchievementDataTable $dataTable)
    {
        return $dataTable->render('our-achievements.index');
    }


    public function create()
    {
        return view('our-achievements.create');
    }

    public function store(StoreOurAchievementRequest $request)
    {
        try {
            $validated = $request->validated();
            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);
            }

            OurAchievement::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image' => $fileName ?? null,
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.created', ['type' => trans_choice('general.our_achievements', 1)]),
                'redirect' => route('admin.our-achievements.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function edit(OurAchievement $ourAchievement)
    {
        return view('our-achievements.edit', compact('ourAchievement'));
    }

    public function update(UpdateOurAchievementRequest $request, OurAchievement $ourAchievement)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')){
                $fileName = time() . '.' . $validated['image']->extension();

                $oldFilename = $ourAchievement->image;

                $request->validated()['image']->move(public_path('storage/uploads/images/'), $fileName);

                \File::delete(public_path('storage/uploads/images/'.$oldFilename));
            }

            $ourAchievement->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image' => $request->hasFile('image') ? $fileName : $ourAchievement->image
            ]);

            return response()->json([
                'success' => true,
                'message' => trans('messages.success.updated', ['type' => trans_choice('general.our_achievements', 1)]),
                'redirect' => route('admin.our-achievements.index')
            ]);
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function destroy(OurAchievement $ourAchievement)
    {
        File::delete(public_path('storage/uploads/images/'.$ourAchievement->image));

        $ourAchievement->delete();

        return response()->json([
            'success' => true,
            'message' => trans('messages.success.deleted', ['type' => trans_choice('general.our_achievements', 1)]),
        ]);
    }
}
