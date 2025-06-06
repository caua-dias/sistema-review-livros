<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewStoreRequest extends FormRequest
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
            'grade'=> 'required|numeric|min:0|max:5',
            'text'=> 'required|string|',
            'reader_id' => ['required', 'integer', 'exists:authors,id'],
            'book_id' => ['required', 'integer', 'exists:genres,id']
        ];
    }
}
