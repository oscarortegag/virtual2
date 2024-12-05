<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrancesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return  [
            'titulo'  => 'required|max:60',
            'nivel'   => 'required|max:10',
            'editorial'  => 'required|max:255',
            'autor'   => 'required|max:255',
            'isbn'  => 'required|max:20',
            'categoria'  => 'required|max:100',
            'idioma'  => 'required|max:20',
            'cantidad'  =>'required|max:11',
            'foto' =>'sometimes',
           
        ];
    }
}
