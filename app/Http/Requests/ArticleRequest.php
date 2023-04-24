<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:10|max:255',
            'paragraph' => 'min:100',
            'subtitle' => 'required',
            'paragraph2' => 'min:100',
            'subtitle2' => 'required',
            'author' => 'required',
        ];
    }
}
