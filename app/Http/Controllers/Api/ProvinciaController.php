<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinciaResource;
use App\Repositories\ProvinciaRepository;

class ProvinciaController extends Controller
{
    protected $repository;

    public function __construct(ProvinciaRepository $provinciaRepository)
    {
        $this->repository = $provinciaRepository;
    }

    public function index()
    {
        return ProvinciaResource::collection(
                $this->repository
                    ->getTodasProvincias());
    }

    public function show($id)
    {
        return new ProvinciaResource(
                $this->repository
                    ->getProvincia($id));
    }

}
