<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farmacia>
 */
class FarmaciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'nombre' => $this->faker->Name,
        'direccion' => $this->faker->Name,
        'telefono' => $this->faker->numerify('########'),
        ];
    }
}
