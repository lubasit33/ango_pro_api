<?php

namespace Database\Factories;

use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistritoFactory extends Factory
{
    protected $model = Distrito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'municipio_id' => Municipio::factory(),
            'nome_distrito' => $this->faker->city(),
        ];
    }

}
