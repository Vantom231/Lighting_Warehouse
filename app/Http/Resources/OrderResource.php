<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'postDate' => $this->post_date,
            'acceptDate' => $this->accept_date,
            'sendDate' => $this->send_date,
            'deliver' => $this->deliver,
            'deliverAddress' => $this->deliver_address,
            'invoice' => $this->invoice
        ];
    }
}
