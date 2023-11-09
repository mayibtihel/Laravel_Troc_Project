<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{

//$products=Product::where('order_id',Null)

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $products=Product::doesntHave('order')

         Cart::factory(10)->create()->each(function ($cart) use ($products) {
                   if ($product = $products->pop()) { // Pop a delivery from the collection
                       $product->cart_id = $cart->id;
                       $product->save();
                   }

        } );

    }
}

