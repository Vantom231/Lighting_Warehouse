<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateOrderToUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::user()->account_type == 'A' || Auth::user()->account_type == 'W') return true;
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
                'userId' => ['required', 'integer'],
                'orderId' => ['required', 'integer'],
                'role' => ['required', Rule::in(['C','A','S'])]
            ];
        } else {
            return [
                'userId' => ['sometimes', 'required', 'integer'],
                'orderId' => ['sometimes', 'required', 'integer'],
                'role' => ['sometimes', 'required', Rule::in(['C','A','S'])]
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->userId) $this->merge(['user_id' => $this->userId]);
        if ($this->orderId) $this->merge(['order_id' => $this->orderId]);
    }
}
