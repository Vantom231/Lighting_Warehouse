<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'pesel' => $this->pesel,
            'email' => $this->email,
            'emailVerifiedAt' => $this->email_verified_at,
            'mailingAddress' => $this->mailing_address,
            'companyName' => $this->company_name,
            'nip' => $this->nip,
            'companyAddress' => $this->company_address,
            'companyMailingAddress' => $this->company_mailing_address,
            'accountType' => $this->account_type,
            ];
    }
}
