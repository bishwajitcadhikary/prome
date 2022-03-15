<?php

namespace App\Http\Requests\Carousels;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarouselRequest extends FormRequest
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
            'title' => ['nullable', 'string'],
            'image' => ['required', 'image', 'max:4000']
        ];
    }
}
