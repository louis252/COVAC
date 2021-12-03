<?php

use App\Http\Resource\Views\Auth\registerAdmin;
use App\Http\Controllers\RegisterPatientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

/* Register Admin Routes */
Route::get('registerAdmin', 'App\Http\Controllers\Auth\RegisterAdminController@show')->name('registerAdmin');
Route::post('registerAdmin', 'App\Http\Controllers\Auth\RegisterAdminController@store')->name('registerAdmin');

/* Logout Route */
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

/* Patient Dashboard Routes */
Route::group(['middleware' => 'patient'], function () {
    //Dashboard
    Route::get('/patient/dashboard', 'App\Http\Controllers\PatientController@dashboard')->name('patientDashboard');
    //Dashboard > Appointment
    Route::get('/patient/appointment', 'App\Http\Controllers\PatientController@appointment')->name('patientAppointment');
    Route::post('/patient/appointment', 'App\Http\Controllers\PatientController@appointmentPost')->name('patientAppointment');
    //Dashboard > View Vaccine History

});

/* Admin Dashboard Routes */
Route::group(['middleware' => 'administrator'], function () {
    //Dashboard
    Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('adminDashboard');
    //Dashboard > Record New Vaccine Batch
    Route::get('/admin/viewbatch', 'App\Http\Controllers\AdminController@viewbatch')->name('adminViewBatch');
    //Dashboard > View Vaccine Batch Info
    Route::get('/admin/registerbatch', 'App\Http\Controllers\AdminController@registerbatch')->name('adminRegisterBatch');
    Route::post('/admin/registerbatch', 'App\Http\Controllers\AdminController@registerbatchPOST')->name('adminRegisterBatch');
    //Dashboard > Confirm Vaccine Appointment

    //Dashboard > Request Vaccination Appointment

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
