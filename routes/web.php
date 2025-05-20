<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $a = "radwan";
    $b = "mohamed";
    // return view('welcome');
    return view("index", ["tilte" => $a,]);
});
