<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotels;

class HotelAddresses extends Model
{
    use HasFactory;

    protected $fillable = [ 'address' , 'pincodeId', 'mapLocation' ];

    public function hotel(){
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }
}
