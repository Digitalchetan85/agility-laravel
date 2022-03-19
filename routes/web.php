<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Login;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Main::class,'index']);

Route::get('about', [Main::class,'about']);
Route::get('login', function () {
        return view('login');
    });

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::post('login', [UserController::class,'login']);
Route::get('signup', [Login::class,'signup']);