<?php

use App\Models\District;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);
it("can fetch districts", function()
{
    $districts = District::factory()->count(10)->create();
});