<?php

namespace App\Http\Requests\OurServices;

use Illuminate\Foundation\Http\FormRequest;

class StoreOurServiceRequest extends FormRequest
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
            'description' => ['nullable', 'string'],
            'is_accordion' => ['nullable'],
            'image' => ['nullable', 'image', 'max:4000']
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'is_accordion' => $this->has('is_accordion')
        ]);
    }
}
