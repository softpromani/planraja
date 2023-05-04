<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HotelAddresses;
use App\Models\HotelContacts;
use App\Models\HotelGstDetails;
use App\Models\HotelPhotos;

class Hotels extends Model
{
    use HasFactory;

    public function hotelAddress()
    {
        return $this->hasOne(HotelAddresses::class, 'hotel_id');
    }
    public function hotelContact()
    {
        return $this->hasOne(HotelContacts::class, 'hotel_id');
    }
    public function hotelGst()
    {
        return $this->hasOne(HotelGstDetails::class, 'hotel_id');
    }
    public function hotelPhoto()
    {
        return $this->hasMany(HotelPhotos::class, 'hotel_id');
    }
}
