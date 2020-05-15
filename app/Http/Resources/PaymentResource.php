<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'document'      => $this->document,
            'dtvencimento'  => $this->dtvencimento,
            'valor'         => $this->valor,
            "created_at"    => $this->created_at,
        ];
    }
}
