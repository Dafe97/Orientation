<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\University;
use  App\Models\Formation;
use App\Models\Sector;
use App\Models\SectorUnblock;

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
        $sectors = Sector::all();
        return view('pages.homes.index',compact("universitys","jobs","sectors"));
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $val = $request->sector;
        $data = SectorUnblock::join('unblocks', 'id_unblocks', '=', 'sector_unblocks.unblocks_id')
        ->where('sectors_id',$val)
        ->get();
 
 
        return response()->json($data);
    }
}
