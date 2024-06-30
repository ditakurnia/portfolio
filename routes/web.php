<?php

use Illuminate\Support\Facades\Route;


//halaman utama
Route::get('/', function () {
    return view('index');
});

// details portfolio
Route::get('/antrian-details', function () {
    return view('antrian-details');
});

Route::get('/ar-details', function () {
    return view('ar-details');
});

Route::get('/astar-details', function () {
    return view('astar-details');
});

Route::get('/bisection-details', function () {
    return view('bisection-details');
});

Route::get('/nutrisweat-details', function () {
    return view('nutrisweat-details');
});

Route::get('/pmi-details', function () {
    return view('pmi-details');
});

Route::get('/wordpress-1-details', function () {
    return view('wordpress-1-details');
});

Route::get('/wordpress-2-details', function () {
    return view('wordpress-2-details');
});

Route::get('/wordpress-3-details', function () {
    return view('wordpress-3-details');
});






