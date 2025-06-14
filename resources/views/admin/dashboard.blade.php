
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="font-sans antialiased">

        {{-- alert start --}}
        @session('success')
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success"
              });
            </script>
        @endsession

        @session('delete')
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('delete') }}",
                icon: "success"
              });
            </script>
        @endsession
        {{-- alert end --}}


        <!-- <div class="min-h-fit bg-center" style="background-image: url('{{ asset('images/11.png') }}')"> -->
             @include('admin.nav')
  <body class="bg-cover bg-center min-h-screen" style="background-image: url('{{ asset('images/pink.png') }}');">
    <div class="flex justify-center items-center py-6 px-2 mb-2 mt-6">
        <div class="bg-pink-200/40 backdrop-blur-sm items-center justify-center rounded-3xl p-12 max-w-7xl w-full flex flex-col lg:flex-row gap-6 shadow-2xl">

            <!-- Text Section -->
            <div class="text-center w-full text-[#f7e7c2] space-y-6">
    <h1 class="text-4xl md:text-5xl font-extrabold text-pink-700 leading-tight drop-shadow-lg">
        Welcome Admin!!
    </h1>
    <p class="text-lg md:text-xl leading-relaxed text-pink-600 max-w-2xl mx-auto">
        Dashboard ini dirancang untuk memberikan Anda akses cepat ke semua informasi penting. Nikmati kemudahan dalam mengelola event dengan antarmuka yang intuitif dan menarik.
    </p>
</div>

                

            <!-- Image Section -->
           <!-- <div class="w-1/2 flex justify-end">
            <img src="{{ asset('images/poster.png') }}" alt="poster" style="width: 400px; height: 300px auto;" class="w-72 h-auto rounded-lg shadow">
        </div> -->
    </div>
</div>

    </div> 

<article id="how">
<section class="bg-pink-300/30 backdrop-blur-md py-12 px-6 mt-10 rounded-xl shadow-lg max-w-7xl mx-auto">
  
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <!-- Step 1 -->
    <div class="bg-pink-100 opacity-100 p-6 rounded-xl shadow-md space-y-4">
      <!-- <div class="text-6xl">🖱️</div> -->
      <h3 class="text-3xl font-bold text-blue-800">Total Event</h3>
      <p class="text-xl text-gray-700">
       jumlah
      </p>
       <div class="mt-10 flex justify-center">
    <a href="{{ route('admin.detailevent') }}"
       class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-8 py-3 rounded-full hover:bg-blue-700 transition">
     Detail
    </a>
  </div>
    </div>
    <!-- Step 2 -->
    <div class="bg-pink-100 p-6 rounded-xl shadow-md space-y-4">
      <!-- <div class="text-6xl">📋</div> -->
      <h3 class="text-3xl font-bold text-blue-800">Total EO</h3>
      <p class="text-xl text-gray-700">
       jumlah
      </p>
       <div class="mt-10 flex justify-center">
    <a href="{{ route('user.events') }}"
       class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-8 py-3 rounded-full hover:bg-blue-700 transition">
      Detail
    </a>
  </div>
    </div>

    <!-- Step 3 -->
    <div class="bg-pink-100 p-6 rounded-xl shadow-md space-y-4">
    <!-- <div class="text-6xl">✅❌</div> -->
    <h3 class="text-3xl font-bold text-blue-800">Total Panitia</h3>
    <p class="text-xl text-gray-700">
        jumlah
    </p>
       <div class="mt-10 flex justify-center">
    <a href="{{ route('user.events') }}"
       class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-8 py-3 rounded-full hover:bg-blue-700 transition">
      Detail
    </a>
  </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="mt-10 bg-pink-200/60 backdrop-blur-sm animate-gradient-x">
    <div class="max-w-7xl mx-auto py-14 px-10 grid md:grid-cols-3 gap-10 items-start">
        <!-- Logo & Deskripsi -->
        <div class="flex flex-col items-start space-y-4">
            <p class="text-[#2B0052] font-medium">
                Melalui fitur-fitur yang disediakan, EventConnect berkomitmen menjadi bagian penting dalam pertumbuhan generasi muda kampus yang lebih kreatif, partisipatif, dan berdaya saing.
            </p>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-bold text-[#2B0052] mb-2">KANTOR PUSAT</h3>
            <p class="text-[#2B0052] mb-2">
                Jalan Setia Buntu<br>
                Kab. Menyala-2<br>
                <em>Medan, Indonesia</em>
            </p>
            <div class="flex flex-col gap-2 text-[#2B0052]">
                <p><i class="fas fa-envelope mr-2"></i> pusateventconnect@gmail.com</p>
                <p><i class="fas fa-phone mr-2"></i> +62 813 993587782</p>
            </div>
        </div>

        <!-- Media Sosial -->
        <div>
            <h3 class="text-lg font-bold text-[#2B0052] mb-2">Follow Us</h3>
            <div class="flex space-x-4 text-2xl text-[#2B0052]">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
     <article id="help">
      <div class="border-t border-[#2d0c57] text-center py-6 text-[#2B0052] text-sm">
        <div class="flex justify-center space-x-10 mb-2">
            <a href="#" class="underline hover:text-[#5e17eb]">Legal Terms</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Privacy Policy</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Accessibility</a>
        </div>
        <p>&copy; 2025 - EventConnect All Rights Reserved.</p>
    </div>
     </article>
</footer>
</div>
        </div>
    </body>
</html>

