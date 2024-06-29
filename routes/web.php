<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('test', function () {
    return view('welcome');
});
Route::get('spin', function () {
    return view('test');
});
