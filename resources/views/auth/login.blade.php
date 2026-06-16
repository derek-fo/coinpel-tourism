<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COINPEL - Travel System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 min-h-screen">

        <div class="flex flex-col justify-center items-center px-12 py-10 bg-white">

            <div class="mb-10 text-center">
                <img src="{{ asset('img/coinpellogo.png') }}" alt="COINPEL Logo" class="w-[320px] mx-auto">
            </div>

            @if($step === 'login')

            <form action="{{ url('/login') }}" method="POST" class="w-full max-w-xs">
                @csrf

                <p class="text-gray-800 font-semibold mb-4 text-sm">Faça login:</p>

                <div class="mb-3">
                    <input type="email" name="email" placeholder="E-mail" required
                        class="w-full px-3 py-2.5 border border-gray-300 rounded text-sm focus:outline-none focus:border-purple-700 focus:ring-1 focus:ring-purple-700">
                </div>

                <div class="mb-5">
                    <input type="password" name="password" placeholder="Senha" required
                        class="w-full px-3 py-2.5 border border-gray-300 rounded text-sm focus:outline-none focus:border-purple-700 focus:ring-1 focus:ring-purple-700">
                </div>

                @if($errors->any())
                <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-600 text-xs rounded">
                    {{ $errors->first() }}
                </div>
                @endif

                <button type="submit"
                    class="w-full bg-purple-900 text-white py-2.5 rounded text-sm font-semibold hover:bg-purple-800 transition">
                    Entrar
                </button>
            </form>

            @elseif($step === 'reset')

            <div class="w-full max-w-xs border border-gray-200 rounded-lg p-6 border-t-4 border-t-purple-800">

                <h3 class="font-bold text-gray-800 text-sm mb-1">Crie uma nova senha:</h3>
                <p class="text-xs text-gray-500 mb-5 leading-relaxed">
                    No seu primeiro acesso é necessário trocar a senha provisória. A senha deve ter no mínimo 8 caracteres.
                </p>

                <form action="{{ url('/force-password') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Nova senha:</label>
                        <input type="password" name="password" required
                            class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:border-purple-700">
                    </div>

                    <div class="mb-5">
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Repetir senha:</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:border-purple-700">
                    </div>

                    @if($errors->any())
                    <div class="mb-4 p-3 bg-red-50 text-red-600 text-xs rounded">
                        {{ $errors->first() }}
                    </div>
                    @endif

                    <button type="submit"
                        class="w-full bg-purple-900 text-white py-2.5 rounded text-sm font-bold hover:bg-purple-800 transition">
                        Confirmar
                    </button>
                </form>
            </div>

            @endif
        </div>

        <div class="hidden md:flex flex-col justify-end bg-purple-900">
            <img src="{{ asset('img/trip.svg') }}" alt="Ilustração de viagem" class="w-full object-contain -ml-px object-bottom">
        </div>

    </div>
</body>

</html>
