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
        Schema::create('service_reservations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('service_id')->nullable()->index('IDX_8E526FF9ED5CA9E6');
            $table->integer('user_id')->nullable()->index('idx_20');

            $table->dateTime('date',0)->nullable();
            $table->string('status')->nullable();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('service_reservation');
    }
};
