<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioUpdateRequest extends FormRequest
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
            'nombre'=>'required|regex:/(^([a-zA-Z[:space:]]+)?$)/u',
        ];
    }
    public function messages() {
        return [
            'nombre.regex'=>'Solo espacios y letras',
        ];
    }
}
