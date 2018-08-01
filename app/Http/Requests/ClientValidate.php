<?php

namespace Inicia\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientValidate extends FormRequest
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
            'first_name' => 'required|string|min:4|max:10',
            'last_name' => 'required|string|min:4|max:10',
            'identy_license' => 'required|unique:clients',
            'email' => 'required|string|email|min:5|max:50',
            'phone' => 'required|min:4|max:20',
            'status' => 'required|numeric',
            'type' => 'required|numeric',
            'addres' => 'required|string|min:15|max:500',
        ];
    }
}
