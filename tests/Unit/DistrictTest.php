<?php

use App\Models\District;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);
it("can fetch districts", function()
{
    $response = $this->getJson("api/districts");
    $response->assertStatus(200)->assertJsonStructure([
        '*'=> ['district_code', 'district_name']
    ]);
});