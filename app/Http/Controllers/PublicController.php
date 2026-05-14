<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function home()
    {
        return view('public.home');
    }
    public function Login(){
        return view('public.login');
    }
    public function register(){
        return view('public.register');
    }


}
