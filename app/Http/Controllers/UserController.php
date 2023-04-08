<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view('client.pages.profile.user.profile');
    }
    public function friends(){
        return view('client.pages.profile.user.friend');
    }
    public function image(){
        return view('client.pages.profile.user.img');
    }
    public function introduce(){
        return view('client.pages.profile.user.introdu');
    }
}
