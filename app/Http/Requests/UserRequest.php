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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'username' =>'required|min:4',
            'email'=>'required|email|unique:users',
           'password' =>'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'le username est requis',
            'username.min'=> 'le username doit avoir au moins 4 caracteres',
            'email.required' => 'le mail est obligatoire',
            'email.unique' => 'ce Mail existe deja',
            'password.required' => 'le mot de passe est obligatoire',
            'password.min' =>'le mot de passe est trop court'
        ];
    }
}
