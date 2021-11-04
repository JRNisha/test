<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return view('admin.pages.index');
    }
    public function test2(){
        return view('admin.pages.testtool');
    }
}
