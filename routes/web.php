<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

// DB::listen(function ($event) {
    //     dump($event->sql);
    //     dump($event->bindings);
    //     });

    // Auth Route
Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


  Route::get('/createCV', [CVController::class, 'create'])->name('createCV');
  Route::put('/editCV/{username}', [CVController::class, 'editCV'])->name('editCV');
  Route::middleware(['myroute'])->group(function () {
      Route::get('/home', [HomeController::class, 'index'])->name('home');
      Route::get('/', function () {
          return view('welcome');
      });

});
