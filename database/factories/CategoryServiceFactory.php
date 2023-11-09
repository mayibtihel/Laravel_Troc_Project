<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryService>
 */
class CategoryServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return[
            'title' => $this->faker->text(10) ,
            'description'=> $this->faker->realTextBetween(20,200),
            //'image'=>$this->faker->image('public/storage/images/services/Category',454,454,"category"),

        ];
    }


}
