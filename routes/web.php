<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAccessController;
use App\Http\Controllers\UserController;
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
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

  Route::middleware(['myroute'])->group(function () {
    // cv pages
      Route::get('/createCV', [CVController::class, 'create'])->name('createCV');
      Route::delete('/deleteCV/{id}', [CVController::class, 'destroy'])->name('deleteCV');
      Route::put('/editCV', [CVController::class, 'editCV'])->name('editCV');
      Route::get('/home', [HomeController::class, 'index'])->name('home');
    // end cv page

    // users page
    Route::get('users', [UserController::class,'index'])->name('users');
    Route::get('adduser', [UserController::class,'create'])->name('adduser');
    Route::post('adduser', [UserController::class,'store'])->name('adduser');
    Route::get('register_user', [UserController::class,'register_user'])->name('register_user');
    Route::post('register_user', [UserController::class,'store_register_user'])->name('register_user');
    Route::get('/editprofile/{user}', [UserController::class,'edit'])->name('editprofile');
    Route::put('/editprofile/{user}', [UserController::class,'update'])->name('editprofile');
    Route::get('/activeuser/{user}', [UserController::class,'activeuser'])->name('activeuser');
    Route::post('uploadUserImage/{user}', [UserController::class,'uploadImage'])->name('uploadUserImage');
    Route::post('deleteImageprofile/{user}', [UserController::class,'deleteImage'])->name('deleteImageprofile');
    // end users page

    // User Access
    Route::any('useraccess', [UserAccessController::class,'index'])->name('useraccess');
    Route::get('adduseraccess',[UserAccessController::class,'create'])->name('adduseraccess');
    Route::post('adduseraccess',[UserAccessController::class,'store'])->name('adduseraccess');
    Route::get('edituseraccess/{userAccess}',[UserAccessController::class,'edit'])->name('edituseraccess');
    Route::post('edituseraccess/{userAccess}',[UserAccessController::class,'update'])->name('edituseraccess');
    // End User Access




});

Route::get('/', function () {
          return view('welcome');
      });
