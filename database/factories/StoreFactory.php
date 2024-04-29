<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "uuid" => fake()->uuid(),
            "name" => fake()->company(),
            "email" => fake()->email(),
            "description" => fake()->sentence(),
            "about" => fake()->paragraph(3, true),
            "phone" => fake()->tollFreePhoneNumber(),
            "whatsapp" => fake()->e164PhoneNumber(),
        ];
    }
}
