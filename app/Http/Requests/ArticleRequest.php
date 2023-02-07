<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' =>'required|min:5'
        ];
    }
    public function messages()
    {
        return[
            'title.required' =>'La saisie du titre est requis',
            'title.min' => 'le Titre doit au moins avoir 3 caractere',
            'description.required' => 'veuiller entrer une description de l_article',
            'description.min' => 'la description doit contenir au moins 5 caractere'
        ];
    }
}
