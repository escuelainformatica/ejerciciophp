<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clima>
 */
class ClimaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=>0,
            'nombreciudad'=>fake()->city(),
            'temperatura'=>fake()->randomFloat(2,-5,20),
            'tipoclima'=>'soleado',
            'icono'=>''
        ];
    }
}
