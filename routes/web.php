<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\CLients\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('form.login');
    Route::get('register', [AuthController::class, 'register'])->name('form.register');
});


////////////Route test
// Route::get('/', function () {
//     return view('home');
// });
Route::get('test', function () {
    return view('welcome');
});
Route::get('spin', function () {
    return view('test');
});
Route::get('random', [App\Http\Controllers\TestController::class, 'login']);
