<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //website home page
    public function websiteHome(){
        return view('website.dashboard.home');
    }

    //login page
    public function loginPage(){
        return view('login');
    }

    //register page
    public function registerPage(){
        return view('register');
    }
}
