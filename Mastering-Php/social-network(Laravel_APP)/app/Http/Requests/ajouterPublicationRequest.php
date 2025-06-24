<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ajouterPublicationRequest extends FormRequest
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
            'title' => 'required|string|min:10|max:255',
            'body' => 'required|string|min:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3048',
        ];
    }

    // message function 
    public function messages() {
        return [
            'title.required' => 'Le titre est requis',
            'title.string' => 'Le titre doit être une chaîne de caractères',
            'title.min' => 'Le titre doit contenir au moins 10 caractères',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères',
            'body.required' => 'la description est requis',
            'body.string' => 'la description doit être une chaîne de caractères',
            'body.min' => 'la description doit contenir au moins 30 caractères',
            'image.image' => 'L\'image doit être une image valide',
            'image.mimes' => 'L\'image doit être au format jpeg, png, jpg ou gif',
            'image.max' => 'L\'image ne doit pas dépasser 3 Mo',
        ];
    }
}
