<?php

namespace Database\Factories;

use App\Models\CategoryProduct;
use App\Models\Order;
use App\Models\User;
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
    public function definition()
    {
        return [
            //'user_id'=> $this->faker->randomElement(User::all()->pluck("id")),
            //'order_id'=> $this->faker->randomElement(Order::all()->pluck("id")),
            'name' => $this->faker->name(),
            'price'=> $this->faker->numberBetween(1,99),
            'image'=>$this->faker->image('public/storage/images/products',400,250,"product"),
            'description'=>$this->faker->realTextBetween(30,200),
            'category_product_id'=> $this->faker->randomElement(CategoryProduct::all()->pluck("id"))
        ];



    }
}
