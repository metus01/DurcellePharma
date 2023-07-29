<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //  public function login()
    // {
    //     return view('auth.login');
    // }

    // public function register()
    // {
    //     return view('auth.register');
    // }

    //la page/vue home.blade.php
    public function home()
    {
        return view('home.home');
    }

    //la page/vue about.blade.php
    public function about()
    {
        return view('home.about');
    }

    public function pharmacie()
    {
        return view('home.pharmacie');
    }

    public function catalogue()
    {
        return view('home.catalogue');
    }

    public function tableau()
    {
        return view('home.tableau');
    }

    public function dashboard()
    {
        return view('home.dashboard');
    }


}
