<?php

namespace Tests\Feature\Api;

use App\Models\Comuna;
use App\Models\Municipio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComunaTest extends TestCase
{
    public function test_get_comunas_of_municipio_not_found()
    {
        $response = $this->getJson('/municipios/fake_value/comunas');

        $response->assertStatus(200)
                ->assertJsonCount(0, 'data');
    }

    public function test_get_comunas_of_municipio()
    {
        $municipio = Municipio::factory()->create();

        $response = $this->getJson("/municipios/{$municipio->id}/comunas");

        $response->assertStatus(200);
    }

    public function test_get_comunas_provincia_total()
    {
        $municipio = Municipio::factory()->create();

        Comuna::factory()->count(10)->create(['municipio_id' => $municipio->id]);

        $response = $this->getJson("/provincias/{$municipio->id}/municipios");

        $response->assertStatus(200)
                ->assertJsonCount(10, 'data');
    }

}
