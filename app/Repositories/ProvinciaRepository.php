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
        return $this->entity
                    ->with(['municipios.comunas', 'municipios.distritos'])
                    ->get();
    }

    public function getProvincia(string $identify)
    {
        return $this->entity
                    ->with(['municipios.comunas', 'municipios.distritos'])
                    ->findOrFail($identify);
    }

}
