<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function profile(){
        return view('client.pages.profile.people.profilepeople');
    }
    public function friends(){
        return view('client.pages.profile.people.friendpeople');
    }
    public function image(){
        return view('client.pages.profile.people.imgpeople');
    }
    public function introduce(){
        return view('client.pages.profile.people.intropeople');
    }
}
