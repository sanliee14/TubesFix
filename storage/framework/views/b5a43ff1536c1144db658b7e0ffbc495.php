<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    </head>
    <body class="font-sans antialiased">
        <!-- <div class="min-h-fit bg-center" style="background-image: url('<?php echo e(asset('images/11.png')); ?>')"> -->
             <?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <body class="bg-cover bg-center min-h-screen" style="background-image: url('<?php echo e(asset('images/2.png')); ?>');">
    <div class="flex justify-center items-center py-6 px-2 mb-0 min-h-[65vh]">
        <div class="from-blue-900 to-indigo-900	backdrop-blur-md rounded-3xl p-12 max-w-7xl w-full flex flex-col lg:flex-row gap-6 shadow-2xl">
            
            <!-- Text Section -->
            <div class="lg:w-2/3 text-[#f7e7c2] space-y-4">
                <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 leading-tigh">Welcome EO!!</h1>
                <h2 class="text-2xl font-semibold text-white">Hai, Panitia Event Kampus!</h2>
            <p class="text-lg leading-relaxed">
              Kelola event kampusmu dengan lebih efisien bersama 
              <span class="font-bold text-white">EventConnect</span>. Dari pendaftaran peserta, pembagian tugas panitia, hingga pelaporan acara - semua bisa dilakukan dalam satu platform. 
              <br>Pantau perkembangan event secara real-time dan jangkau lebih banyak partisipan dengan fitur kami yang 
              <span class="font-bold text-white">terintegrasi dan mudah digunakan</span>. Event sukses, kerja tim pun lebih hemat waktu!
            </p>
                <div class="flex gap-6 pt-4">
                    <a href="#how" class="bg-blue-900 hover:bg-blue-300 text-cream font-semibold text-lg px-6 py-3 rounded-full shadow-lg transition">How To Create Event?</a>
                    <a href="#help" class="bg-blue-900 hover:bg-blue-300 text-cream font-semibold text-lg px-6 py-3 rounded-full shadow-lg transition">Contact Us</a>
                </div>
            </div>

            <!-- Image Section -->
           <div class="w-1/2 flex justify-end">
            <img src="<?php echo e(asset('images/poster.png')); ?>" alt="poster" style="width: 400px; height: 300px auto;" class="w-72 h-auto rounded-lg shadow">
        </div>
    </div>
</div>
       
    </div> -->
            

    <!-- Garis transisi antar section -->
<div class="h-2 w-full flex mt-10">
    <div class="flex-1 bg-purple-500"></div>      <!-- Ungu tua (Indigo) -->
    <div class="flex-1 bg-[#89CFF0]"></div>      <!-- Biru muda (Baby Blue) -->
    <div class="flex-1 bg-pink-300"></div>      <!-- Ungu muda (Lavender) -->
    <div class="flex-1 bg-violet-300"></div>           <!-- Putih -->
</div>

<article id="how">
<section class="from-blue-900 to-indigo-900	backdrop-blur-md py-12 px-6 mt-16 rounded-xl shadow-lg max-w-7xl mx-auto">
  <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-700 mb-10">
    Alur Membuat EventConnect
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <!-- Step 1 -->
    <div class="bg-blue-100 opacity-100 p-6 rounded-xl shadow-md space-y-4">
      <div class="text-6xl">🖱️</div>
      <h3 class="text-xl font-bold text-blue-800">Buat Event</h3>
      <p class="text-sm text-gray-700">
       Buat event yang ingin kamu daftarkan
      </p>
    </div>
    <!-- Step 2 -->
    <div class="bg-blue-100 p-6 rounded-xl shadow-md space-y-4">
      <div class="text-6xl">📋</div>
      <h3 class="text-xl font-bold text-blue-800">Isi Form</h3>
      <p class="text-sm text-gray-700">
       Pastikan isi form sesuai dengan Event kamu, jangan lupa submit ya
      </p>
    </div>

    <!-- Step 3 -->
    <div class="bg-blue-100 p-6 rounded-xl shadow-md space-y-4">
      <div class="text-6xl">✅❌</div>
      <h3 class="text-xl font-bold text-blue-800">Status</h3>
      <p class="text-sm text-gray-700">
        Kamu dapat cek peserta yang sudah mendaftar & kamu bisa seleksi pendaftar yang layak menjadi bagian dari Event kamu
      </p>
    </div>
  </div>

  <!-- Button -->
  <div class="mt-10 flex justify-center">
    <a href="<?php echo e(route('user.events')); ?>"
       class="bg-blue-900 hover:bg-blue-200 text-white font-semibold px-8 py-3 rounded-full hover:bg-purple-700 transition">
      Create Event
    </a>
  </div>
  <div>
    <div>
