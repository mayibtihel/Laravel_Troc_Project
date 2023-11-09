<?php

namespace Database\Factories;

use App\Models\CategoryService;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price'=> $this->faker->randomFloat(1,40,100),
            'image'=>$this->faker->image('public/storage/images/services',454,454,"service"),
            'description'=>$this->faker->realTextBetween(30,300),
            'duration'=>$this->faker->randomElement(["30","60","90","120","150","180","210","240","270"]),
            'category_service_id'=> $this->faker->randomElement(CategoryService::all()->pluck("id")),
            'user_id'=> $this->faker->randomElement(User::all()->pluck("id"))

        ];
    }


}
