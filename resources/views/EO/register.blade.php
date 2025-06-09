@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('images/log.png') }}')">
    <div class="backdrop-blur-md p-8 rounded-xl w-full max-w-md shadow-lg">
        <h2 class="text-3xl font-bold text-center text-yellow-200 mb-6">Register</h2>
        <form method="POST" action="{{ route('EO.register') }}">
            @csrf

            <input type="text" name="name" placeholder="Name" required class="w-full p-3 mb-4 rounded-md" />
            <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 rounded-md" />
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 rounded-md" />
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="w-full p-3 mb-4 rounded-md" />

            <button type="submit" class="w-full bg-yellow-200 text-black font-bold py-2 rounded-md hover:bg-yellow-300">
                Register
            </button>

            <p class="text-center mt-4 text-sm text-white">
                Already Registered? <a href="{{ route('login') }}" class="text-purple-300 font-semibold">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
