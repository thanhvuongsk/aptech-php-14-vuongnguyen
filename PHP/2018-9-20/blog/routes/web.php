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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dangnhap', function () {
    return view('dangnhap');
});
Route::get('Getdata', function () {
    return view('Getdata');
});
Route::get('abc', function () {
    return view('abc');
});
Route::get('insertTable', function () {
    return view('dangnhap');
});