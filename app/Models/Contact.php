<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    Protected $guarded=[];

    public function getFullNameAttribute()
    {
        return $this->f_name.' '.$this->l_name;
    }
}
