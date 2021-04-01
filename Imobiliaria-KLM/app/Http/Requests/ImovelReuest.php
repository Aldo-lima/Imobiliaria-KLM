<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelReuest extends FormRequest
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
            'titulo'=> 'bail|required|min:3|max:100',
            'municipio_id'=> 'bail|required|integer',
            'tipo_id'=> 'bail|required|integer',
            'finalidade_id'=> 'bail|required|integer',
            'preco'=> 'bail|required|numeric|min:0',
            'dormitorio'=> 'bail|required|integer|min:0',
            'salas'=> 'bail|required|integer|min:0',
            'terreno'=> 'bail|required|integer|min:0',
            'banheiro'=> 'bail|required|integer|min:0',
            'garagems'=> 'bail|required|integer|min:0',
            'descricao'=> 'bail|nullable|string',
            'rua'=> 'bail|required|min:1|max:100',
            'numero'=> 'bail|required|integer',
            'complemento'=> 'bail|nullable|string',
            'bairro'=> 'bail|required|min:3|max:50',
            'proximidades'=> 'bail|nullable|arry',



        ];
    }
}
