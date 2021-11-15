<?php

namespace Database\Factories;

use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'tipo_id' => Tipo::all()->random()->id,
            'duenio' => $this->faker->name(),
            'descripcion' => $this->faker->paragraph()
        ];
    }
}
