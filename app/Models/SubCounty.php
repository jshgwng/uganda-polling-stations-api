<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;
    protected $primaryKey = "sub_county_code";
    public $incrementing = false;
    protected $fillable = ["sub_county_code","sub_county_name","constituency_code"];
}
