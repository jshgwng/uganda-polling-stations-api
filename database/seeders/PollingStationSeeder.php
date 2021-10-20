<?php

namespace Database\Seeders;

use App\Models\PollingStation;
use Illuminate\Database\Seeder;

class PollingStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $polling_stations = [
            ["polling_station_code" => "01", "polling_station_name" => "ADYEDA CENTRE", "voter_count" => 277, "no_of_females" => 134, "no_of_males" => 143, "parish_id" => 1],
            ["polling_station_code" => "02", "polling_station_name" => "APORWEGI P.7 SCHOOL", "voter_count" => 702, "no_of_females" => 379, "no_of_males" => 323, "parish_id" => 1],
            ["polling_station_code" => "03", "polling_station_name" => "ADYEDA IMALO", "voter_count" => 321, "no_of_females" => 164, "no_of_males" => 157, "parish_id" => 1],
        ];

        foreach ($polling_stations as $polling_station) {
            PollingStation::create($polling_station);
        }
    }
}
