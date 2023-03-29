<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('client.pages.home');
// })->name('home');

// Route::get('/profile', function () {
//     return view('client.pages.profile');
// })->name('profile');

// Route::get('/login', function () {
//     return view('client.pages.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('client.pages.register');
// })->name('register');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');


// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// CLIENT USER
Route::prefix('user')->group( function ()
{ // thêm /user sẵn
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('/friends', [FriendController::class, 'index'])->name('friends');
    Route::get('/image', [ImageController::class, 'index'])->name('image');
    Route::get('/introduce', [IntroduceController::class, 'index'])->name('introduce');
});


// ADMIN
Route::prefix('admin')->group(function (){ // thêm /admin sẵn

    Route::get('/', function () {
        return view('admin.layout.adminlayout');
    })->name('admin.adminlayout');
});