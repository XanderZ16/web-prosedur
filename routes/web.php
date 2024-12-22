<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('content.home', [
        'current'=> 'home',
    ]);
});

Route::get('/procedures', function () {
    return view('content.procedures', [
        'current'=> 'procedures',
    ]);
});

Route::get('/procedure/{angka}', function ($angka) {
    return view('content.procedures.procedure'.$angka, [
        'current'=> 'procedures',
    ]);
});

Route::get('/description/{angka}', function ($angka) {
    return view('content.abouts.description'.$angka, [
        'current'=> 'about',
    ]);
});
