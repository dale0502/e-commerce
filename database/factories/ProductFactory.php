<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->realText(180),
            'price' => $this->faker->numberBetween(50, 100),
            'quantity' => $this->faker->numberBetween(50, 100),
        ];
    }
}
