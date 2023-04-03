<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListFriendController extends Controller
{
    public function index(){
        return view('client.pages.home.friend_home.listfrie');
    }
}
