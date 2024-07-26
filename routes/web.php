<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/jquery',function(){return view('jquery.home');})->name('Jhome');

Route::get('/bootstrap',function(){return view('bootstrap.home');})->name('Bhome');
Route::get('/bootstrap/1',function(){return view('bootstrap.align_self');})->name('align_self');
Route::get('/bootstrap/2',function(){return view('bootstrap.flex_direction');})->name('flex_direction');
Route::get('/bootstrap/3',function(){return view('bootstrap.display');})->name('display');
Route::get('/bootstrap/4',function(){return view('bootstrap.float');})->name('float');
Route::get('/bootstrap/5',function(){return view('bootstrap.position');})->name('position');
Route::get('/bootstrap/6',function(){return view('bootstrap.advanceMarginPadding');})->name('advance');
Route::get('/bootstrap/7',function(){return view('bootstrap.colorandtypograph');})->name('typo');
Route::get('/bootstrap/8',function(){return view('bootstrap.navbar');})->name('nav');
// making clone app with bootstrap to understand deep content
Route::get('/bootstrap/github-landing-page',function(){return view('bootstrap.githubLandingPageClone');})->name('githubclone');



// vikas routes
Route::resource('vikas',UserController::class);
Route::get('/logout',[UserController::class,'logoutUser'])->name('logout');
Route::resource('project',EmployeeController::class)->middleware(isLogin::class);
Route::get('/registerEmp',[UserController::class,'showEmpForm'])->name('register');
Route::post('/register',[UserController::class,'enterEmployee'])->name('registerEmp');