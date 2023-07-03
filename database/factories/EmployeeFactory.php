<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birth' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'photo' => $this->faker->imageUrl(),
            'team_id' => $this->faker->numberBetween(1, 30),
            'role_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
