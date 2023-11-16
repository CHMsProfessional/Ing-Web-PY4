<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class SavePostReferenciaRequest extends FormRequest
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
        Log::info('SavePostReferenciaRequest@rules');

        if ($this->method() === 'PATCH') {
            return [
                'nombreReferencia' => ['required', 'max:255', 'min:3'],
                'telefono' => ['required', 'max:255', 'min:3'],
                'parentesco' => ['required', 'max:255', 'min:3'],
            ];
        } else {
            return [
                'cliente_id' => ['required'],
                'nombreReferencia' => ['required', 'max:255', 'min:3'],
                'telefono' => ['required', 'max:255', 'min:3'],
                'parentesco' => ['required', 'max:255', 'min:3'],
            ];
        }
    }
}
