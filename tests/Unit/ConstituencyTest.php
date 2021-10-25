<?php
use App\Models\Constituency;
use Tests\TestCase;

use function Pest\Laravel\getJson;

uses(TestCase::class);

it("can fetch all constituencies", function(){
    $response = getJson("api/constituencies");
    $response->assertStatus(200)->assertJson([
        [
            "id","constituency_code","constituency_name", "fk_district_code", "sub_counties" => [
                "id","sub_county_code","sub_county_name"
            ]
        ]
    ]);
});
