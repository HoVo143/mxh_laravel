<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function setting(){
        return view('client.pages.header.setting');
    }
}
