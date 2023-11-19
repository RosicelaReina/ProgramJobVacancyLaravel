<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "charge" => $this->faker->text(50),
            "city" => $this->faker->text(20),
            "company" => $this->faker->text(20),
            "salary" => $this->faker->numberBetween(1000000, 10000000),
            "typeContract" => $this->faker->randomElement(['Indefinido', 'Término fijo', 'Prestación de servicios']),
            "title" => $this->faker->text(500),
            "requeriments" => $this->faker->text(500),
            "state" => $this->faker->randomElement(['Pendiente', 'Definida', 'Cancelada']),
            "visibility" => $this->faker->randomElement(['0', '1'])
        ];
    }
}
