<?php

namespace Tests\Feature\Api;

use App\Models\Provincia;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProvinciaTest extends TestCase
{
    public function test_get_all_provincias()
    {
        $response = $this->getJson('/provincias');

        $response->assertStatus(200);
    }

    public function test_get_all_provincias_total()
    {
        // $provincias = Provincia::factory()->count(10)->create();
        Provincia::factory()->count(10)->create();

        $response = $this->getJson('/provincias');

        // $response->assertStatus(200)
        //         ->assertJsonCount(count($provincias), 'data');
        $response->assertStatus(200)
                ->assertJsonCount(10, 'data');
    }

    public function test_get_single_provincia_not_found()
    {
        $response = $this->getJson('/provincias/fake_id');

        $response->assertStatus(404);
    }

    public function test_get_single_provincia()
    {
        $provincia = Provincia::factory()->create();

        $response = $this->getJson("/provincias/{$provincia->id}");

        $response->assertStatus(200);
    }

}
