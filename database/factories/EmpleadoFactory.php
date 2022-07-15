<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
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
            'apellido' => $this->faker->lastName,
            'cargo' =>$this->faker->randomElement($array = array ('cajero','atencion al cliente')),
            'turno' =>$this->faker->randomElement($array = array ('A','B')),
            'telefono' => $this->faker->numerify('########'),
            'correo electronico' =>$this->faker->email,
        ];
    }
}
