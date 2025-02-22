<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/prime', function () {
    return view('prime');
});
Route::get('/even', function () {
    return view('even');
});
Route::get('/multable', function () {
    return view('multable');
});
Route::get('/multable', function () {
    return view('dosomething');
});
Route::get('/multable/{number?}', function ($number = null) {
    $j = $number??2;
    return view('multable', compact('j')); //multable.blade.php
   });
?>
