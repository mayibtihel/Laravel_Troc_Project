<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TimeTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //CategoryServiceSeeder::class,
            //CategoryProductSeeder::class,
           // ProductSeeder::class,
           // UserSeeder::class,
            //ServiceSeeder::class,
            TimeTableSeeder::class,
            ServiceReservationSeeder::class,
            //DeliverySeeder::class,
            //DeliveryAgentSeeder::class,



        ]);



    }
}
