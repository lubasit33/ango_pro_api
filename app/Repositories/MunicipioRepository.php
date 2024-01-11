<?php

namespace App\Repositories;

use App\Models\Municipio;

class MunicipioRepository
{
    protected $entity;

    public function __construct(Municipio $model)
    {
        $this->entity = $model;
    }

    public function getTodosMunicipiosByProvinciaId(string $provinciaId)
    {
        return $this->entity
                    ->where('provincia_id', $provinciaId)
                    ->get();
    }

    public function getMunicipio(string $identify)
    {
        return $this->entity
                    ->findOrFail($identify);
    }

}
