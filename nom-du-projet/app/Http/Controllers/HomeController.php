<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home (){
        return view('Home.home');
    }

    public function about (){
        return view('Home.about');
    }

    public function dashboard(){
        return view ('Home.dashbord');
    }
}
