<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
                'name' => ['required', 'string'],
                'firstName' => ['required', 'string'],
                'lastName' => ['required', 'string'],
                'pesel' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required','string'],
                'mailingAddress' => ['required', 'string'],
                'companyName' => ['string'],
                'nip' => ['string'],
                'companyAddress'=> ['string'],
                'companyMailingAddress' => ['string'],
                'accountType' => ['required', Rule::in(['A', 'W', 'I', 'B'])]
            ];
        } else {
            return [
                'name' => ['sometimes', 'required', 'string'],
                'firstName' => ['sometimes', 'required', 'string'],
                'lastName' => ['sometimes', 'required', 'string'],
                'pesel' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'password' => ['sometimes', 'required','string'],
                'mailingAddress' => ['sometimes', 'required', 'string'],
                'companyName' => ['sometimes', 'string'],
                'nip' => ['sometimes', 'string'],
                'companyAddress'=> ['sometimes', 'string'],
                'companyMailingAddress' => ['sometimes', 'string'],
                'accountType' => ['sometimes', 'required', Rule::in(['A', 'W', 'I', 'B'])]
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->firstName) $this->merge(['first_name' => $this->firstName]);
        if ($this->lastName) $this->merge(['last_name' => $this->lastName]);
        if ($this->mailingAddress) $this->merge(['mailing_address' => $this->mailingAddress]);
        if ($this->companyName) $this->merge(['company_name' => $this->companyName]);
        if ($this->companyAddress) $this->merge(['company_address' => $this->companyAddress]);
        if ($this->companyMailingAddress) $this->merge(['company_mailing_address' => $this->companyMailingAddress]);
        if ($this->accountType) $this->merge(['account_type' => $this->accountType]);
    }
}
