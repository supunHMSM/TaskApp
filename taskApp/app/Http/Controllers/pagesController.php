<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function indexAboutUs(){
        return view('aboutUs');
    }

    public function indexContactUs(){
        return view('contactUs');
    }
}
