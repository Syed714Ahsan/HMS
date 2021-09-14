<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HostelControllern;

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
Route::get('/hostel-details', function () {
    return view('hostel-details');
});
Route::get('/create-account', function () {
    return view('create-account');
});
Route::post('/add-hostel', function () {
    return view('add-hostel');
});
Route::post('store',[UserController::class,'store']);
// Route::post('add-hostel',[UserController::class,'store']);
Route::post('test',[HostelControllern::class,'store']);