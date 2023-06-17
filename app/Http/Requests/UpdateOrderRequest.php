<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateOrderRequest extends FormRequest
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
                'postDate' => ['required', 'date'],
                'acceptDate' => ['date'],
                'sendDate' => ['date'],
                'deliver' => ['required', 'boolean'],
                'deliverAddress' => ['string'],
                'invoice' => ['required', 'boolean'],
                'finished' => ['required', 'boolean']
            ];
        } else {
            return [
                'postDate' => ['sometimes', 'required', 'date'],
                'acceptDate' => ['sometimes', 'date'],
                'sendDate' => ['sometimes', 'date'],
                'deliver' => ['sometimes', 'required', 'boolean'],
                'deliverAddress' => ['sometimes', 'string'],
                'invoice' => ['sometimes', 'required', 'boolean'],
                'finished' => ['sometimes', 'required', 'boolean']
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->postDate) $this->merge(['post_date' => $this->postDate]);
        if ($this->acceptDate) $this->merge(['accept_date' => $this->acceptDate]);
        if ($this->sendDate) $this->merge(['send_date' => $this->sendDate]);
        if ($this->deliverAddress) $this->merge(['deliver_address' => $this->deliverAddress]);
    }
}
