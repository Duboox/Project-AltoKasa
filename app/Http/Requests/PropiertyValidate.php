<?php

namespace Inicia\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropiertyValidate extends FormRequest
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
            'id_category' => 'required',
            'property_title' => 'required',
            'property_description' => 'required',
            'id_type_operation' => 'required',
            'id_type_property' => 'required',
            'city_name' => 'required',
            // 'id_city' => 'required',
            'property_address' => 'required',
            // 'id_area' => 'required',
        ];
    }
}
