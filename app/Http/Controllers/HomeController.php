<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            "nama" => "Abbas Zabier M",
            "img" => "G64180018_Abbas Zabier Mohammad 1.png",
            "title" => "Home"
        ]);
    }
}