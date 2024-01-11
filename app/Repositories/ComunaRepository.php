<?php

namespace App\Repositories;

use App\Models\Comuna;

class ComunaRepository
{
    protected $entity;

    public function __construct(Comuna $model)
    {
        $this->entity = $model;
    }

    public function getTodasComunasByMunicipioId(string $municipioId)
    {
        return $this->entity
                    ->where('municipio_id', $municipioId)
                    ->get();
    }

    public function getComuna(string $identify)
    {
        return $this->entity
                    ->findOrFail($identify);
    }

}
