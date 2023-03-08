<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductSellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title(20),
            'price' => fake()->numberBetween(100, 100000),
            'product_condition' => 'Новый',
            'user_id' => (User::where('role')->get() == 'seller') ? 1 : User::all()->random()->id,
        ];
    }
}
