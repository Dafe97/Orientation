<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\University;
use  App\Models\Formation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $universitys = University::get()->take(3);
        $jobs = Formation::get()->take(2);
        return view('pages.homes.index',compact("universitys","jobs"));
    }
}
