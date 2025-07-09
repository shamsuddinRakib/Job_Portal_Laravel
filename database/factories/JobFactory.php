<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>$this->faker->jobTitle(),
            'salary'=>$this->faker->randomElement(['$50000', '$60000', '$70000', '$80000']),
            'location'=>$this->faker->address(),
            'schedule'=>'fulltime',
            'url'=> $this->faker->url(),
            'featured'=> $this->faker->boolean(),
            'employer_id'=> Employer::factory()
        ];
    }
}
