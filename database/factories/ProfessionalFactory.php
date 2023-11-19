<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professional>
 */
class ProfessionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "identification" => $this->faker->numberBetween(270000,1000000000),
            "name" => $this->faker->text(20),
            "phone" => $this->faker->text(20),
            "address" => $this->faker->text(50),
            "email" => $this->faker->text(80),
            "password" => $this->faker->text(50),
            "professionalProfile" => $this->faker->text(100),
            "occupationalProfile" => $this->faker->text(100),

        ];
    }
}
