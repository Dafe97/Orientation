<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;

class ResizeController extends Controller
{
    
    public function index()
    {
    	return view('testri');
    }

    public function resizeImage(Request $request)
    {
       
	//   $val=  $this->validate($request, [
    //         'img' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
    //     ]);
       
        $image = $request->file('img');
        $input['img'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = public_path('/thumbnail');
        
        $imgFile = Image::make($image->getRealPath());

        $imgFile->resize(300, 300, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['img']);

        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['img']);
       
       $url_img = "/thumbnail/".$input['img'];
        return $url_img;
    }

}