<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\{
    ComunaController,
    DistritoController,
    MunicipioController,
    ProvinciaController
};

Route::get('/provincias', [ProvinciaController::class, 'index']);
Route::get('/provincias/{id}', [ProvinciaController::class, 'show']);

Route::get('/provincias/{id}/municipios', [MunicipioController::class, 'index']);
Route::get('/municipios/{id}', [MunicipioController::class, 'show']);

Route::get('/municipios/{id}/comunas', [ComunaController::class, 'index']);
Route::get('/comunas/{id}', [ComunaController::class, 'show']);

Route::get('/municipios/{id}/distritos', [DistritoController::class, 'index']);
Route::get('/distritos/{id}', [ComunaController::class, 'show']);

Route::get('/', function() {
    return response()->json([
        'success' => true,
    ]);
});
