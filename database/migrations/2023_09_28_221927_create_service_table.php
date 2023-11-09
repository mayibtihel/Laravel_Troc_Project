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
        Schema::create('services', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_service_id')->nullable()->index('IDX_E19D9AD212469DE2');
            $table->integer('user_id')->nullable()->index();

            // $table->integer('user_id')->nullable()->index('IDX_E19D9AD2A76ED395');
            $table->string('name');
            $table->double('price');
            $table->string('image');
            $table->longText('description')->nullable();
            $table->integer('duration')->nullable();
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
        Schema::dropIfExists('service');
    }
};
