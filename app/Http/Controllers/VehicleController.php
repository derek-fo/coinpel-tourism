<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all(); 
        return view('admin.vehicles', compact('vehicles')); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prefix' => 'required|string',
            'plate' => 'required|string|unique:vehicles,plate',
            'model' => 'required|string',
            'chassis' => 'required|string',
            'type' => 'required|string',
            'capacity' => 'required|integer',
            'year' => 'required',
        ]);

        Vehicle::create($validated);
        return redirect()->route('vehicles.index')->with('success', 'Veículo cadastrado com sucesso!');
    }
}

