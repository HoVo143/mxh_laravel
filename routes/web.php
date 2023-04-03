<?php

use App\Http\Controllers\AddFriendController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\FriendPeopleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFriendController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImagePeopleController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\IntroducePeopleController;
use App\Http\Controllers\ListFriendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePeopleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuggestionFriendController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Completion\Suggestion;

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

// link bạn bè ở trang home
Route::get('/friends', [HomeFriendController::class, 'index'])->name('home.friend');
Route::get('/friends/requests', [AddFriendController::class, 'index'])->name('requests.friend');
Route::get('/friends/suggestion', [SuggestionFriendController::class, 'index'])->name('suggestion.friend');
Route::get('/friends/list', [ListFriendController::class, 'index'])->name('list.friend');



// CLIENT USER
Route::prefix('user')->group( function ()
{
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('/friends', [FriendController::class, 'index'])->name('friends');
    Route::get('/image', [ImageController::class, 'index'])->name('image');
    Route::get('/introduce', [IntroduceController::class, 'index'])->name('introduce');
});

// CLIENT PEOPLE
Route::prefix('people')->group( function ()
{ 
    Route::get('/', [ProfilePeopleController::class, 'index'])->name('people.profile');
    Route::get('/friends', [FriendPeopleController::class, 'index'])->name('people.friends');
    Route::get('/images', [ImagePeopleController::class, 'index'])->name('people.image');
    Route::get('/introduce', [IntroducePeopleController::class, 'index'])->name('people.introduce');
});

// ADMIN
Route::prefix('admin')->group(function (){ 

    Route::get('/', function () {
        return view('admin.layout.adminlayout');
    })->name('admin.adminlayout');
});