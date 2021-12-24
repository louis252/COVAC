<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Users;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function redirectTo() {
        if(Auth::user()->ICPassport != NULL) {
            $this->redirectTo = '/patient/dashboard';
            return $this->redirectTo;
        }elseif(Auth::user()->staffID != NULL){
            $this->redirectTo = '/manager/dashboard';
            return $this->redirectTo;
        }else{
            $this->redirectTo = '/login';
            return $this->redirectTo;
        }
    }

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
        
        return Validator::make($data, [
           
            'username' => ['required', 'string', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:25', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:25'],
            'firstName' => ['required', 'string', 'max:25'],
            'lastName' => ['required', 'string', 'max:25'],
            'ICPassport' => ['required', 'string', 'min:16', 'max:16'],

        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        
        $name = $data['firstName'] . ' ' . $data['lastName'];
        $newid = DB::table('users')->orderBy('id', 'DESC')->first();

        return Users::create([
            
            'id' => $newid->id+1,
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'fullName' => $name,
            'ICPassport' => $data['ICPassport'],
        ]);

    }
}
