<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BancoStoreRequest extends FormRequest
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
            'banco' => 'required|string',
            'tokenprivado' => 'required|string',
            'cliente_id' => 'nullable|string',
            'cliente_secret' => 'nullable|string',
            'url' => 'required|string'
        ];
    }
}
