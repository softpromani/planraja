<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.login');
    }

    public function loginCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->route('admin-panel')->with('error', 'Invalid Access ! Please try again !');

        } else {
            $userdata = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($userdata)) {
                // validation successful
                return redirect()->route('dashboard')->with('success', 'Login successfully.');

            } else {
                // validation not successful, send back to form
                // return Redirect::to('checklogin');
                return redirect()->route('admin-panel')->with('error', 'Invalid Access ! Please try again !!');

            }
        }
    }
}
