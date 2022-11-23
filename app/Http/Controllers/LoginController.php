<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("login", [
            "title" => "login"
        ]);
    }

    public function auth(Request $request){     
        $auth = $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($auth)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    
        return back("/login", [
            "title" => "login"
        ]);
    }

    public function logout(Request $request){

        auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect("/");
    }
}