<?php

namespace Database\Seeders;

use App\Models\Constituency;
use Illuminate\Database\Seeder;

class ConstituencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constituencies = [
            ["constituency_code" => "02", "constituency_name" => "KWANIA COUNTY", "fk_district_code" => "01"]
        ];

        foreach ($constituencies as $constituency) {
            Constituency::create($constituency);
        }
    }
}
