<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jquery',function(){
    return view('jquery.home');
})->name('Jhome');

Route::get('/bootstrap',function(){
    return view('bootstrap.home');
})->name('Bhome');