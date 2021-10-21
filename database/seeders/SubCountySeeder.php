<?php

namespace Database\Seeders;

use App\Models\SubCounty;
use Illuminate\Database\Seeder;

class SubCountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_counties = [
            ["sub_county_code" => "01", "sub_county_name" => "ADUKU", "fk_constituency_code" => "02"],
            ["sub_county_code" => "02", "sub_county_name" => "CAWENTE", "fk_constituency_code" => "02"],
        ];

        foreach ($sub_counties as $sub_county) {
            SubCounty::create($sub_county);
        }
    }
}
