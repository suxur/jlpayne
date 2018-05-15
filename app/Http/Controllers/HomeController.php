<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();

        return view('home')->with(compact('experiences'));
    }
}
