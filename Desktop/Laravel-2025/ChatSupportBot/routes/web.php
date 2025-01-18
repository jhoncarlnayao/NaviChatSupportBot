<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NaviBotController;

// Show the login form
// Route::get('/', function () {
//     return view('welcome'); 
// })->name('login');


Route::get('/', function () {
    return view('MainPage.MainPage'); 
})->name('login');

Route::post('/login', [UserController::class, 'LoginUser'])->name('login.submit');

Route::get('/mainpage', function () {
    return view('MainPage.MainPage');
})->middleware('auth');

Route::post('/chat/send', [NaviBotController::class, 'handleMessage'])->name('chat.send');

