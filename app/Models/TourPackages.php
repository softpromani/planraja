<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackages extends Model
{
    use HasFactory;
    public function packageimage()
    {
        return $this->hasMany(TourPackageImages::class,'tour_id');
    }

    public function cityname()
    {
       return $this->belongsTo(Cities::class,'start_city');
    }

    public function Eternities()
    {
       return $this->hasMany(Eternity::class,'package_id');
    }

    public function getTotalPriceAttribute()
    {
        $sum=$this->extra_charges??0.00;
        foreach($this->Eternities as $et){
            if($et->hotel){
                $sum=$sum+$et->hotel->perday_ammount??0;
            }
            else
            {
                $sum=$sum+0;
            }
        }
        return (float)$sum;
    }

}
