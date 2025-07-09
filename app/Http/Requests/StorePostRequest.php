<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    protected $redirectRoute = 'posts.create';
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
            'title' => ['required', 'min:5','max:50'],
            'body' => ['required', 'min:5','max:250'],
            'image' => ['required']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'title.required' => 'El :attribute es obligatorio.',
            'body.required' => 'El :attribute es obligatorio.',
            'image.required' => 'La :attribute es obligatorio.',
            'title.min' => 'El :attribute debe ser de mínimo 5 caracteres',
            'title.max' => 'El :attribute debe ser de máximo 50 caracteres',
            'body.max' => 'El :attribute debe ser de máximo 250 caracteres',
            'body.min' => 'El :attribute debe ser de mínimo 5 caracteres',            
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'titulo',
            'body' => 'contenido',
            'image' => 'imagen',
        ];
    }
}
