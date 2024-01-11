<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComunaResource;
use App\Repositories\ComunaRepository;
use Illuminate\Http\Request;

class ComunaController extends Controller
{
    protected $repository;

    public function __construct(ComunaRepository $comunaRepository)
    {
        $this->repository = $comunaRepository;
    }

    public function index($municipioId)
    {
        return ComunaResource::collection(
                $this->repository
                    ->getTodasComunasByMunicipioId($municipioId));
    }

    public function show($id)
    {
        return new ComunaResource(
                $this->repository
                    ->getComuna($id));
    }

}
