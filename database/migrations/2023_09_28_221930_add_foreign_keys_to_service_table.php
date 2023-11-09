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
        Schema::table('services', function (Blueprint $table) {
            $table->foreign(['category_service_id'], 'FK_E19D9AD212469DE2')->references(['id'])->on('category_services')->onDelete('cascade');
            //$table->foreign(['user_id'], 'FK_E19D9AD2A76ED395')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign('FK_E19D9AD212469DE2');
            $table->dropForeign('FK_E19D9AD2A76ED395');
        });
    }
};
