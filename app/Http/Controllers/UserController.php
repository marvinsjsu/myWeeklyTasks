<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
    	if (Auth::check()) {
    		echo 'Welcome to your profile';
    	} else {
    		return back();
    	}
    	
    }
}
