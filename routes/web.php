<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/jquery',function(){return view('jquery.home');})->name('Jhome');

Route::get('/bootstrap',function(){return view('bootstrap.home');})->name('Bhome');
Route::get('/bootstrap/1',function(){return view('bootstrap.align_self');})->name('align_self');
Route::get('/bootstrap/2',function(){return view('bootstrap.flex_direction');})->name('flex_direction');
Route::get('/bootstrap/3',function(){return view('bootstrap.display');})->name('display');
