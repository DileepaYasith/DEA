<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\caregiverController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\partnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riderController;
use App\Http\Controllers\volunteerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('rider_register','App\Http\Controllers\riderController@rider_register');
Route::post('rider_insert','App\Http\Controllers\riderController@insert');
Route::get('rider_login','App\Http\Controllers\riderController@rider_login');
Route::post('rider_log',[riderController::class,'rider_log']);


Route::get('volunteer_register','App\Http\Controllers\volunteerController@volunteer_register');
Route::post('volunteer_insert','App\Http\Controllers\volunteerController@insert');
Route::get('volunteer_login','App\Http\Controllers\volunteerController@volunteer_login');
Route::post('volunteer_log',[volunteerController::class,'volunteer_log']);


Route::get('member_register','App\Http\Controllers\memberController@member_register');
Route::post('member_insert','App\Http\Controllers\memberController@insert');
Route::get('member_login','App\Http\Controllers\memberController@member_login');
Route::post('member_log',[memberController::class,'member_log']);



Route::get('admin_login','App\Http\Controllers\adminController@admin_login');
Route::post('admin_log',[adminController::class,'admin_log']);



Route::get('partner_register','App\Http\Controllers\partnerController@partner_register');
Route::post('partner_insert','App\Http\Controllers\partnerController@insert');
Route::get('partner_login','App\Http\Controllers\partnerController@partner_login');
Route::post('partner_log',[partnerController::class,'partner_log']);



Route::get('caregiver_register','App\Http\Controllers\caregiverController@caregiver_register');
Route::post('caregiver_insert','App\Http\Controllers\caregiverController@insert');
Route::get('caregiver_login','App\Http\Controllers\caregiverController@caregiver_login');
Route::post('caregiver_log',[caregiverController::class,'caregiver_log']);
Route::get('caregiver_profile',[caregiverController::class,'profile']);


Route::get('add_menu','App\Http\Controllers\menuController@add_menu');
Route::post('menu_insert','App\Http\Controllers\menuController@insert');
