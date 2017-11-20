<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioCreateRequest extends FormRequest
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
            'nombre'=>'required|unique:servicios|regex:/(^([a-zA-Z[:space:]]+)?$)/u',
        ];
    }
    public function messages() {
        return [
            'nombre.regex'=>'Solo espacios y letras',
            'nombre.unique'=>'El nombre ya ha sido registrado',
        ];
    }
}
