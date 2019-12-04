<?php

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

Route::get('/login', function () {
    return view('welcome');
})->middleware('guest');
Route::get('/loged', function () {
    session()->put('userLogin','loged');
    return redirect('/');
})->middleware('guest');
Route::get('/logout', function () {
    session()->flush();
    return redirect('login');
})->middleware('check-login');
Route::get('/{any}', function () {
    return view('admin');
})->where(['any'=>'.*'])->middleware('check-login');