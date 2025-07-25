<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //how to compact data to pass to the view
    $name = "amara";
    $month = "september";
    $date = "27th";

    $favoriteClub = "liverpool";
    $favoritePlayer = "salah";
    $teamColor = "Red";

    return view('welcome', compact('name','month','date', 'favoriteClub', 'favoritePlayer', 'teamColor'));
});







