@extends('layouts.guest')

@section('content')
<div class="min-h-screen bg-center" style="background-image: url('{{ asset('images/4.png') }}')">
<div class="min-h-screen flex items-center justify-center"> {{-- ungu tua --}}
    <div class="backdrop-blur-md p-8 rounded-xl w-full max-w-md shadow-lg "> {{-- kotak pink --}}
        <h2 class="text-3xl font-bold text-center text-yellow-200 mb-6">Login</h2> {{-- kuning --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 rounded-md" />
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 rounded-md" />

            <button type="submit" class="w-full bg-yellow-200 text-black font-bold py-2 rounded-md hover:bg-yellow-300">
                Login
            </button>

            <p class="text-center mt-4 text-sm text-white">
                Don’t have an account? <a href="{{ route('register') }}" class="text-purple-300 font-semibold">Sign Up</a>
            </p>
        </form>
    </div>
</div>
@endsection
