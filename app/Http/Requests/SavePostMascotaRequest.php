<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostMascotaRequest extends FormRequest
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
        if ($this->getMethod() === 'PATCH')
        {
            return [
                'nombre' => 'required',
                'raza' => 'required',
                'tipo' => 'required',
                'color' => 'required',
                'tamano' => 'required'
            ];
        } else {
            return [
                'nombre' => 'required',
                'raza' => 'required',
                'tipo' => 'required',
                'color' => 'required',
                'tamano' => 'required',
                'disponibilidad' => 'required',
            ];
        }
    }
}
