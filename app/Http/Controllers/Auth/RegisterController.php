<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { 
        $stape = SessionController::getSession("stape");
        switch ($stape) {
            case 1 : 
               return Validator::make($data, [
                        'firstname' => ['required', 'string','min:2', 'max:20'],
                        'lastname' => ['required', 'string', 'min:2','max:20'],
                        'kind' => ['required', 'string', 'max:1'],
                        'level' => ['required', 'string'],
                        'phone' => ['required', 'integer','unique:users'],
                     ]);
                break;
            case 2: 
               return Validator::make($data, [
                        'faculty' => ['required', 'string', 'max:20'],
                      ]);
                break;
            case 3: 
                return Validator::make($data, [
                            'email' => ['required', 'string', 'email', 'max:45', 'unique:users'],
                            'password' => ['required', 'confirmed', Rules\Password::defaults()],
                        ]);
                 break;
            default:
               echo('error');
                break;
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     */
    protected function create(array $data)
    {      
        $data_session = Request()->session()->get("users");
        if (Request()->session()->get('stape') == 3) {
            $user = User::create([
                'firstname' => $data_session[0]["firstname"],
                'lastname' => $data_session[0]["lastname"],
                'kind' => $data_session[0]["kind"],
                'level' => $data_session[0]["level"],
                'phone' => $data_session[0]["phone"],
                'faculty' => $data_session[1]["faculty"],
                'email' => $data["email"],
                'password' => Hash::make($data["password"]),
                'profil'  => "profile/user.png"
            ]);
            Request()->session()->increment('stape');
            return $user;
        }else{
            Request()->session()->increment('stape');
            Request()->session()->push('users',$data);
        }
    }
}
       