<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
            'name' =>'required|min:4',
            'password' =>'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'le username est requis',
            'name.min'=> 'le username doit avoir au moins 4 caracteres',
            'password.required' => 'le mot de passe est obligatoire',
            'password.min' =>'le mot de passe est trop court'
        ];
    }

}
