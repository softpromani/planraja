<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    public function start_packages()
    {
        return $this->hasMany(TourPackages::class,'start_city');
    }
    
    public function end_packages()
    {
        return $this->hasMany(TourPackages::class,'end_city');
    }
    public function all_eternities()
    {
        return $this->start_packages->merge($this->end_packages);
    }
}
