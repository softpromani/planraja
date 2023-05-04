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
}
