<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart_products', function (Blueprint $table) {
            $table->foreign(['cart_id'], 'FK_2890CCAA1AD5CDBF')->references(['id'])->on('carts')->onDelete('CASCADE');
            $table->foreign(['product_id'], 'FK_2890CCAA4584665A')->references(['id'])->on('products')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_product', function (Blueprint $table) {
            $table->dropForeign('FK_2890CCAA1AD5CDBF');
            $table->dropForeign('FK_2890CCAA4584665A');
        });
    }
};
