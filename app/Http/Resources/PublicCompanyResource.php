<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicCompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code'                => $this->code,
            'name'                => $this->name,
            'abbreviation'        => $this->abbreviation,
            'address_in_chinese'  => $this->address_in_chinese,
            'unified_business_no' => $this->unified_business_no,
            'chairman'            => $this->chairman,
            'incorporation_date'  => $this->incorporation_date->toRfc850String(),
            'listing_date'        => $this->listing_date->toRfc850String(),
        ];
    }
}
