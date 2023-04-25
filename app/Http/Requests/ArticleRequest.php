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
            'img' => 'mimetypes:jpg,jpeg,pdf',
            'img2' => 'mimetypes:jpg,jpeg,pdf',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Keep in mind, the title is required!',
            'title.min' => 'Too short!',
            'title.max' => 'Too long!',
            'paragraph.min' => 'Too short!',
            'subtitle.required' => 'Keep in mind, the subtitle is required!',
            'paragraph2.min' => 'Too short!',
            'subtitle2.required' => 'Keep in mind, the second subtitle is also required!',
            'author.required' => 'Keep in mind, the author is required!',
        ];
    }
}
