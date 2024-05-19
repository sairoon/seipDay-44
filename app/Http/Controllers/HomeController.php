<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function serviceOne(){
        return view('service.service-one');
    }
    public function serviceTwo(){
        return view('service.service-two');
    }
    public function serviceThree(){
        return view('service.service-three');
    }
}
