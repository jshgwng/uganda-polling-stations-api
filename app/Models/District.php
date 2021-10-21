<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $primaryKey = "district_code";
    public $incrementing = false;
    protected $fillable = ["district_code", "district_name"];

    public function constitencies(){
        return $this->hasMany(Constituency::class);
    }
}
