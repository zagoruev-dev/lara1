<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['likes' => "int", 'views' => "int"])]
    public function definition(): array
    {
        return [
            'likes' => $this->faker->numberBetween(int1:1, int2:20),
            'views' => $this->faker->numberBetween(int1:21, int2:100),
        ];
    }
}
