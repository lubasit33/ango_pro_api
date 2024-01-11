<?php

namespace Database\Factories;

use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipioFactory extends Factory
{
    protected $model = Municipio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provincia_id' => Provincia::factory(),
            'nome_municipio' => $this->faker->city(),
        ];
    }

}
