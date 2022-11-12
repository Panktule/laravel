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

Route::get('/jss1', function () {
    return view('layouts.jss1');
});

Route::get('/jss2', function () {
    return view('layouts.jss2');
});

Route::get('/jss3', function () {
    return view('layouts.jss3');
});

Route::get('/sss1', function () {
    return view('layouts.sss1');
});

Route::get('/sss2', function () {
    return view('layouts.sss2');
});

Route::get('/sss3', function () {
    return view('layouts.sss3');
});

Route::get('/audio', function () {
    return view('layouts.audio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
