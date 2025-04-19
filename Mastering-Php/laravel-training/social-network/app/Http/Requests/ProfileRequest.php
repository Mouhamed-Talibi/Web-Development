<?php

    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class ProfileRequest extends FormRequest
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
                'firstName' => 'required | string | min:5 | max:55',
                'lastName' => 'required | string | max:55',
                'age' => 'required | integer | min:10 | max: 99',
                'email' => 'required | string | email | max:255',
                'password' => 'required | string | min: 8 | max:100|confirmed',
                'description' => 'nullable | string',
                'image' => 'image | mimes:jpeg,png,jpg,svg | max:2048',
            ];
        }
    }
