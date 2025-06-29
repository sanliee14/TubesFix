<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center text-white" style="background-image: url('{{ asset('images/10.png') }}')">

    <!-- Overlay -->
    <div class="p-10 rounded-xl text-center max-w-xl w-full">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang!!!</h1>
        <p class="text-lg text-purple-100 mb-8">Gabung dan temukan event kampus menarik atau daftarkan event kamu!</p>

        <!-- Area Login/Register/Dashboard -->
        @if (Route::has('login'))
            <nav class="flex flex-col md:flex-row gap-4 justify-center">
                @auth
                    @if(Auth::user()->role == 'user')
                        <a href="{{ url('/dashboard') }}"
                           class="bg-white text-purple-700 hover:bg-purple-300 font-semibold py-2 px-6 rounded-2xl shadow-md transition">
                            Dashboard
                        </a>
                    @elseif(Auth::user()->role == 'eo')
                        <a href="{{ url('/eo/dashboard') }}"
                           class="bg-white text-purple-700 hover:bg-purple-300 font-semibold py-2 px-6 rounded-2xl shadow-md transition">
                            Dashboard
                        </a>
                    @elseif(Auth::user()->role == 'admin')
                        <a href="{{ url('/admin/dashboard') }}"
                           class="bg-white text-purple-700 hover:bg-purple-300 font-semibold py-2 px-6 rounded-2xl shadow-md transition">
                            Dashboard
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}"
                       class="bg-white text-purple-700 hover:bg-purple-300 font-semibold py-2 px-6 rounded-2xl shadow-md transition">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="bg-purple-300 border border-white hover:bg-white hover:text-purple-700 font-semibold py-2 px-6 rounded-2xl transition">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>

</body>
</html>
