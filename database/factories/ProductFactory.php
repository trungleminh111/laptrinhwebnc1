<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
             
            'img' => 'public/images/product-0.jpg',
            'name' => $this->faker->name(),
          
            'desc' => $this->faker->url(),
            'price' => $this->faker->randomDigit(),
            'category_id' => 1,
        ];
    }
}
