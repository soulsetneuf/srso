<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuUpdateRequest extends FormRequest
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
            'nombre'=>'required|min:2|max:150|regex:/(^([a-zA-Z[:space:]]+)?$)/u',
            'precio_unitario'=>'numeric|min:1',
            'descripcion'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'nombre.regex'=>'Solo espacios y letras',
            'precio_unitario.min'=>'Solo números positivos',
        ];
    }
}
