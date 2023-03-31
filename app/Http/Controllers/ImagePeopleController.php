<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagePeopleController extends Controller
{
    public function index(){
        return view('client.pages.profile.people.imgpeople');
    }
}
