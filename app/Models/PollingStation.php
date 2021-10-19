<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingStation extends Model
{
    use HasFactory;
    protected $fillable = ["polling_station_code","polling_station_name","parish_id", "voter_count","no_of_females", "no_of_males"];
}
