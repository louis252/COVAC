<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\Healthcare_Centre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        
        $vaccination = DB::table('vaccinations')->get();
        return view('auth.admin.dashboard', ['vaccinations' => $vaccination]);

    }

    public function viewbatch(){

        $batch = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('auth.admin.viewbatch', ['batches' => $batch, 'vaccine' => $vaccine]);

    }

    public function registerbatch(){

        $batch = DB::table('batches')->get();
        $vaccine = DB::table('vaccine')->get();
        return view('auth.admin.registerbatch', ['batches' => $batch, 'vaccine' => $vaccine]);

    }

    public function registerbatchPost(Request $request){

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

        return redirect('admin/viewbatch');

    }

    public function confirmappointmentPost(Request $request){

        return redirect('admin/viewbatch');

    }

    public function administerappointment(){

        return redirect('admin/viewbatch');

    }

    public function administerappointmentPost(){

        return redirect('admin/viewbatch');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
