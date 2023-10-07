<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word.random_int(1,500),
            'details' =>$this->faker->paragraph,
            'description' => $this->faker->paragraph,
            'brand' => $this->faker->word,
            'price' => $this->faker->numberBetween(1,100),
            'shipping_cost' => $this->faker->numberBetween(1,20),
            'image_path' => $this->faker->paragraph,
        ];
    }
}
