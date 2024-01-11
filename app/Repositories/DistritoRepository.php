<?php

namespace App\Repositories;

use App\Models\Distrito;

class DistritoRepository
{
    protected $entity;

    public function __construct(Distrito $model)
    {
        $this->entity = $model;
    }

    public function getTodosDistritosByMunicipioId(string $municipioId)
    {
        return $this->entity
                    ->where('municipio_id', $municipioId)
                    ->get();
    }

    public function getDistrito(string $identify)
    {
        return $this->entity
                    ->findOrFail($identify);
    }

}
