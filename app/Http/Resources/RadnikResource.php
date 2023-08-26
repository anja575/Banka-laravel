<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RadnikResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = 'radnik';
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'email' => $this->resource->email,
            'broj_telefona' => $this->resource->broj_telefona,
            'pozicija' => $this->resource->pozicija,
            'banka' => new BankaResource($this->resource->banka)
        ];
    }
}
