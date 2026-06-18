<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"><title>COINPEL - Motoristas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans antialiased flex">

    <aside class="w-64 bg-purple-900 text-white min-h-screen p-6 flex flex-col justify-between">
        <div>
            <div class="flex items-center justify-center space-x-5 mb-8">
                <img src="{{ asset('img/coinpellogobranco.png') }}" alt="COINPEL Logo" class="h-24">
            </div>
            <nav class="space-y-4 text-sm font-medium opacity-80">
                <a href="#" class="block hover:opacity-100">Dashboard</a>
                <a href="#" class="block hover:opacity-100">Clientes</a>
                <a href="#" class="block text-white opacity-100 font-bold bg-purple-800 -mx-6 px-6 py-2 border-l-4 border-l-orange-400">Motoristas</a>
                <a href="#" class="block hover:opacity-100">Estatísticas</a>
                <a href="#" class="block hover:opacity-100">Veículos</a>
                <a href="#" class="block hover:opacity-100">Viagens</a>
                <a href="#" class="block hover:opacity-100">Contratos</a>
                <a href="#" class="block hover:opacity-100">Pacotes</a>
            </nav>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        <header class="bg-white p-4 flex justify-between items-center border-b border-gray-100">
            <div class="flex space-x-3">
                <button class="bg-purple-900 text-white px-4 py-2 rounded text-xs font-bold">+ Adicionar motorista</button>
                <button class="border border-gray-300 text-gray-600 px-4 py-2 rounded text-xs font-bold">Filtrar</button>
            </div>
            <input type="text" placeholder="Pesquisar motorista..." class="border border-gray-200 px-4 py-1.5 rounded text-xs w-64">
        </header>

        <main class="p-6 flex-1 grid grid-cols-3 gap-6">
            <div class="col-span-2 grid grid-cols-2 gap-4 auto-rows-max">
                @foreach($drivers as $driver)
                <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between hover:shadow-md transition">
                    <div class="flex items-center space-x-3">
                        <img src="{{ $driver->photo }}" class="w-12 h-12 rounded-full object-cover border border-purple-200">
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm">{{ $driver->name }}</h4>
                            <p class="text-xs text-gray-400">{{ $driver->email }}</p>
                        </div>
                    </div>
                    <span class="text-gray-400 font-bold cursor-pointer">...</span>
                </div>
                @endforeach
            </div>

            <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-5 overflow-y-auto max-h-[85vh] flex flex-col justify-between text-xs">
                <div>
                    <div class="flex justify-between items-center mb-4 border-b border-gray-100 pb-2">
                        <h3 class="font-bold text-gray-700 text-sm">Motorista</h3>
                        <span class="text-gray-400 cursor-pointer">🗑️</span>
                    </div>

                    <div class="text-center mb-5">
                        <div class="w-20 h-20 bg-gray-100 rounded-full mx-auto overflow-hidden border border-gray-200 flex items-center justify-center text-2xl"></div>
                        <button type="button" class="text-[10px] text-purple-900 font-bold underline mt-1 block mx-auto hover:text-purple-700">Atualizar foto</button>
                    </div>

                    <form class="space-y-4">
                        <div class="space-y-2">
                            <h4 class="font-bold text-purple-900 uppercase text-[9px] tracking-wider border-b border-purple-50 pb-0.5">Dados pessoais:</h4>
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400">Nome completo:</label>
                                <input type="text" value="Amanda Siqueira" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5">
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400">Data de nascimento:</label>
                                    <input type="text" value="06/10/1988" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400">Matrícula:</label>
                                    <input type="text" value="123456" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5 font-mono">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400">CPF:</label>
                                    <input type="text" value="048.247.108-06" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5 font-mono">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400">PIS:</label>
                                    <input type="text" value="2130206437" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5 font-mono">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2 pt-2">
                            <h4 class="font-bold text-purple-900 uppercase text-[9px] tracking-wider border-b border-purple-50 pb-0.5">Endereço:</h4>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="col-span-1">
                                    <label class="block text-[10px] font-bold text-gray-400">CEP:</label>
                                    <input type="text" value="96015190" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5 font-mono">
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-[10px] font-bold text-gray-400">Logradouro:</label>
                                    <input type="text" value="Rua Major Cícero de Góes Monteiro" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5 truncate">
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="col-span-1">
                                    <label class="block text-[10px] font-bold text-gray-400">Número:</label>
                                    <input type="text" value="1055" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5">
                                </div>
                                <div class="col-span-1">
                                    <label class="block text-[10px] font-bold text-gray-400">Cidade:</label>
                                    <input type="text" value="Pelotas" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5">
                                </div>
                                <div class="col-span-1">
                                    <label class="block text-[10px] font-bold text-gray-400">Estado:</label>
                                    <input type="text" value="RS" class="w-full border border-gray-200 rounded px-2 py-1.5 mt-0.5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="space-y-1.5 pt-4 border-t border-gray-100 mt-4">
                    <button class="w-full bg-purple-900 text-white py-2 rounded text-xs font-bold shadow">Finalizar cadastro</button>
                    <button class="w-full border border-gray-200 text-gray-500 py-2 rounded text-xs font-bold">Cancelar</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>