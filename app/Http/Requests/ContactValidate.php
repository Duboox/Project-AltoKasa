<?php

namespace Inicia\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactValidate extends FormRequest
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
            'name' => 'required|string|min:4|max:10', 
            'email' => 'required|string|email|min:5|max:50', 
            'subject' => 'required|string|min:5|max:50',
            'message' => 'required|string|min:15|max:500'
        ];
    }
}
