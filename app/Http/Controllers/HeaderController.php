<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function setting(){
        return view('client.pages.header.setting');
    }

    public function contribute(){
        return view('client.pages.header.contribute');
    }

    public function support(){
        return view('client.pages.header.support');
    }
}
