<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CanvasController extends Controller
{
    //
    public function novocanvas(){

        return view('novocanvas');
    }

     public function salvacanvas(){

        return view('salvacanvas');
    }

    public function updadecanvas(){

        return view('updadecanvas');
    }
    public function deletecanvas(){

        return view('deletecanvas');
    }



}
