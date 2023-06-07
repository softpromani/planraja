<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Enquiry;
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

    public function contact(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        try {
            $data = Contact::create([
                'f_name' => $request->first_name,
                'l_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'comment' => $request->comments??'',
            ]);
            if($data){
                return back()->with('toast_success', 'Thanks for registration we will contact you soon!.');
            }
            // Additional code to handle success or redirect
        } catch (\Exception $e) {
            // Handle the exception, display an error message, or log the error
            // For example:
            return back()->with('toast_error', 'An error occurred. Please try again.');
        }
    }

    public function enquiry(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'departuredate' => 'required',
            'email' => 'required',
            'number' => 'required',
            'totalmember' => 'required',
            'numberofdays' => 'required',
            'description' => 'required',
        ]);
        try {
            $data = Enquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'departure_date' => $request->departuredate,
                'total_members' => $request->totalmember??'',
                'number' => $request->number??'',
                'days' => $request->numberofdays??'',
                'description' => $request->description??'',
            ]);
            if($data){
                return back()->with('toast_success', 'Thanks for registration we will contact you soon!.');
            }
            // Additional code to handle success or redirect
        } catch (\Exception $e) {
            // Handle the exception, display an error message, or log the error
            // For example:
            return back()->with('toast_error', 'An error occurred. Please try again.');
        }
    }


}
