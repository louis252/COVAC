<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::PDASH;

    protected $username = 'name';

    public function username()
    {
        return 'username'; //or return the field which you want to use.
    }

    public function redirectTo(){
        
        if($users = Auth::user()){

            if($users->ICPassport == NULL) {
                $this->middleware('administrator');
                $this->redirectTo = '/admin/dashboard';
                return $this->redirectTo;
            }

            if($users->StaffID == NULL){
                $this->middleware('patient');
                $this->redirectTo = '/patient/dashboard';
                return $this->redirectTo;
            }
            
            $this->redirectTo = '/login';
            return $this->redirectTo;

        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
