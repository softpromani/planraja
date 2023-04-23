<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    
    public function aboutUs(Request $request){

        return view('about-us');
    }

    public function contactUs(Request $request){
        return view('contact-us');
    }

    public function privacyPolicy(Request $request){
        return view('privacy-policy');
    }

    public function termsOfUse(Request $request){
        return view('terms');
    }

    

    
}
