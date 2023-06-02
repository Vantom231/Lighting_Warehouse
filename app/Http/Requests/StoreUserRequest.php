<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'accountType' => ['required', Rule::in(['A', 'W', 'C'])]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'mailing_address' => $this->mailingAddress,
            'company_name' => $this->companyName,
            'company_address' => $this->companyAddress,
            'company_mailing_address' => $this->companyMailingAddress,
            'account_type' => $this->accountType,
        ]);
    }
}
