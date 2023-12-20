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

    public function getTodosDistritos()
    {
        return $this->entity->all();
    }

    public function getDistrito(int $id)
    {
        return $this->entity->findOrFail($id);
    }

}
