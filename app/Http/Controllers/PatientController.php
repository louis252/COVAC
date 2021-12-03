<?php

namespace App\Http\Controllers;

use App\Models\vaccination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function dashboard(){
        
        $vaccination = DB::table('vaccinations')->get();
        $batch = DB::table('vaccinations')->get();
        return view('patient.dashboard', ['vaccination' => $vaccination, 'batch'=> $batch]);
    }

    public function appointment(){
        
        $healthcare_centre = DB::table('healthcare_centre')->get();
        return view('patient.appointment', ['healthcare_centre' => $healthcare_centre]);

    }

    public function appointmentPost(Request $request){

        $validatedData = $request->validate([
            
            'date' => ['required', 'string', 'max:255'],

        ]);

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

    public function __construct()
    {
        $this->middleware('auth');
    }


}
