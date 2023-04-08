<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupindex(){
        return view('client.pages.groups.group');
    }
    public function member(){
        return view('client.pages.groups.member');
    }
    public function postgroup(){
        return view('client.pages.groups.post_group');
    }
    public function fileimge(){
        return view('client.pages.groups.file');
    }
}
