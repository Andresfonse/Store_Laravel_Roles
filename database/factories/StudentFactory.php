<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition()
 {
 return [
 'firstname' => $this->faker->firstname,
 'lastname' => $this->faker->lastname,
 'email' => $this->faker->email,
 'phone' => $this->faker->phoneNumber,
 'image' => $this->faker->image


 ];
 }
   
}
