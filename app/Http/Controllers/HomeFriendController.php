<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFriendController extends Controller
{
    public function index(){
        return view('client.pages.home.friend_home.friend_home');
    }
}
