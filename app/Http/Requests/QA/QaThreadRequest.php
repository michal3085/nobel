<?php

namespace App\Http\Requests\QA;

use Illuminate\Foundation\Http\FormRequest;

class QaThreadRequest extends FormRequest
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
            'qa_section_id' => 'required',
            'qa_title' => 'required',
            'qa_text' => 'required',
            'qa_active' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'qa_section_id' => 'Sekcja',
            'qa_title' => 'Tytuł',
            'qa_text' => 'Treść',
            'qa_active' => 'Status',
        ];
    }
}