</section>
</article> 

    <!-- Garis transisi antar section -->
<div class="h-2 w-full flex mt-10">
    <div class="flex-1 bg-purple-500"></div>      <!-- Ungu tua (Indigo) -->
    <div class="flex-1 bg-[#89CFF0]"></div>      <!-- Biru muda (Baby Blue) -->
    <div class="flex-1 bg-pink-300"></div>      <!-- Ungu muda (Lavender) -->
    <div class="flex-1 bg-violet-300"></div>           <!-- Putih -->
</div>

<!-- Footer Section -->
<footer class="bg-gradient-to-br from-black/70 to-slate-800/80 backdrop-blur-md animate-gradient-x">
    <div class="max-w-7xl mx-auto py-14 px-10 grid md:grid-cols-3 gap-10 items-start">
        <!-- Logo & Deskripsi -->
        <div class="flex flex-col items-start space-y-4">
            <p class="text-blue-200 font-medium">
                Melalui fitur-fitur yang disediakan, EventConnect berkomitmen menjadi bagian penting dalam pertumbuhan generasi muda kampus yang lebih kreatif, partisipatif, dan berdaya saing.
            </p>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-bold text-blue-200 mb-2">KANTOR PUSAT</h3>
            <p class="text-blue-200 mb-2">
                Jalan Setia Buntu<br>
                Kab. Menyala-2<br>
                <em>Medan, Indonesia</em>
            </p>
            <div class="flex flex-col gap-2 text-blue-200">
                <p><i class="fas fa-envelope mr-2"></i> pusateventconnect@gmail.com</p>
                <p><i class="fas fa-phone mr-2"></i> +62 813 993587782</p>
            </div>
        </div>

        <!-- Media Sosial -->
        <div>
            <h3 class="text-lg font-bold text-blue-200 mb-2">Follow Us</h3>
            <div class="flex space-x-4 text-2xl text-blue-200">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
     <article id="help">
      <div class="border-t border-[#2d0c57] text-center py-6 text-blue-200 text-sm">
        <div class="flex justify-center space-x-10 mb-2">
            <a href="#" class="underline hover:text-[#5e17eb]">Legal Terms</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Privacy Policy</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Accessibility</a>
        </div>
        <p>&copy; 2025 - EventConnect All Rights Reserved.</p>
    </div>
     </article>
</footer>

    <div class="fixed bottom-5 right-5 z-50">
    <a href="#help"
       class="flex items-center justify-center bg-blue-900 text-white text-base font-bold rounded-full w-24 h-12 shadow-lg hover:bg-blue-200 transition-all duration-300">
        <i class="fas fa-question-circle mr-2 text-lg"></i> help
    </a>
</div>
<div class="fixed bottom-20 right-5 z-50">
        <form method="GET" action="<?php echo e(route('user.create_event')); ?>">
         <button
             class="flex items-center justify-center bg-blue-200 text-[#2d0c57] font-bold rounded-full w-36 h-12 shadow-lg hover:bg-blue-900 transition-all duration-300">
              <i class="fas fa-plus mr-2"></i> Create Event
      </button>
</div>
        </div>
    </body>
</html>

<?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/EO/dashboard.blade.php ENDPATH**/ ?>