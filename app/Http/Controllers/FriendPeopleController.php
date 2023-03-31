<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendPeopleController extends Controller
{
    public function index(){
        return view('client.pages.profile.people.friendpeople');
    }
}
