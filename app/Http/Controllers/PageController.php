<?php

namespace App\Http\Controllers;
use App\Travel;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {   
        $travels = Travel::all();
        //dd($travels);
        return view('home', compact('travels'));
    }
}
