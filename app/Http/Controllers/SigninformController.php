<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninformController extends Controller
{
    public function signform(){
        return view('admin\pages\signinform');
    }
}
