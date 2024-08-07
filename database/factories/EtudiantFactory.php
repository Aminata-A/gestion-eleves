<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prenom' => $this->faker->firstName(),
            'nom' => $this->faker->lastName(),
            'adresse' => $this->faker->address(),
            'date_de_naissance' => $this->faker->date(),
            'telephone' => $this->faker->phoneNumber(),
            'matricule' => Str::random(10), 
            'email' => $this->faker->unique()->safeEmail(),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
