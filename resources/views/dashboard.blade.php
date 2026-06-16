<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COINPEL - Dashboard Administrativo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <nav class="bg-purple-900 text-white px-6 py-4 flex justify-between items-center shadow-md">
        <div class="flex items-center space-x-3">
            <span class="text-2xl">🚌</span>
            <h1 class="text-xl font-bold tracking-wider uppercase">Coinpel Turismo</h1>
        </div>
        <div class="flex items-center space-x-4">
            <span class="text-sm bg-purple-800 px-3 py-1 rounded">Olá, Administrador</span>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-xs bg-red-600 hover:bg-red-700 px-3 py-1.5 rounded font-bold transition">
                    Sair
                </button>
            </form>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-6">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Gerenciamento de Viagens</h2>
            <p class="text-sm text-gray-500">Abaixo estão listadas as viagens registradas no sistema da companhia.</p>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto"> <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-purple-50 text-purple-900 font-bold text-sm border-b border-purple-100">
                            <th class="p-4">Origem</th>
                            <th class="p-4">Destino</th>
                            <th class="p-4">Partida</th>
                            <th class="p-4">Chegada</th>
                            <th class="p-4">Motorista</th>
                            <th class="p-4">Veículo / Placa</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm divide-y divide-gray-100">
                        
                        @foreach($trips as $trip)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 font-semibold text-purple-900">{{ $trip->origin }}</td>
                                <td class="p-4 font-semibold text-purple-900">{{ $trip->destination }}</td>
                                <td class="p-4">{{ date('d/m/Y H:i', strtotime($trip->departure_time)) }}</td>
                                <td class="p-4">{{ date('d/m/Y H:i', strtotime($trip->arrival_time)) }}</td>
                                
                                <td class="p-4">
                                    <span class="block font-medium">{{ $trip->driver->name }}</span>
                                    <span class="text-xs text-gray-400">{{ $trip->driver->license_number }}</span>
                                </td>
                                <td class="p-4">
                                    <span class="block font-medium">{{ $trip->vehicle->model }}</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded font-mono">{{ $trip->vehicle->plate }}</span>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>