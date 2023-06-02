<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'postDate' => ['required', 'date'],
            'acceptDate' => ['date'],
            'sendDate' => ['date'],
            'deliver' => ['required', 'boolean'],
            'deliverAddress' => ['string'],
            'invoice' => ['required', 'boolean']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'post_date' => $this->postDate,
            'accept_date' => $this->acceptDate,
            'send_date' => $this->sendDate,
            'deliver_address' => $this->deliverAddress
        ]);
    }

}
