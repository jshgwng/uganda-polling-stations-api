<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    use HasFactory;
    protected $primaryKey = "parish_code";
    public $incrementing = false;
    protected $fillable = ["parish_code","parish_name","sub_county_code"];
}
