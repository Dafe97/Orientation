<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Abouts extends Controller
{
    public function index()
    {
        return view('pages/abouts/index');
    }
}
