<?php

namespace App\Http\Controllers;

use App\Models\TourPackageCategory;
use Illuminate\Http\Request;

class packageDetailController extends Controller
{
    public function package_details()
    {
        $category =TourPackageCategory::get();
       return view('packages',compact('category'));
    }
}
