<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public static function getSession($key_session ){
        if (Request()->session()->has($key_session)) {
            return Request()->session()->get($key_session);
        }else{
            return "la session n'existe pas";
        }
    }
    public static function getAll(){
            return Request()->session()->all();
    }
    public function storeSession($key_session,$value_session){
        Request()->session()->put($key_session, $value_session);
    }
    public function removeAll(){
        Request()->session()->flush();
    }
    public static function destroy($key_session = []){
       foreach ($key_session as $key => $value) {
            if (Request()->session()->exists($value)) {
                Request()->session()->forget($value);
            }
       }
    } 
}
