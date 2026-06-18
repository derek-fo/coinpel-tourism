<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('admin.drivers', compact('drivers'));
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:drivers,email',
            'birth_date' => 'required',
            'license_number' => 'required', // CNH
            'cpf' => 'required|unique:drivers,cpf',
            'pis' => 'required',
            'cep' => 'required',
            'street' => 'required',
            'number' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);

        Driver::create($validated);

        return redirect()->route('drivers.index')->with('success', 'Motorista cadastrado com sucesso!');
    }
}
