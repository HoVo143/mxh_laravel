<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // public function index(){
    //     return view('client.pages.home');
    // }
    public function index(){
        $data = Http::withOptions(['verify' => false])->get('https://reqres.in/api/users/2')->json();
        return view('client.pages.home',['data' => $data]);
    }
}
