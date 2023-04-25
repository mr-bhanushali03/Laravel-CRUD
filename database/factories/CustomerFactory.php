<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

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
    public $array = array();
    public function definition(): array
    {
        // $this->array = array('male','female','other','General','ST','SC','OBC');
        return [
            'name'=>fake()->name(),
            'gender'=> Arr::random(['Male','Female','Other']),
            'languages'=>Arr::random(['English','Hindi','Gujarati','English,Hindi,Gujarati','English,Hindi','Hindi,Gujarati']),
            'email'=>fake()->unique()->safeEmail(),
            'mobile'=>fake()->unique()->phoneNumber(),
            'password'=> Hash::make('hi'),
            'date'=>now(),
            'caste'=>Arr::random(['General','ST','SC','OBC']),
            'file'=>fake()->image(public_path('upload'),200,200,null,false),
        ];
    }
}
