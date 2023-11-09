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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_product_id')->nullable()->index('IDX_D34A04AD12469DE2');
            $table->integer('user_id')->nullable()->index();

            // $table->integer('user_id')->nullable()->index('IDX_D34A04ADA76ED395');
            $table->integer('order_id')->nullable()->unique('UNIQ_D34A04AD8D9F6D38');
            $table->string('name');
            $table->double('price');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
