<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('home');
});
Route::get('test', function () {
    return view('welcome');
});
Route::get('spin', function () {
    return view('test');
});
Route::get('random', [TestController::class, 'login']);
