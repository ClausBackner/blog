<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PacientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre' => $this->faker->name,
            'apellido' => $this->faker->lastName,
            'dni' => $this->faker->unique()->randomNumber(8),
            'edad' => $this->faker->numberBetween(1, 100),
            'telefono' => 785557778,
            'direccion' => $this->faker->address,
            'servicio'  => $this->faker->randomElement(['Medicina General', 'Odontología', 'Pediatría', 'Ginecología', 'Cardiología']),
            'fecha' => $this->faker->date(),
            'descripcion' => $this->faker->text,
            'iniciales_dni' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J']),
        ];
    }
}
