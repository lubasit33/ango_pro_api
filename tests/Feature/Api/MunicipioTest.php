<?php

namespace Tests\Feature\Api;

use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MunicipioTest extends TestCase
{
    public function test_get_municipios_provincia_not_found()
    {
        $response = $this->getJson('/provincias/fake_value/municipios');

        $response->assertStatus(200)
                ->assertJsonCount(0, 'data');
    }

    public function test_get_municipios_provincia()
    {
        $provincia = Provincia::factory()->create();

        $response = $this->getJson("/provincias/{$provincia->id}/municipios");

        $response->assertStatus(200);
    }

    public function test_get_municipios_provincia_total()
    {
        $provincia = Provincia::factory()->create();

        Municipio::factory()->count(10)->create(['provincia_id' => $provincia->id]);

        $response = $this->getJson("/provincias/{$provincia->id}/municipios");

        $response->assertStatus(200)
                ->assertJsonCount(10, 'data');
    }

}
