<?php

namespace App\Http\Controllers;

use App\Repositories\ComunaRepository;
use Illuminate\Http\Request;

class ComunaController extends Controller
{
    protected $repository;

    public function __construct(ComunaRepository $comunaRepository)
    {
        $this->repository = $comunaRepository;
    }

}
