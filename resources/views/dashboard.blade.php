<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>COINPEL | Dashboard</title>
</head>

<body class="bg-gray-50 h-screen flex">

    <aside class="w-64 bg-purple-900 text-white p-6">
        <div class="flex items-center justify-center space-x-5 mb-8">
            <img src="{{ asset('img/coinpellogobranco.png') }}" alt="COINPEL Logo" class="h-24">
        </div>
        <nav class="space-y-4 text-sm font-medium opacity-80">
            <a href="#" class="block text-white opacity-100 font-bold bg-purple-800 -mx-6 px-6 py-2 border-l-4 border-l-orange-400">Dashboard</a>
            <a href="#" class="block hover:opacity-100">Clientes</a>
            <a href="#" class="block hover:opacity-100">Motoristas</a>
            <a href="#" class="block hover:opacity-100">Estatísticas</a>
            <a href="#" class="block hover:opacity-100">Veículos</a>
            <a href="#" class="block hover:opacity-100">Viagens</a>
            <a href="#" class="block hover:opacity-100">Contratos</a>
            <a href="#" class="block hover:opacity-100">Pacotes</a>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Painel de Viagens</h2>
            <button class="bg-purple-900 text-white px-4 py-2 rounded font-bold text-sm">+ Nova Viagem</button>
        </header>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8">
            <h3 class="font-bold text-gray-700 mb-4 text-sm uppercase">Cadastrar Nova Viagem</h3>
            <form action="{{ route('trips.store') }}" method="POST" class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4 bg-gray-100 rounded-lg">
                @csrf

                <input type="text" name="name" placeholder="Nome da Viagem" required class="p-2 border rounded">
                <input type="text" name="route" placeholder="Rota" required class="p-2 border rounded">
                <input type="date" name="date" required class="p-2 border rounded">
                <input type="time" name="time" required class="p-2 border rounded">

                <input type="number" name="vehicle_id" placeholder="ID Veículo" required class="p-2 border rounded">
                <input type="number" name="driver_id" placeholder="ID Motorista" required class="p-2 border rounded">

                <select name="status" class="p-2 border rounded">
                    <option value="Agendada">Agendada</option>
                    <option value="Em andamento">Em andamento</option>
                    <option value="Finalizada">Finalizada</option>
                </select>

                <input type="text" name="rule" placeholder="Regra/Observação" class="p-2 border rounded">

                <button type="submit" class="bg-purple-900 text-white p-2 rounded font-bold col-span-2 md:col-span-4">
                    Salvar Viagem no Banco
                </button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 text-xs uppercase font-bold border-b border-gray-100">
                        <th class="pb-4">Rota</th>
                        <th class="pb-4">Motorista</th>
                        <th class="pb-4">Status</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach($trips as $trip)
                    <tr class="border-b border-gray-100">
                        <td class="py-4 font-semibold text-gray-700">{{ $trip->route }}</td>
                        <td class="py-4 text-gray-500">{{ $trip->driver}}</td>
                        <td class="py-4 text-green-600 font-bold">● {{ $trip->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>