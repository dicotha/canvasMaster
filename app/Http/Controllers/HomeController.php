<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function perfil(){

        return view('perfil');
    }

    public function duvidas(){

        return view('duvidas');
    }

    public function oquee(){

        return view('oquee');
    }
    
    public function sobre(){

        return view('sobre');
    }



}
