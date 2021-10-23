<?php

use App\Models\District;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);
it("can fetch districts", function () {
    $response = $this->getJson("api/districts");
    $response->assertStatus(200)->assertJsonStructure([
        '*' => ['district_code', 'district_name', 'constituencies' => ['constituency_code', 'constituency_name']]
    ]);
});

it("can fetch district", function () {
    $district = District::factory()->create();
    $response = $this->getJson("api/districts/$district->district_code");
    $response->assertStatus(200)->assertExactJson([
        ["id" => $district->id, "district_code" => $district->district_code, "district_name" => $district->district_name, "created_at" => $district->created_at, "updated_at" => $district->updated_at, "constituencies"=> $district->constituencies]
    ]);
});
