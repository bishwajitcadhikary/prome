<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\UpdateLogoRequest;
use App\Http\Requests\Settings\UpdateSettingRequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function update(UpdateSettingRequest $request)
    {
        $validated = $request->validated();
        setting()->set('website.title', $validated['title']);
        setting()->set('website.email', $validated['email']);
        setting()->set('website.phone', $validated['phone']);
        setting()->set('website.fax', $validated['fax']);
        setting()->set('website.address', $validated['address']);
        setting()->set('website.about', $validated['about']);
        setting()->set('website.footer_text', $validated['footer_text']);
        setting()->set('website.maps_embed', $validated['maps_embed']);
        setting()->set('website.social.facebook', $validated['facebook']);
        setting()->set('website.social.twitter', $validated['twitter']);
        setting()->set('website.social.linkedin', $validated['linkedin']);
        setting()->set('website.social.youtube', $validated['youtube']);
        setting()->set('website.social.behance', $validated['behance']);
        setting()->save();

        return response()->json([
            'success' => true,
            'message' => trans('messages.success.updated', ['type' => trans('general.settings')]),
        ]);
    }

    public function updateLogo(UpdateLogoRequest $request)
    {
        try {
            $imageName = 'logo.'.$request->validated()['logo']->extension();
            $request->validated()['logo']->move(public_path('storage/uploads/images/'), $imageName);
            setting()->set('website.logo', $imageName);
            setting()->save();
        }catch (\Throwable $e){
            throw $e;
        }

        return response()->json([
            'success' => true,
            'message' => trans('messages.success.updated', ['type' => trans('general.logo')]),
        ]);
    }
}
