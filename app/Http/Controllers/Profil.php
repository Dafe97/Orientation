<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class Profil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('pages/profile/index',compact('user'));
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
        //
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
    public function edit(Request $request)
    {
        //   if edit mode = profil_edit
        if($request->edit == "profil_edit"){
            if(Auth::user()->email == $request->email){
                $request->validate([
                    'firstname' => ['required', 'string', 'max:45'],
                    'lastname' => ['required', 'string', 'max:45'],
                    'kind' => ['required', 'string', 'max:1'],
                    'level' => ['required', 'string', 'max:25'],
                   // 'faculty' => ['required', 'string', 'max:20'],
                    'phone' => ['required', 'string', 'max:20'],
               ]);
            }else{
                $request->validate([
                    'firstname' => ['required', 'string', 'max:45'],
                    'lastname' => ['required', 'string', 'max:45'],
                    'kind' => ['required', 'string', 'max:1'],
                    'level' => ['required', 'string', 'max:25'],
                   // 'faculty' => ['required', 'string', 'max:20'],
                    'phone' => ['required', 'string', 'max:20'],
                    'email' => ['required', 'string', 'email', 'max:45', 'unique:users'],
               ]);
            }
            $user_id = Auth::user()->id;
            $user = User::where('id',$user_id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'kind' => $request->kind,
                'level' => $request->level,
               // 'faculty' => $request->faculty,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        }elseif($request->edit == "social_network"){
            $user_id = Auth::user()->id;
            
            if (!empty($request->web_url)) {
                $request->validate([
                    'web_url'   =>   ['string', 'max:255'],
                ]);
            }
            if (!empty($request->github)) {
                $request->validate([
                    'github'    =>   ['string', 'max:255'],
                ]);
            }
            if (!empty($request->twitter)) {
                $request->validate([
                    'twitter'   =>   ['string', 'max:255'],
                ]);
            }
            if (!empty($request->instagram)) {
                $request->validate([
                    'instagram'   =>   ['string', 'max:255'],
                ]);
            }
            if (!empty($request->facebook)) {
                $request->validate([
                    'facebook'   =>   ['string', 'max:255'],
                ]);
            }
            $user = User::where('id',$user_id)->update([
                'web_url' => $request->web_url,
                'github' => $request->github,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook
            ]);
        }elseif($request->edit == "statut"){
            $request->validate([
                'statut' => ['required', 'string', 'max:255','min:50'],
            ]);
            $user_id = Auth::user()->id;
            $user = User::where('id',$user_id)->update([
                'statut' => $request->statut
            ]);
        }
     //   event(new Registered($user));

       // Auth::login($user); 
       return redirect()->route('profil',['id' => Auth::user()->id]);
    }
    public function profil(Request $request){
        $this->validate($request, [
            'imgFile' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
        $image = $request->file('imgFile');
        $input['imagename'] = time().'.'.$image->extension();
     
        $filePath = public_path('/profile');

        $img = Image::make($image->path());
        $img->resize(300, 300)->save($filePath.'/'.$input['imagename']);
        $user_id = Auth::user()->id;
            $user = User::where('id',$user_id)->update([
                'profil' => 'profile/'.$input['imagename']
            ]);
        return redirect()->route('profil',['id' => Auth::user()->id]);
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
