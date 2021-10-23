<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    use HasFactory;
    protected $primaryKey = "constituency_code";
    public $incrementing = false;
    protected $fillable = ["constituency_code","constituency_name","fk_district_code"];

    public function district(){
        return $this->belongsTo(District::class);
    }
}
