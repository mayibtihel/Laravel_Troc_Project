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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable()->index();
            $table->decimal('total_price',10,2)->nullable()->index();
            $table->unsignedBigInteger('product_id')->nullable()->index('IDX_F529938595');

            //$table->integer('user_id')->nullable()->index('IDX_F5299398A76ED395');
            $table->dateTime('creation_date')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('order');
    }
};
