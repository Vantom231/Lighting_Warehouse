<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderToUserRequest extends FormRequest
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
            'userId' => ['required', 'integer'],
            'orderId' => ['required', 'integer'],
            'role' => ['required', Rule::in(['C','A','S','Z','X','P'])]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => $this->userId,
            'order_id' => $this->orderId,
        ]);
    }
}
