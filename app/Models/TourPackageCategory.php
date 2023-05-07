<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackageCategory extends Model
{
    use HasFactory;

    public function packages()
    {
        return $this->hasMany(TourPackages::class,'tour_category_id');
    }
}
