<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notas>
 */
class NotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'texto'=>$this->faker->text($maxNbChars = 200),
            'fecha'=>$this->faker->dateTimeBetween($startDate = '1990'),
            'contacto_id'=>$this->faker->numberBetween(1,1000)
        ];
    }
}
