<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostClienteRequest extends FormRequest
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
            'nombres' => ['required', 'max:255', 'min:3'],
            'apellidos' =>['required', 'max:255', 'min:3'],
            'telefono' => ['required', 'max:50', 'min:3'],
            'email' => ['required', 'max:255', 'min:3'],
        ];
    }
}
