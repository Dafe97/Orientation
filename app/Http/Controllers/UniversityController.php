<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ResizeController;
use  App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universitys = University::All();
        return view("pages/university/index",compact('universitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages/university/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
       
       $d = $request->validate([
           "title"    => "required|max:45",
           "contents" => "required|max:255",
           "img"      => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
           "web"      => "string|url|max:255|unique:university"
           
       ]);
 
      $request->img = (new ResizeController)->resizeImage($request);
     
    
      $val = University::create([
          'title'    => $request->title,
          'contents' => $request->contents,
          "img"      => $request->img,
          "web"      => $request->web
      ]);
   
        return redirect()->route('university.index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
