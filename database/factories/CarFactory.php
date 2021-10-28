<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */



    public function definition()
    {
        return [
            'image' => $this->faker->text(10),
            'company' => $this->faker->text(10),
            'name' => $this->faker->text(10),
            'year' => $this->faker->unique()->numberBetween(1, 200),
            'price' => $this->faker->unique()->numberBetween(1, 200),
            'type' => $this->faker->text(10),
            'appearance' => $this->faker->text(10),
        ];
    }
}
