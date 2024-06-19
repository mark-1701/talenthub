<?php

namespace Database\Factories;

use App\Models\Employee;
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
            'position_id' => random_int(1, 10),
            'email' => fake()->unique()->safeEmail(),
            'password' => 12345678,
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'date_of_birth' => fake()->date($format = 'Y-m-d', $max = '-18 years'),
            'hire_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'base_salary' => 1000,
            'payroll_type' => fake()->randomElement(['Monthly', 'Hourly']), // Assuming payroll type can be monthly or hourly
        ];
    }
}
