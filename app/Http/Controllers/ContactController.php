<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if (!Auth::check()){
            $request->validate([
                "name"     => ['required', 'string', 'max:20'],
                "email"    => ['required', 'string', 'email', 'max:45'],
                "subject"  => ['required', 'string', 'max:20'],
                "contents" => ['required','string']
             ]);
             Contact::create([
                "name" => $request->name,
                "email" => $request->email,
                "subject" => $request->subject,
                "contents" => $request->contents,
            ]);
        }else{
            $request->validate([
                "subject"  => ['required', 'string', 'max:20'],
                "contents" => ['required','string']
             ]);

             $user  =  auth()->user();
            
             Contact::create([
                "name" => $user->firstName,
                "email" => $user->email,
                "subject" => $request->subject,
                "contents" => $request->contents,
            ]);
        }
       
        return redirect()->route('index');
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
