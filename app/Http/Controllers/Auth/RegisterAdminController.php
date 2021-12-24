<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class RegisterAdminController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:25', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:25'],
            'firstName' => ['required', 'string', 'max:25'],
            'lastName' => ['required', 'string', 'max:25'],
            'staffID' => ['required', 'string', 'min:10', 'max:10'],
            'centreName' => ['required', 'string']
        ]);
        
        $name = $request->firstName . ' ' . $request->lastName;
        $newid = DB::table('users')->orderBy('id', 'DESC')->first();

        $users = new Users;

        $users->id = $newid->id+1;
        $users->username = $request->username;
        $users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->fullName = $name;
        $users->staffID = $request->staffID;
        $users->centreName = $request->centreName;
        
        $users->save();
        
        return redirect('/admin/dashboard');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $healthcare_centre = DB::table('healthcare_centre')->get();
        return view('auth.registerAdmin', ['data'=>$healthcare_centre]);
        
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