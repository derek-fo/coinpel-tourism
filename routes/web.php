<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login', ['step' => 'login']);
});

Route::get('/', function () {
    return view('welcome');
});
