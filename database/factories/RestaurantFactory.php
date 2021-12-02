<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cuisines = ['Thai', 'Indian', 'Italian', 'Chinese', 'Japanese', 'French', 'African', 'Mexican', 'Cuban', 'Peruvian', 'American', 'Southern', 'Seafood', 'Steakhouse'];
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'price' => $this->faker->numberBetween(1, 5),
            'cuisine' => $cuisines[array_rand($cuisines)]
            //
        ];
    }
}
