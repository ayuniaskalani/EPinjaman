<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Jabatan;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    

    //   public function index()
    // {
    //       //return view('staff.staffprofile');
    //     $jabatan = Jabatan::All();
        
    //     // dd($staff);
      
    //     return view('staff.staffprofile',compact('jabatan')); 
    // }
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'jawatan' => 'required|max:255',
            'icnumber' => 'required|max:255',
            'telnumber' => 'required|max:255',
            'jabatan_id' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'jawatan' => $data['jawatan'],
            'icnumber' => $data['icnumber'],
            'telnumber' => $data['telnumber'],
            'jabatan_id' => $data['jabatan_id'],
        ]);
    }

   
}
