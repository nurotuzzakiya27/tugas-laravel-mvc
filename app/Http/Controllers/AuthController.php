<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function welcome(Request $request)
    {
        $first_name = $request->input('fname');
        $last_name = $request->input('lname');
        // return $first_name;
    	return view('welcome', compact('first_name', 'last_name'));
    }
}
