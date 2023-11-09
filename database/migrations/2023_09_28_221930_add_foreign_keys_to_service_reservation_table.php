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
        Schema::table('service_reservations', function (Blueprint $table) {
            $table->foreign(['service_id'], 'FK_8E526FF9ED5CA9E6')->references(['id'])->on('services')->onDelete('cascade');
            $table->foreign(['user_id'], 'FK_89')->references(['id'])->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_reservation', function (Blueprint $table) {
            $table->dropForeign('FK_8E526FF9ED5CA9E6');
        });
    }
};
