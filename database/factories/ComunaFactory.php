<?php

namespace Database\Factories;

use App\Models\Comuna;
use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComunaFactory extends Factory
{
    protected $model = Comuna::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'municipio_id' => Municipio::factory(),
            'nome_comuna' => $this->faker->city(),
        ];
    }

}
