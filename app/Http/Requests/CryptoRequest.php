<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CryptoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2',
            'description' => 'required|min:50',
            'img' => 'required|image|max:2048',
            
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio',
            'description.required' => 'Il campo descrizione è obbligatorio',
            'img.required' => 'Il campo immagine è obbligatorio',
            'name.min' => 'Il campo nome deve essere di almeno 2 caratteri',
            'description.min' => 'Il campo descrizione deve essere di almeno 50 caratteri',
            'img.image' => 'Il campo immagine deve essere di un formato immagine',
            'img.max' => 'L immagine non puo superare i 2 MB',

        ];
    }
}
