<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/sign', function () {
    return view('sign');
});

Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/Project', function () {
    return view('Project');
});

Route::get('/Calender', function () {
    return view('Calender');
});

Route::get('/Baru', function () {
    return view('Baru');
});

