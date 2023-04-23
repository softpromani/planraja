<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelContacts extends Model
{
    use HasFactory;
    protected $fillable = [ 'contact_person' , 'designation', 'mobile_no', 'email_id', 'account_no', 'account_holder_name', 'ifsc_code', 'pan_card_photo', 'cancel_cheque_photo'];
    public function hotel(){
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }
}
