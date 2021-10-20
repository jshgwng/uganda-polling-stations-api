<?php

namespace Database\Seeders;

use App\Models\Parish;
use Illuminate\Database\Seeder;

class ParishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parishes = [
            ["parish_code" => "01", "parish_name" => "ADYEDA", "sub_county_id" => 1],
            ["parish_code" => "02", "parish_name" => "ALIRA", "sub_county_id" => 1],
            ["parish_code" => "07", "parish_name" => "ONGOCENG", "sub_county_id" => 1],
            ["parish_code" => "08", "parish_name" => "ABOKO", "sub_county_id" => 1],
            ["parish_code" => "25", "parish_name" => "APIRE", "sub_county_id" => 1],
            ["parish_code" => "16", "parish_name" => "ATONGTIDI", "sub_county_id" => 2],
            ["parish_code" => "17", "parish_name" => "ACENLWORO", "sub_county_id" => 2],
            ["parish_code" => "18", "parish_name" => "ATULE", "sub_county_id" => 2],
            ["parish_code" => "19", "parish_name" => "ALIDO", "sub_county_id" => 2],
            ["parish_code" => "28", "parish_name" => "AJAR", "sub_county_id" => 2],
        ];

        foreach ($parishes as $parish) {
            Parish::create($parish);
        }
    }
}
