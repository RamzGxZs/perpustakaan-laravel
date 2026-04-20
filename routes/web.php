<?php

use Illuminate\Support\Facades\Route;


// auth route

// login route
Route::get('/auth/login', function () {
    return view('auth.login.index');
});


// register route
Route::get('/auth/register', function () {
    return view('auth.register.index');
});






// views route
Route::get('/', function () {
    return view('index');
});


