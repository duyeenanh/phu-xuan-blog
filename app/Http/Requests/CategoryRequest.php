<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        $categoryId = $this->route('category'); 
        return [
            'name' => 'required|min:2|max:100',
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($categoryId)],
            'description' => 'nullable|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên danh mục không được để trống.',
            'name.min' => 'Tên danh mục phải có ít nhất 2 ký tự.',
            'slug.unique' => 'Slug này đã tồn tại.',
        ];
    }
}