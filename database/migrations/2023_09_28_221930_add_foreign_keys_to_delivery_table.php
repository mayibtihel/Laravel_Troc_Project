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
        Schema::table('deliveries', function (Blueprint $table) {
            $table->foreign(['delivery_agent_id'], 'FK_3781EC1012136921')->references(['id'])->on('delivery_agents');
            $table->foreign(['order_id'], 'FK_3781EC108D9F6D38')->references(['id'])->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deliveries', function (Blueprint $table) {
            $table->dropForeign('FK_3781EC1012136921');
            $table->dropForeign('FK_3781EC108D9F6D38');
        });
    }
};
