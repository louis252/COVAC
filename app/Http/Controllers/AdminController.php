<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\vaccination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        
        if(Auth::user()->ICPassport != NULL){
            return redirect('patient/dashboard');
        }

        $vaccination = DB::table('vaccinations')->get();
        return view('auth.admin.dashboard', ['vaccinations' => $vaccination]);

    }

    public function viewbatch(){

        if(Auth::user()->ICPassport != NULL){
            return redirect('patient/dashboard');
        }

        $batch = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('auth.admin.viewbatch', ['batches' => $batch, 'vaccine' => $vaccine]);

    }

    public function registerbatch(){

        if(Auth::user()->ICPassport != NULL){
            return redirect('patient/dashboard');
        }

        $batch = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('auth.admin.registerbatch', ['batches' => $batch, 'vaccine' => $vaccine]);

    }

    public function registerbatchPost(Request $request){

        if(strlen($request->date) != 10 && $request->total < 0){
            return back()->with(['err' => "Invalid date format, and number of available vaccine"]);
        }

        if(strlen($request->date) != 10){
            return back()->with(['dateerr' => "Invalid date."]);
        }

        if($request->total < 0){
            return back()->with(['quantityerr' => 'Invalid quantity of available vaccine.']);
        }

        $validatedData = $request->validate([
            
            'date' => ['required', 'string', 'max:255'],
            'total' => ['required', 'integer'],

        ]);

        $dateformat = date('Y-m-d', strtotime($request->date));

        $batch = new batch;
        $newid = DB::table('batches')->orderBy('batchNo', 'DESC')->first();

        $batch->batchNo = $newid->batchNo+1;
        $batch->expiryDate = $dateformat;
        $batch->quantityAvailable = $request->total;
        $batch->quantityAdministered = 0;
        $batch->vaccineID = $request->vaccineID;
        $batch->centreName = $request->centreName;
        
        $batch->save();

        return redirect('admin/viewbatch');

    }

    public function confirmappointment(){

        if(Auth::user()->ICPassport != NULL){
            return redirect('patient/dashboard');
        }

        $vaccinations = DB::table('vaccinations')->get();
        return view('auth.admin.confirmappointment', ['vaccinations' => $vaccinations]);        
        return redirect('admin/confirmappointment');

    }

    public function confirmappointmentPost(Request $request){

        vaccination::where('vaccinationID', $request->vaccinationID)->update([
            'status' => "Confirmed",
        ]);
      
        return redirect('admin/confirmappointment');

    }

    public function recordappointment(){

        if(Auth::user()->ICPassport != NULL){
            return redirect('patient/dashboard');
        }

        $vaccinations = DB::table('vaccinations')->get();
        $batch = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('auth.admin.recordappointment', ['vaccinations' => $vaccinations, 'batches' => $batch, 'vaccine' => $vaccine]);        
        return redirect('admin/recordappointment');

    }

    public function recordappointmentPost(Request $request){

        if($request->vaccinationID == "NULL"){
            return back()->withErrors(['msg' => ["It seems you haven't chose any data yet. Try again."]]);
        }

        $validatedData = $request->validate([
            
            'remarks' => ['required', 'string', 'max:255'],

        ]);

        vaccination::where('vaccinationID', $request->vaccinationID)->update([
            'status' => "Administered",
            'remarks' => $request->remarks,
            'adminName' => Auth::user()->fullName,
            'batchNo' => $request->batchNo,
        ]);

        $batch = DB::table('batches')->where('batchNo', $request->batchNo)->first();

        batch::where('batchNo', $request->batchNo)->update([
            'quantityAvailable' => ($batch->quantityAvailable - 1),
            'quantityAdministered' => ($batch->quantityAdministered + 1),
        ]);
        return redirect('admin/viewbatch');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
