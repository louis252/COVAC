<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(!Auth::guest()){
            if(Auth::user()->ICPassport != "null") {
                return redirect()->intended('patient/dashboard')
                ->withSuccess('Signed in');
            }elseif(Auth::user()->staffID != "null"){
                return redirect()->intended('administrator/dashboard')
                        ->withSuccess('Signed in');
            }else{
                return view('index', [
                    "title" => "Home"
                ]);
            }
        }else{
            return view('index', [
                "title" => "Home"
            ]);
        }
    }
}
