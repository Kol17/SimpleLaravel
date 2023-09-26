<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'price'=>$this->faker->unique()->numberBetween(10,1000),
            'desc'=>$this->faker->phoneNumber()
        ];
    }
}
