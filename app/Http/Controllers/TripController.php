<?php

namespace App\Http\Controllers;

use App\Models\Trip; // importar o model Trip
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all(); // funciona como um SELECT * FROM trips
        return view('dashboard', ['trips' => $trips]); // envia dados para a view dashboard pelo array
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'route' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'vehicle_id' => 'required|integer',
            'driver_id' => 'required|integer',
            'status' => 'required|string',
            'rule '=> 'nullable|string',
        ]);

        \App\Models\Trip::create($validated);

        return redirect()->route('dashboard')->with('success', 'Viagem criada com sucesso!');  // redireciona de volta para o dashboard para ver a lista atualizada
    }
}
