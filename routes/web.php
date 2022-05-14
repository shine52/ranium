<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\neoController;
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

//rout to show the user's input form
Route::get('/neo', [neoController::class,'index']);

//rout to show the data , retrieved from nasa api 
Route::post('/neoView',[neoController::class,'show']);
