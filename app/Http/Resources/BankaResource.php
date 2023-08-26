<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BankaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = 'banka';
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'adresa' => $this->resource->adresa,
            'email' => $this->resource->email,
            'sajt' => $this->resource->sajt,
            'broj_telefona' => $this->resource->broj_telefona,
            'user' => new UserResource($this->resource->user)
        ];
    }
}
