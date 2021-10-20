<?php

namespace Database\Seeders;

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
            DistrictSeeder::class,
            ConstituencySeeder::class,
            SubCountySeeder::class,
            ParishSeeder::class,
            PollingStationSeeder::class,
        ]);
    }
}
