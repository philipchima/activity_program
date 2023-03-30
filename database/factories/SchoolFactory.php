<?php

namespace Database\Factories;

use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schoolName = fake()->firstName . ' School';
        $status = fake()->randomElement([true, false]);
        return [
            'name' => $schoolName,
            'address'=>fake()->address(),
            'city_id' => fake()->randomNumber(),
            'logo' => fake()->imageUrl(),
            'created_by' => 1,
            'slogan' => fake()->text(50),
            'status' => $status,
            'website' => fake()->domainName(),
        ];
    }
}
