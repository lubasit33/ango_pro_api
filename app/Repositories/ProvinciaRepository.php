<?php

namespace App\Repositories;

use App\Models\Provincia;

class ProvinciaRepository
{
    protected $entity;

    public function __construct(Provincia $model)
    {
        $this->entity = $model;
    }

    public function getTodasProvincias()
    {
        return $this->entity->all();
    }

    public function getProvincia(int $id)
    {
        return $this->entity->findOrFail($id);
    }

}
