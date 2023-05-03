<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>$this->faker->word(),
            'descripcion'=>$this->faker->text($maxNbChars = 120),
            'fecha_inicio'=>$this->faker->dateTimeBetween($startDate = '1990'),
            'fecha_fin'=>$this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year'),
            'contacto_id'=>$this->faker->numberBetween(1,1000)
        ];
    }
}
