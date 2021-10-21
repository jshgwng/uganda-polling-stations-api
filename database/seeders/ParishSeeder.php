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
            ["parish_code" => "01", "parish_name" => "ADYEDA", "fk_sub_county_code" => "01"],
            ["parish_code" => "02", "parish_name" => "ALIRA", "fk_sub_county_code" => "01"],
            ["parish_code" => "07", "parish_name" => "ONGOCENG", "fk_sub_county_code" => "01"],
            ["parish_code" => "08", "parish_name" => "ABOKO", "fk_sub_county_code" => "01"],
            ["parish_code" => "25", "parish_name" => "APIRE", "fk_sub_county_code" => "01"],
            ["parish_code" => "16", "parish_name" => "ATONGTIDI", "fk_sub_county_code" => "02"],
            ["parish_code" => "17", "parish_name" => "ACENLWORO", "fk_sub_county_code" => "02"],
            ["parish_code" => "18", "parish_name" => "ATULE", "fk_sub_county_code" => "02"],
            ["parish_code" => "19", "parish_name" => "ALIDO", "fk_sub_county_code" => "02"],
            ["parish_code" => "28", "parish_name" => "AJAR", "fk_sub_county_code" => "02"],
        ];

        foreach ($parishes as $parish) {
            Parish::create($parish);
        }
    }
}
