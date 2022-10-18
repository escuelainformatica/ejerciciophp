<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idEstudiante'=>0,
            'Rut'=>fake()->numberBetween(1,99999999),
            'Nombre'=>fake()->name(),
            'idCarrera'=>fake()->numberBetween(1,100)
        ];
    }
}
