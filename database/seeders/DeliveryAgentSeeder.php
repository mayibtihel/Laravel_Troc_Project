<?php

namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\DeliveryAgent;
use Illuminate\Database\Seeder;

class DeliveryAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all deliveries that are not yet assigned to a delivery agent
        $deliverys = Delivery::whereNull('delivery_agent_id')->get();

        if ($deliverys->isEmpty()) {
            // Handle the case when there are no unassigned deliveries
            return;
        }

        // Create delivery agents and assign each to a random delivery
        DeliveryAgent::factory(10)->create()->each(function ($agent) use ($deliverys) {
            if ($delivery = $deliverys->pop()) { // Pop a delivery from the collection
                $delivery->delivery_agent_id = $agent->id;
                $delivery->save();
            }
        });
    }
}
