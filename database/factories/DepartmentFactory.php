<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departmentName = 'Department of ' . fake()->firstName . ' ' . fake()->lastName;
        $status = fake()->randomElement([true, false]);
        return [
            'name' => $departmentName,
            'schoolid'=>School::factory(),
            'totalnoofmedals' => fake()->randomNumber(),
            'status' => $status,
            'created_by' => 1,
        ];
    }
}
