<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => ['required', 'unique:languages' , 'string'] ,
            'description' => ['required' , 'string'] ,
            'WhyLearn'  => ['required' , 'string'] , 
            'example' => ['required' , 'string'] ,
            'frameworks' => ['required' , 'string'] ,
            'Applications' =>  ['required' , 'string'] ,
            'Guide' => ['required' , 'string'] ,
            'img' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ];
    }
}
