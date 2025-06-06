@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#1D0039]"> {{-- ungu tua --}}
    <div class="bg-pink-300 p-8 rounded-xl w-full max-w-md shadow-lg"> {{-- kotak pink --}}
        <h2 class="text-3xl font-bold text-center text-yellow-200 mb-6">Login</h2> {{-- kuning --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 rounded-md" />
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 rounded-md" />

            <button type="submit" class="w-full bg-yellow-200 text-black font-bold py-2 rounded-md hover:bg-yellow-300">
                Login
            </button>

            <p class="text-center mt-4 text-sm text-black">
                Don’t have an account? <a href="{{ route('register') }}" class="text-purple-800 font-semibold">Sign Up</a>
            </p>
        </form>
    </div>
</div>
@endsection
