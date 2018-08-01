<?php

namespace Inicia\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationValidate extends FormRequest
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
            'email' => 'required|string|email|min:5|max:70', 
            'subject' => 'required|min:5|max:70',
            'message' => 'required'
        ];
    }
}
