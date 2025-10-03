<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $namesOfStudents = [
        'yusuf',
        'ug',
        'samuel',
        'royce',
        'amadi',
        'clement',
        'james'
       ];
    return view('home')->with('names', $namesOfStudents);
});
