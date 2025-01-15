<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/meeting', function () {
    return view('meeting'); 
});

Route::get('/meeting-detail', function () {
    return view('meetingDetails'); 
});

Route::get('/course', function () {
    return view('course'); 
});
