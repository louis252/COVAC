<?php

namespace App\Http\Controllers;

use App\Models\vaccination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function dashboard(){
        
        if(Auth::user()->ICPassport == NULL){
            return redirect('admin/dashboard');
        }

        $vaccination = DB::table('vaccinations')->get();
        $batches = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('patient.dashboard', ['vaccination' => $vaccination, 'batches'=> $batches, 'vaccine'=>$vaccine]);

    }

    public function appointment(){
        
        if(Auth::user()->ICPassport == NULL){
            return redirect('admin/dashboard');
        }

        $vaccinations = DB::table('vaccinations')
        ->where('patientName', Auth::user()->fullName)
        ->where(function ($query) {
            $query  ->where('status', "=", 'Pending')
                    ->orWhere('status', "=", 'Confirmed');
        })->get();
        
        if(count($vaccinations) >= 1){
            return redirect('patient/dashboard')->with(['error' => 'You still have an unfinished vaccine appointment. Please wait for it to be administered before setting up a new appointment']);
        }

        $vaccinations2 = DB::table('vaccinations')
        ->where('patientName', Auth::user()->fullName)
        ->where(function ($query) {
            $query  ->where('status', "=", 'Administered');
        })->get();
        
        if(count($vaccinations2) >= 2){
            return redirect('patient/dashboard')->with(['success' => "You've been vaccinated twice. There's no need for another vaccine appointment."]);
        }
        
        $healthcare_centre = DB::table('healthcare_centre')->get();
        return view('patient.appointment', ['healthcare_centre' => $healthcare_centre]);

    }

    public function appointmentPost(Request $request){

        $validatedData = $request->validate([
            
            'date' => ['required', 'string', 'max:255'],

        ]);

        if(strlen($request->date) != 10){
            return back()->withErrors(['msg' => ["Invalid date."]]);
        }

        $num = 0;
        $apptot = DB::table('vaccinations')->get();
        if (!empty($apptot)) {
            $vaclist = DB::table('vaccinations')->get();
            $num = $vaclist->count();
            $num++;
        }else{
            $num = 1;
        }

        $dateformat = date('Y-m-d', strtotime($request->date));

        $vaccination = new vaccination;

        $vaccination->vaccinationID = $num;
        $vaccination->appointmentDate = $dateformat;
        $vaccination->status = "Pending";
        $vaccination->remarks = "-";
        $vaccination->patientName = $request->patientName;
        $vaccination->centreName = $request->testCenter;
        
        $vaccination->save();
        
        return redirect('patient/dashboard');

    }

    public function history(){
          
        if(Auth::user()->ICPassport == NULL){
            return redirect('admin/dashboard');
        }
     
        $vaccination = DB::table('vaccinations')->get();
        $batches = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('patient.viewhistory', ['vaccination' => $vaccination, 'batches'=> $batches, 'vaccine'=>$vaccine]);
        
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
