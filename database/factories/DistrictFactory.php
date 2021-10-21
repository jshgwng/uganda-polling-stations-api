<?php

namespace Database\Factories;

use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = District::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $increment = 0;
        return 
            ["id" => strval($this->faker->unique()->randomDigit()),"district_code" => "01", "district_name" => "Apac", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ;
    }
}
