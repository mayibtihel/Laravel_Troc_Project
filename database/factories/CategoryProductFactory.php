<?php

namespace Database\Factories;

use App\Models\CategoryProduct;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryProduct>
 */
class CategoryProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'user_id'=> $this->faker->randomElement(User::all()->pluck("id")),
            //'order_id'=> $this->faker->randomElement(Order::all()->pluck("id")),
            'title' => $this->faker->title(),
            'description'=>$this->faker->realTextBetween(30,200)
        ];
    }
}
