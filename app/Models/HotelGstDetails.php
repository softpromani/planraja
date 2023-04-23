<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelGstDetails extends Model
{
    use HasFactory;

    protected $fillable = [ 'gst_no' , 'gst_photo', 'gst_name', 'gst_address', 'extra_charge' ];

    public function hotel(){
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }
}
