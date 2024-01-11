<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MunicipioResource extends JsonResource
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
            'id' => $this->id,
            'nome_municipio' => ucwords(strtolower($this->nome_municipio)),
            'comunas' => ComunaResource::collection($this->whenLoaded('comunas')),
            'distritos' => DistritoResource::collection($this->whenLoaded('distritos')),
        ];
    }

}
