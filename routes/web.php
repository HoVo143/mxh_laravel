<?php


use App\Http\Controllers\FriendController;
use App\Http\Controllers\FriendPeopleController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFriendController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImagePeopleController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\IntroducePeopleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessengerController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProductClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePeopleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

//header
Route::get('/setting', [HeaderController::class, 'setting'])->name('setting');

//product
Route::get('/product', [ProductClientController::class, 'index'])->name('home.product');


// link bạn bè ở trang home
Route::get('/friends', [HomeFriendController::class, 'friendhome'])->name('home.friend');
Route::get('/friends/requests', [HomeFriendController::class, 'addfriend'])->name('requests.friend');
Route::get('/friends/suggestion', [HomeFriendController::class, 'suggestion'])->name('suggestion.friend');
Route::get('/friends/list', [HomeFriendController::class, 'listfriend'])->name('list.friend');
Route::get('/friends/allgroups', [HomeFriendController::class, 'allgroups'])->name('allgroups.friend');

// group
Route::get('/groups', [GroupController::class, 'groupindex'])->name('group');
Route::get('/groups/member', [GroupController::class, 'member'])->name('group.member');
Route::get('/groups/post', [GroupController::class, 'postgroup'])->name('group.postgroup');
Route::get('/groups/media', [GroupController::class, 'fileimge'])->name('group.fileimge');


// CLIENT USER
Route::prefix('user')->group( function ()
{
    Route::get('/', [UserController::class, 'profile'])->name('profile');
    Route::get('/friends', [UserController::class, 'friends'])->name('friends');
    Route::get('/image', [UserController::class, 'image'])->name('image');
    Route::get('/introduce', [UserController::class, 'introduce'])->name('introduce');
});

// CLIENT PEOPLE
Route::prefix('people')->group( function ()
{ 
    Route::get('/', [PeopleController::class, 'profile'])->name('people.profile');
    Route::get('/friends', [PeopleController::class, 'friends'])->name('people.friends');
    Route::get('/images', [PeopleController::class, 'image'])->name('people.image');
    Route::get('/introduce', [PeopleController::class, 'introduce'])->name('people.introduce');
});

//Messenger
// Route::get('/messages', [MessengerController::class, 'index'])->name('messages.index');

// ADMIN
Route::prefix('admin')->group(function (){ 

    Route::get('/', function () {
        return view('admin.layout.adminlayout');
    })->name('admin.adminlayout');
});