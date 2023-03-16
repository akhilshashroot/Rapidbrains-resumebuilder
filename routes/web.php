<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Accounts\DashboardController;
use App\Http\Controllers\Accounts\UserController;
use App\Http\Controllers\ResumebuilderController;
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
// Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login'); 
Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login'); 
Route::post('user/account', [LoginController::class,'accountLogin']);
Route::get('forgot-password', [ForgotPasswordController::class, 'forgotpassword'])->name('forgotpassword');
Route::post('forgot-password/email',  [ForgotPasswordController::class, 'forgot'])->name('forgot');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'resetpassword'])->name('reset-password');
Route::post('update-password/{token}', [ForgotPasswordController::class, 'updatePassword'])->name('update-password'); 



Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard1'); 
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
    Route::get('users', [UserController::class, 'index'])->name('users.index'); 
    Route::post('users/store', [UserController::class, 'store'])->name('users.store'); 
    Route::put('users/update/{id}', [UserController::class, 'update'])->name('users.update'); 
  Route::delete('users', [UserController::class, 'destroy'])->name('users.massdelete'); 
  Route::get('users/delete/{id}', [UserController::class, 'destroy'])->name('users.delete'); 
  Route::post('permission-update', [UserController::class, 'permissionUpdate'])->name('users.permission'); 
  Route::get('my-profile',[UserController::class, 'profileDisplay'])->name('profile.index');
  Route::post('update-profile',[UserController::class, 'profileUpdate'])->name('update-profile');
  Route::post('resume-builder',[ResumebuilderController::class, 'resumebuilder'])->name('resumebuilder');
  Route::get('resumes', [ResumebuilderController::class, 'resume'])->name('listresumes'); 

  
  Route::get('users/edit/{id}', [UserController::class, 'show'])->name('users.edit'); 

 
    Route::get('logout', [LoginController::class,'logout']);


});