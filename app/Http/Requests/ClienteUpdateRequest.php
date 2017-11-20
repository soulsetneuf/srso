<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteUpdateRequest extends FormRequest
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
            'nombres'=>'required|min:2|max:150|regex:/(^([a-zA-Z[:space:]]+)?$)/u',
            'apellido_paterno'=>'required|min:2|max:150|regex:/(^([a-zA-Z[:space:]]+)?$)/u',
            'apellido_materno'=>'required|min:2|max:150|regex:/(^([a-zA-Z[:space:]]+)?$)/u',
            'email'=>'required|email',
            'telefono'=>'numeric|min:1'
        ];
    }
    public function messages() {
        return [
            'nombres.regex'=>'Solo espacios y letras',
            'apellido_paterno.regex'=>'Solo espacios y letras',
            'apellido_materno.regex'=>'Solo espacios y letras',
            'telefono.min'=>'Solo números positivos',
        ];
    }
}
