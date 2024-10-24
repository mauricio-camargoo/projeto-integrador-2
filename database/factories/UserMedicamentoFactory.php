<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserMedicamento>
 */
class UserMedicamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => fake()->numberBetween(1, 5),
            'id_medicamento' => fake()->lastName(3, 6),
            'tipo_dosagem' => fake()->randomElement(['gota','comprimido']),
            'qtd_dosagem' => fake()->numberBetween(1, 15),
            'horario' => fake()->time('H:i'),
        ];
    }
}
