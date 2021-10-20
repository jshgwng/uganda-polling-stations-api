<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ["district_code" => "01","district_name" => "Apac"]
        ];

        foreach($districts as $district) {
            District::create($district);
        }
    }
}
