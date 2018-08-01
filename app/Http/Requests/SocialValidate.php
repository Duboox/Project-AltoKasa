<?php

namespace Inicia\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialValidate extends FormRequest
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
            'name' => 'required|string|min:5|max:15', 
            'use' => 'required',
            'link' => 'required', 
            'icon' => 'required',
            'extras' => 'required', 
            'title' => 'required|string|min:5|max:15'
        ];
    }
}
