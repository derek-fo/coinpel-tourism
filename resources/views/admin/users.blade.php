<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"><title>COINPEL - Usuários</title>
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
                <a href="#" class="block text-white opacity-100 font-bold bg-purple-800 -mx-6 px-6 py-2 border-l-4 border-l-orange-400">Clientes</a>
                <a href="#" class="block hover:opacity-100">Motoristas</a>
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
                <button class="bg-purple-900 text-white px-4 py-2 rounded text-xs font-bold">+ Adicionar usuário</button>
                <button class="border border-gray-300 text-gray-600 px-4 py-2 rounded text-xs font-bold">Filtrar</button>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Pesquisar usuário..." class="border border-gray-200 px-4 py-1.5 rounded text-xs w-64">
                <div class="text-right">
                    <p class="text-xs font-bold text-gray-800">Pedro</p>
                    <p class="text-[10px] text-gray-400">Administrador</p>
                </div>
            </div>
        </header>

        <main class="p-6 flex-1 grid grid-cols-3 gap-6">
            <div class="col-span-2 bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-gray-400 font-bold">
                            <th class="p-4">Usuário</th>
                            <th class="p-4">E-mail</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50 text-gray-700">
                        @foreach($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="p-4 font-semibold">{{ $user->name }}</td>
                            <td class="p-4 text-gray-400">{{ $user->email }}</td>
                            <td class="p-4 text-right font-bold text-gray-400 cursor-pointer">...</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-6 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-center mb-6 border-b border-gray-100 pb-3">
                        <h3 class="font-bold text-gray-700 text-sm">Usuário</h3>
                        <span class="text-gray-400 text-xs cursor-pointer">🗑️</span>
                    </div>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-[10px] uppercase tracking-wider text-gray-400 font-bold mb-1">Nome completo:</label>
                            <input type="text" value="Maria Antônia da Silva" class="w-full border border-gray-200 rounded px-3 py-2 text-xs focus:outline-purple-800">
                        </div>
                        <div>
                            <label class="block text-[10px] uppercase tracking-wider text-gray-400 font-bold mb-1">E-mail:</label>
                            <input type="email" value="M.Antonia@gmail.com" class="w-full border border-gray-200 rounded px-3 py-2 text-xs focus:outline-purple-800">
                        </div>
                        <div>
                            <label class="block text-[10px] uppercase tracking-wider text-gray-400 font-bold mb-1">Senha provisória:</label>
                            <input type="password" value="********" class="w-full border border-gray-200 rounded px-3 py-2 text-xs focus:outline-purple-800">
                        </div>
                    </form>
                </div>
                <div class="space-y-2 pt-6">
                    <button class="w-full bg-purple-900 text-white py-2 rounded text-xs font-bold shadow">Finalizar cadastro</button>
                    <button class="w-full border border-gray-200 text-gray-500 py-2 rounded text-xs font-bold">Cancelar</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>