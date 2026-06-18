<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>COINPEL - Veículos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans antialiased flex">

    <aside class="w-64 bg-purple-900 text-white min-h-screen p-6 flex flex-col justify-between">
        <div>
            <div class="flex items-center justify-center space-x-5 mb-8">
                <img src="{{ asset('img/coinpellogobranco.png') }}" alt="COINPEL Logo" class="h-24">
            </div>
            <nav class="space-y-4 text-sm font-medium opacity-80">
                <a href="{{ route('dashboard') }}" class="block hover:opacity-100">Dashboard</a>
                <a href="#" class="block hover:opacity-100">Clientes</a>
                <a href="{{ route('drivers.index') }}" class="block hover:opacity-100">Motoristas</a>
                <a href="#" class="block hover:opacity-100">Estatísticas</a>
                <a href="{{ route('vehicles.index') }}" class="block text-white opacity-100 font-bold bg-purple-800 -mx-6 px-6 py-2 border-l-4 border-l-orange-400">Veículos</a>
                <a href="#" class="block hover:opacity-100">Viagens</a>
                <a href="#" class="block hover:opacity-100">Contratos</a>
                <a href="#" class="block hover:opacity-100">Pacotes</a>
            </nav>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        <header class="bg-white p-4 flex justify-between items-center border-b border-gray-100">


            <div class="flex space-x-3">
                <button class="bg-purple-900 text-white px-4 py-2 rounded text-xs font-bold">+ Adicionar veículo</button>
                <button class="border border-gray-300 text-gray-600 px-4 py-2 rounded text-xs font-bold">Filtrar</button>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Pesquisar veículo..." class="border border-gray-200 px-4 py-1.5 rounded text-xs w-64">
                <div class="text-right">
                    <p class="text-xs font-bold text-gray-800">Pedro</p>
                    <p class="text-[10px] text-gray-400">Administrador</p>
                </div>
            </div>
        </header>

        @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded font-bold text-xs mx-6">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded font-bold text-xs mx-6 border border-red-200">
            <p class="font-bold mb-1">O cadastro do veículo foi recusado:</p>
            <ul class="list-disc pl-4 font-normal text-red-700">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <main class="p-6 flex-1 grid grid-cols-3 gap-6">
            <div class="col-span-2 bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-gray-400 font-bold">
                            <th class="p-4">Prefixo</th>
                            <th class="p-4">Placa</th>
                            <th class="p-4">Modelo</th>
                            <th class="p-4">Chassi</th>
                            <th class="p-4">Tipo</th>
                            <th class="p-4">Capacidade</th>
                            <th class="p-4">Ano</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-gray-700">
                        @foreach($vehicles as $vehicle)
                        <tr class="hover:bg-gray-50">
                            <td class="p-4 font-semibold">{{ $vehicle->prefix }}</td>
                            <td class="p-4 font-mono">{{ $vehicle->plate }}</td>
                            <td class="p-4">{{ $vehicle->model }}</td>
                            <td class="p-4 text-gray-400">{{ $vehicle->chassis }}</td>
                            <td class="p-4">{{ $vehicle->type }}</td>
                            <td class="p-4">{{ $vehicle->capacity }}</td>
                            <td class="p-4 font-mono text-gray-400">{{ $vehicle->year }}</td>
                            <td class="p-4 text-right font-bold text-gray-400 cursor-pointer">...</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-5 overflow-y-auto max-h-[85vh] flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-center mb-4 border-b border-gray-100 pb-2">
                        <h3 class="font-bold text-gray-700 text-sm">Veículo</h3>
                        <span class="text-gray-400 text-xs cursor-pointer">🗑️</span>
                    </div>

                    <form id="formVeiculo" action="{{ route('vehicles.store') }}" method="POST" class="space-y-3">
                        @csrf

                        <div>
                            <label class="block text-[10px] uppercase font-bold text-gray-400">Nome de identificação:</label>
                            <input type="text" name="prefix" required placeholder="Ônibus Trucado 125" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-[10px] uppercase font-bold text-gray-400">Placa:</label>
                                <input type="text" name="plate" required placeholder="IVS-2622" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5 font-mono">
                            </div>
                            <div>
                                <label class="block text-[10px] uppercase font-bold text-gray-400">Modelo:</label>
                                <input type="text" name="model" required placeholder="Marcopolo" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-[10px] uppercase font-bold text-gray-400">Chassi:</label>
                                <input type="text" name="chassis" required placeholder="Scania" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5">
                            </div>
                            <div>
                                <label class="block text-[10px] uppercase font-bold text-gray-400">Capacidade:</label>
                                <input type="number" name="capacity" required placeholder="45" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5">
                            </div>
                        </div>
                        <div>
                            <label class="block text-[10px] uppercase font-bold text-gray-400">Tipo de ônibus:</label>
                            <input type="text" name="type" required placeholder="Ônibus Rodoviário" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-[10px] uppercase font-bold text-gray-400">Bancada:</label>
                                <select class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5 bg-white">
                                    <option>Semi-Leito</option>
                                    <option>Leito-Cama</option>
                                    <option>Convencional</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-[10px] uppercase font-bold text-gray-400">Ano:</label>
                                <input type="text" name="year" required     placeholder="2006" class="w-full border border-gray-200 rounded px-2 py-1.5 text-xs mt-0.5">
                            </div>
                        </div>

                        <div class="pt-3">
                            <label class="block text-[10px] uppercase font-bold text-gray-400 mb-2">Comodidades do veículo:</label>
                            <div class="grid grid-cols-2 gap-2 text-[11px]">
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="has_internet" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">Internet</div>
                                </label>

                                <label class="cursor-pointer">
                                    <input type="checkbox" name="has_wc" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">WC</div>
                                </label>

                                <label class="cursor-pointer">
                                    <input type="checkbox" name="has_plug" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">Tomada</div>
                                </label>

                                <label class="cursor-pointer">
                                    <input type="checkbox" name="has_air_conditioner" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">Ar Condicionado</div>
                                </label>

                                <label class="cursor-pointer">
                                    <input type="checkbox" name="has_fridge" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">Geladeira</div>
                                </label>

                                <label class="cursor-pointer">
                                    <input type="checkbox" name="has_heating" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">Calefação</div>
                                </label>

                                <label class="cursor-pointer col-span-2">
                                    <input type="checkbox" name="has_video" value="1" class="hidden peer">
                                    <div class="border border-gray-200 text-gray-500 rounded p-1.5 flex items-center justify-center peer-checked:border-purple-800 peer-checked:text-purple-900 peer-checked:bg-purple-50 font-medium transition">Vídeo</div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="space-y-1.5 pt-4 border-t border-gray-100 mt-4">
                    <button type="submit" form="formVeiculo" class="w-full bg-purple-900 text-white py-2 rounded text-xs font-bold shadow hover:bg-purple-800 transition">Finalizar cadastro</button>
                    <button type="button" class="w-full border border-gray-200 text-gray-500 py-2 rounded text-xs font-bold">Cancelar</button>
                </div>
            </div>
        </main>
    </div>
</body>

</html>