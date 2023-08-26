<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransakcijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = 'transakcija';
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'sifra' => $this->resource->sifra,
            'naziv' => $this->resource->naziv,
            'korisnik' => $this->resource->korisnik,
            'radnik' => new RadnikResource($this->resource->radnik)
        ];
    }
}
