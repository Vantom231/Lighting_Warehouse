<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderToProductRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'productId' => ['required', 'integer'],
                'orderId' => ['required', 'integer'],
                'quantity' => ['required', 'integer']
            ];
        } else {
            return [
                'productId' => ['sometimes', 'required', 'integer'],
                'orderId' => ['sometimes', 'required', 'integer'],
                'quantity' => ['sometimes', 'required', 'integer']
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->productId) $this->merge(['product_id' => $this->productId]);
        if ($this->orderId) $this->merge(['order_id' => $this->orderId]);
    }
}
