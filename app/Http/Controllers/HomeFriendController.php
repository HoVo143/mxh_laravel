<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFriendController extends Controller
{
    public function friendhome(){
        return view('client.pages.home.friend_home.friend_home');
    }
    public function addfriend(){
        return view('client.pages.home.friend_home.addfriend');
    }
    public function suggestion(){
        return view('client.pages.home.friend_home.suggestion');
    }
    public function listfriend(){
        return view('client.pages.home.friend_home.listfrie');
    }
    public function allgroups(){
        return view('client.pages.home.friend_home.allgroups');
    }
}
