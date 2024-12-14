<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Data;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',[About::class,'showabout']);
// Route::get('con',[ContactController::class,'showcontact']);

// Route::get('/da', function () {
//     return view('Data');
// });
Route::get('/con', function () {
    return view('form');
});
Route::post('/submit',[FormController::class,'handleform']);

Route::get('/data',function(){
   return view('Data');
});

Route::post('/dataset',[Data::class,"handledata"]);



