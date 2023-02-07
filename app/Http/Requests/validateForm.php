<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateForm extends FormRequest
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
            'username' => 'required|min :5',
            'mail' => 'required|email'
        ];
    }
    public function messages()
    {
        return[
            'username.required'=>'le champ Nom est Requis',
            'username.min' => 'Le champ Nom doit comptenir au moins 3 carateres',
            'mail.required' => 'le champs du mail est requis'
        ];
    }
}
