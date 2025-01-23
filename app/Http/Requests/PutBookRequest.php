<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutBookRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:800',
            'pages' => 'nullable|integer|min:1|max:100000',
            'author_id' => 'nullable|exists:authors,id',
            'category_id' => 'nullable|exists:categories,id',
            'cover' => 'nullable|mimes:jpg,jpeg,png|max:10240', // File must be of type JPG, JPEG, or PNG and not exceed 10MB.
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title must not exceed 255 characters.',
            'description.max' => 'The description must not exceed 800 characters.',
            'pages.integer' => 'Pages must be a valid number.',
            'pages.min' => 'Pages must be at least 1.',
            'pages.max' => "Pages must not exceed 100'000.",
            'author_id.exists' => 'The selected author is invalid.',
            'category_id.exists' => 'The selected category is invalid.',
            'cover.mimes' => 'The cover file must be an image of type JPG, JPEG, or PNG.',
            'cover.max' => 'The cover file size must not exceed 10MB.',
        ];
    }
}
