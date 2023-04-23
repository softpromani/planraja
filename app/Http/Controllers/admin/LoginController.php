<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.login');
    }

    public function loginCheck(Request $request)
    {
        echo "<Pre>";
        print_r($request->all());
        exit;
    }
}
