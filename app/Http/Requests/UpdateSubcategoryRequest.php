<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSubcategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::user()->account_type === 'A')   return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'categoryId' => ['required', 'integer']
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'categoryId' => ['sometimes', 'required', 'integer']
            ];
        }
    }

    protected function prepareForValidation() {
        if ($this->categoryId) $this->merge(['category_id' => $this->categoryId]);
    }
}
