<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string'],
            'fax' => ['required', 'string'],
            'address' => ['required', 'string'],
            'about' => ['required', 'string'],
            'footer_text' => ['required', 'string'],
            'maps_embed' => ['required', 'string'],
            'facebook' => ['required', 'string'],
            'twitter' => ['required', 'string'],
            'linkedin' => ['required', 'string'],
            'youtube' => ['required', 'string'],
            'behance' => ['required', 'string'],
        ];
    }
}
