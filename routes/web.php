<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.pages.home');
})->name('home');

Route::get('/profile', function () {
    return view('client.pages.profile');
})->name('profile');