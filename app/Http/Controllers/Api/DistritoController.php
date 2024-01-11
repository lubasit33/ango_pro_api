<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DistritoResource;
use App\Models\Distrito;
use App\Repositories\DistritoRepository;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    protected $repository;

    public function __construct(DistritoRepository $distritoRepository)
    {
        $this->repository = $distritoRepository;
    }

    public function index($municipioId)
    {
        return DistritoResource::collection(
                $this->repository
                    ->getTodosDistritosByMunicipioId($municipioId));
    }

    public function show($id)
    {
        return new DistritoResource(
                $this->repository
                    ->getDistrito($id));
    }

}
