<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Polaznik>
 */
class PolaznikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'jmbg' => $this->faker->numerify("##############"),
            'brojTelefona' => $this->faker->numerify("+381 ## ####/##-###"),
            'email' => $this->faker->unique()->safeEmail(),
         
        ];
    }
}
