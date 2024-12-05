<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionPrestamo extends FormRequest
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
        return [
            'libro_id' =>'required|integer',
            'comentario'=>'required|max:255',
            'fecha_inicial' => 'required|date_format:Y-m-d\TH:i',
            'fecha_final' => 'required|date_format:Y-m-d\TH:i',
          
        ];
    }
}
