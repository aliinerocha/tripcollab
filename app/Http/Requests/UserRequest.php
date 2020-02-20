<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'birthday' => 'required',
            'photo' => 'image',
            'background_photo' => 'image',
            'description' => 'required',
        ];
    }

    public function messages() {
        return [
            'required' => "O campo :attribute é obrigatório",
            'image' => "O arquivo não é uma imagem válida"
        ];
    }
}
