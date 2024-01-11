<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MunicipioResource;
use App\Repositories\MunicipioRepository;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    protected $repository;

    public function __construct(MunicipioRepository $municipioRepository)
    {
        $this->repository = $municipioRepository;
    }

    public function index($provinciaId)
    {
        return MunicipioResource::collection(
            $this->repository
                ->getTodosMunicipiosByProvinciaId($provinciaId));
    }

    public function show($id)
    {
        return new MunicipioResource(
                $this->repository
                    ->getMunicipio($id));
    }

}
