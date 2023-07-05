<?php

namespace App\Http\Resources;

use App\Models\Polaznik;
use App\Models\Kurs;

use Illuminate\Http\Resources\Json\JsonResource;

class KupovinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id, 
            'polaznik'=>Polaznik::find($this->resource->polaznik_id), 
            'kurs'=>Kurs::find($this->resource->kurs_id), 
            'datum'=>$this->resource->datum, 

        ];
    }
}