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

    public function getTodasComunas()
    {
        return $this->entity->all();
    }

    public function getComuna(int $id)
    {
        return $this->entity->findOrFail($id);
    }

}
