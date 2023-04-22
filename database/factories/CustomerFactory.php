<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'gender'=>fake()->random('Male','Female','Other'),
            'languages'=>fake()->text('English','Hindi','Gujarati'),
            'email'=>fake()->unique()->safeEmail(),
            'mobile'=>fake()->unique(),
            'password'=> Hash::make('hi'),
            'date'=>fake()->unique()->date(),
            'caste'=>fake()->random('General','ST','SC','OBC'),
            'file'=>fake()->unique()->file(),
        ];
    }
}
