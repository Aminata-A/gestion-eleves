<?php

namespace Database\Factories;

use App\Models\Matiere;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'etudiant_id' => Etudiant::factory(),
            'matiere_id' => Matiere::factory(),
            'date' => $this->faker->date(),
            'valeur' => $this->faker->numberBetween(0, 20),
        ];
    }
}
