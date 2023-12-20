<?php

namespace App\Http\Controllers;

use App\Repositories\MunicipioRepository;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    protected $repository;

    public function __construct(MunicipioRepository $municipioRepository)
    {
        $this->repository = $municipioRepository;
    }

}
