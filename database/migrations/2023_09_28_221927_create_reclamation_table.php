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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->integer('id', true);

            $table->integer('user_id')->nullable()->index();

            // $table->integer('user_id')->nullable()->index('IDX_D34A04ADA76ED395');
            $table->string('status')->default('Pending');
            $table->string('title');

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
