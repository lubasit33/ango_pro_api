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

    public function getTodosMunicipios()
    {
        return $this->entity->all();
    }

    public function getMunicipio(int $id)
    {
        return $this->entity->findOrFail($id);
    }

}
