<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('auth.login', ['step' => 'login']);
});

Route::get('/users', function () {
    $mockUsers = [
        (object)['name' => 'Maria Antônia da Silva', 'email' => 'M.Antonia@gmail.com'],
        (object)['name' => 'Ricardo Martins', 'email' => 'R.Martins@gmail.com'],
        (object)['name' => 'João Melo', 'email' => 'J.Melo@gmail.com'],
        (object)['name' => 'Jones Radtke', 'email' => 'J.Radtke@gmail.com'],
    ];
    return view('admin.users', ['users' => $mockUsers]);
});

Route::get('/trips', function () {
    $mockTrips = [
        (object)['status' => 'Em andamento', 'name' => 'Prova FURG', 'date' => '30/03/2021', 'time' => '15:00', 'route' => 'Pelotas > Rio grande', 'vehicle' => '202 - Ônibus', 'rule' => 'Faculdade', 'driver' => 'Carlos'],
        (object)['status' => 'Completa', 'name' => 'ChocoFest', 'date' => '30/03/2021', 'time' => '15:00', 'route' => 'Pelotas > Gramado', 'vehicle' => '202 - Ônibus', 'rule' => 'Turismo', 'driver' => 'Carlos'],
        (object)['status' => 'Em andamento', 'name' => 'Beto Carrero', 'date' => '30/03/2021', 'time' => '15:00', 'route' => 'Pelotas > Balneário (...)', 'vehicle' => '202 - Ônibus', 'rule' => 'Turismo', 'driver' => 'Carlos'],
    ];
    return view('admin.trips', ['trips' => $mockTrips]);
});

Route::get('/', function () {
    return view('welcome');
});
