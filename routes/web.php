<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/place_order', function () {
    return view('orderplace');
});

Route::get('/trackingorder', function () {
    return view('trackingmap');
});

Route::get('/trackingnumber', function () {
    return view('TN');
});
