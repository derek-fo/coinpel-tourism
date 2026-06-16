<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"><title>COINPEL - Viagens</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans antialiased flex">

    <aside class="w-64 bg-purple-900 text-white min-h-screen p-6 flex flex-col justify-between">
        <div>
            <div class="flex items-center space-x-3 mb-10">
                <img src="{{ asset('img/coinpellogobranco.png') }}" alt="COINPEL Logo" class="h-8">
            </div>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        <header class="bg-white p-4 flex justify-between items-center border-b border-gray-100">
            <button class="text-xs border border-gray-200 px-4 py-1.5 rounded text-gray-500">Voltar</button>
            <div class="flex items-center space-x-2">
                <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                <span class="text-xs font-bold text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full">Em andamento</span>
            </div>
        </header>

        <main class="p-8 max-w-4xl mx-auto w-full bg-white rounded-xl shadow-sm border border-gray-100 mt-6">
            <div class="text-center mb-8">
                <h2 class="text-xl font-bold text-gray-800">Pelotas <span class="text-purple-900 mx-2">➔</span> Gramado</h2>
            </div>

            <form class="space-y-6">
                <div>
                    <h3 class="text-xs font-bold text-purple-900 border-b border-purple-50 pb-1 mb-4 uppercase tracking-wider">Informações da Viagem:</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Nome da viagem:</label>
                            <input type="text" value="ChocoFest" class="w-full border border-gray-200 rounded p-2 text-xs mt-1">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Data:</label>
                            <input type="text" value="30/03/2021" class="w-full border border-gray-200 rounded p-2 text-xs mt-1">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Regra:</label>
                            <select class="w-full border border-gray-200 rounded p-2 text-xs mt-1 bg-white"><option>Turismo</option><option>Faculdade</option></select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Valor da passagem avulsa:</label>
                            <input type="text" value="R$ 40,00" class="w-full border border-gray-200 rounded p-2 text-xs mt-1">
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-purple-900 border-b border-purple-50 pb-1 mb-4 uppercase tracking-wider">Dados do Veículo:</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Veículo:</label>
                            <select class="w-full border border-gray-200 rounded p-2 text-xs mt-1 bg-white"><option>202 - Scania</option></select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Número de passageiros:</label>
                            <input type="number" value="35" class="w-full border border-gray-200 rounded p-2 text-xs mt-1">
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-purple-900 border-b border-purple-50 pb-1 mb-4 uppercase tracking-wider">Motorista:</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Nome:</label>
                            <select class="w-full border border-gray-200 rounded p-2 text-xs mt-1 bg-white"><option>Carlos Vinícius</option></select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase">Matrícula:</label>
                            <input type="text" value="12548793" class="w-full border border-gray-200 rounded p-2 text-xs mt-1 bg-gray-50" readonly>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-3 pt-4 border-t border-gray-100">
                    <button type="button" class="bg-purple-900 text-white px-6 py-2 rounded text-xs font-bold shadow">Salvar alterações</button>
                    <button type="button" class="border border-gray-200 text-gray-500 px-6 py-2 rounded text-xs font-bold">Cancelar</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>