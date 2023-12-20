<?php

namespace App\Http\Controllers;

use App\Repositories\DistritoRepository;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    protected $repository;

    public function __construct(DistritoRepository $distritoRepository)
    {
        $this->repository = $distritoRepository;
    }

}
