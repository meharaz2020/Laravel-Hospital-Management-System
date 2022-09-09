<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
 
 
 Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/home',[HomeController::class,'redirects'])->middleware('auth','verified');
Route::get('/',[HomeController::class,'index']);
 
Route::get('/add_doctor_view',[AdminController::class,'add_doctor_view']);
Route::post('/upload_doctor',[AdminController::class,'upload_doctor']);

Route::post('/appoinment',[HomeController::class,'appoinment']);
Route::get('/myappoinment',[HomeController::class,'myappoinment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/show_appointments',[AdminController::class,'show_appointments']);

Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendmail/{id}',[AdminController::class,'sendmail']);




