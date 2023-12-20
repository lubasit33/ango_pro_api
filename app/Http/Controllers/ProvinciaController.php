<?php

namespace App\Http\Controllers;

use App\Repositories\ProvinciaRepository;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    protected $repository;

    public function __construct(ProvinciaRepository $provinciaRepository)
    {
        $this->repository = $provinciaRepository;
    }
    
}
