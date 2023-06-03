<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\TourPackages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $cities = Cities::where('state_id', 5)->get();
        $datas = TourPackages::query();
        $days=TourPackages::get()->unique('days')->sortBy('days');
        $filter = (object)$request->all();
        if (isset($request->destination) and $request->destination!='') {
            $datas->where('start_city', $request->destination)->orWhere('end_city', $request->destination);
        }
        if (isset($request->day) and $request->day!=null) {
            $datas->where('days', $request->day);
        }
        $datas = $datas->where('status', '1')->latest()->paginate(6);
        $package = TourPackages::where('status', '1')->inRandomOrder()->limit(6)->get();
        return view('welcome', compact('datas', 'filter', 'cities','days','package'));
    }

    public function singlePackage($id)
    {
        $datas = TourPackages::find($id);
        return view('single-packages', compact('datas'));
    }
}
