<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

       $names = [
        'yusuf',
        'ug',
        'samuel',
        'royce',
        'amadi',
        'clement',
        'james'
       ];
       return view('home', compact('names'));
    }

    public function aboutUs(){
        return view('about');
    }
}
