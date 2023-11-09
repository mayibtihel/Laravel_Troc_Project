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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign(['category_product_id'], 'FK_D34A04AD12469DE2')->references(['id'])->on('category_products');
            $table->foreign('user_id')->references(['id'])->on('users');


            //$table->foreign('user_id')->nullable()->index();
            $table->foreign(['order_id'], 'FK_D34A04AD8D9F6D38')->references(['id'])->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('FK_D34A04AD12469DE2');
            $table->dropForeign('FK_D34A04ADA76ED395');
            $table->dropForeign('FK_D34A04AD8D9F6D38');
        });
    }
};
