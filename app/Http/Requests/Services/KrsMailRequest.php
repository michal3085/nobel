<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class KrsMailRequest extends FormRequest
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
            'krs_name' => 'required',
            'krs_nip' => 'required|numeric|digits:10',
            'krs_number' => 'required|numeric',
            'krs_description' => 'required',
            'krs_mail' => 'required|email',
            'krs_phone' => 'required|max:15',
        ];
    }

    public function attributes()
    {
        return [
            'krs_name' => 'nazwa firmy',
            'krs_nip' => 'NIP',
            'krs_number' => 'numer KRS',
            'krs_description' => 'opis',
            'krs_mail' => 'adres email',
            'krs_phone' => 'numer telefonu',
        ];
    }
}
