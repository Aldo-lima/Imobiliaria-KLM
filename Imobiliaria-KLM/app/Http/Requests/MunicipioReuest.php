<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MunicipioReuest extends FormRequest
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
            'nome'=> "bail|required|min:3|max:100|unique:municipios,nome,$this->municipio"
        ];
    }
}
