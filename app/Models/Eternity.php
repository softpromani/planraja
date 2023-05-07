<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eternity extends Model
{
    use HasFactory;
    Protected $guarded=[];
    public function hotel()
    {
        return $this->belongsTo(Hotels::class,'hotel_id');
    }
    public function city()
    {
       return $this->belongsTo(Cities::class,'city_id');
    }
    public function hotelphotos()
    {
        return $this->hasMany(HotelPhotos::class,'hotel_id');
    }
}
