<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\usercontroller;

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

Route::view('home', 'index');

Route::get('/firebase', [FirebaseController::class, 'index']);
Route::post('/firebase', [FirebaseController::class, 'store']);

route::get('register',[usercontroller::class,'register']);
route::get('login',[usercontroller::class,'login']);
route::get('recoverpwd',[usercontroller::class,'recoverpwd']);


