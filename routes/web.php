<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TripController;
use App\Http\Controllers\DriverController;

Route::get('/login', function () {
    return view('auth.login', ['step' => 'login']);
});

// rota dashboard
Route::get('/dashboard', [App\Http\Controllers\TripController::class, 'index'])->name('dashboard'); // executar o index do tripcontroller ao entrar no dashboard


// rota clientes
Route::get('/clients', function () {
    $mockUsers = [
        (object)['name' => 'Maria Antônia da Silva', 'email' => 'M.Antonia@gmail.com'],
        (object)['name' => 'Ricardo Martins', 'email' => 'R.Martins@gmail.com'],
        (object)['name' => 'João Melo', 'email' => 'J.Melo@gmail.com'],
        (object)['name' => 'Jones Radtke', 'email' => 'J.Radtke@gmail.com'],
    ];
    return view('admin.users', ['users' => $mockUsers]);
});

// rota veículos
Route::get('/vehicles', function () {
    $mockVehicles = [
        (object)['prefix' => '202', 'plate' => 'IVS-2622', 'model' => 'Marcopolo', 'chassis' => 'Scania', 'type' => 'Ônibus', 'capacity' => '45', 'year' => '2006'],
        (object)['prefix' => '203', 'plate' => 'IVS-2623', 'model' => 'Marcopolo', 'chassis' => 'Scania', 'type' => 'Ônibus', 'capacity' => '45', 'year' => '2007'],
    ];
    return view('admin.vehicles', ['vehicles' => $mockVehicles]);
});

// rota motoristas
Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');
Route::post('/drivers', [DriverController::class, 'store'])->name('drivers.store');

// rota viagens
Route::get('/trips', function () {
    $mockTrips = [
        (object)['status' => 'Em andamento', 'name' => 'Prova FURG', 'date' => '30/03/2021', 'time' => '15:00', 'route' => 'Pelotas > Rio grande', 'vehicle' => '202 - Ônibus', 'rule' => 'Faculdade', 'driver' => 'Carlos'],
        (object)['status' => 'Completa', 'name' => 'ChocoFest', 'date' => '30/03/2021', 'time' => '15:00', 'route' => 'Pelotas > Gramado', 'vehicle' => '202 - Ônibus', 'rule' => 'Turismo', 'driver' => 'Carlos'],
        (object)['status' => 'Em andamento', 'name' => 'Beto Carrero', 'date' => '30/03/2021', 'time' => '15:00', 'route' => 'Pelotas > Balneário (...)', 'vehicle' => '202 - Ônibus', 'rule' => 'Turismo', 'driver' => 'Carlos'],
    ];
    return view('admin.trips', ['trips' => $mockTrips]);
});

Route::post('/trips', [TripController::class, 'store'])->name('trips.store');

Route::get('/', function () {
    return view('welcome');
});
