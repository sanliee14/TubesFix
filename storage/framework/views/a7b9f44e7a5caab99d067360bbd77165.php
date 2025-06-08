<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <body class="bg-cover bg-center min-h-screen" style="background-image: url('/path/to/bg-stars.jpg');">
    <div class="flex justify-center items-center px-6 min-h-[65vh]">
        <div class="bg-gradient-to-br from-black/70 to-slate-800/80 backdrop-blur-md rounded-3xl p-12 max-w-7xl w-full flex flex-col lg:flex-row gap-10 shadow-2xl">
            
            <!-- Text Section -->
            <div class="lg:w-2/3 text-[#f7e7c2] space-y-6">
                <h1 class="text-4xl md:text-5xl font-extrabold text-purple-800 leading-tigh">Welcome Volunteer!!</h1>
                <h2 class="text-2xl font-semibold text-white">Hai, mahasiswa aktif!</h2>
                <p class="text-lg leading-relaxed">
                    Yuk mulai kelola, lacak, dan berpartisipasi di berbagai event kampusmu dengan 
                    <span class="font-bold text-white">EventConnect</span>. Semua event yang kamu ikuti tersimpan rapi, 
                    dan siap jadi bukti portofolio selama kuliah.
                    <br>Kelola event tanpa ribet, ya cuma di <span class="font-bold text-white">EventConnect</span>!
                </p>
                <div class="flex gap-6 pt-4">
                    <a href="#about" class="bg-blue-300 hover:bg-blue-400 text-black font-semibold text-lg px-6 py-3 rounded-full shadow-lg transition">About Us</a>
                    <a href="#help" class="bg-blue-300 hover:bg-blue-400 text-black font-semibold text-lg px-6 py-3 rounded-full shadow-lg transition">Contact Us</a>
                </div>
            </div>

            <!-- Image Section -->
           <div class="w-1/2 flex justify-end">
            <img src="<?php echo e(asset('images/poster.png')); ?>" alt="poster" style="width: 400px; height: 300px auto;" class="w-72 h-auto rounded-lg shadow">
        </div>
    </div>
</div>
        <!-- KANAN: Gambar -->
        <!-- <div class="w-1/2 flex justify-end">
            <img src="<?php echo e(asset('images/poster.png')); ?>" alt="poster" style="width: 400px; height: 300px auto;" class="w-72 h-auto rounded-lg shadow">
        </div>
    </div>
</div> -->

            <!-- <div class="flex justify-between mt-10 pe-20">
                <div class="bg-[#fff7ad] overflow-hidden shadow-sm w-[50rem] rounded-2xl">
                    <div class="p-14">
                        <h1 class="text-black text-2xl font-semibold">HAI, MAHASISWA AKTIF!</h1>
                        <p>Yuk mulai kelola, lacak, dan berpartisipasi di berbagai event kampusmu dengan EventConnect. Semua event yang kamu ikuti tersimpan rapi, dan siap jadi bukti portofolio selama kuliah. <br> Kelola event tanpa ribet, ya cuma di EventConnect!</p>

                    </div>
                </div> -->
                <!-- <div class="mt-6 bg-white p-4 rounded-lg shadow w-72">
            <h2 class="text-sm font-semibold text-gray-600 mb-2">Kalender Event</h2>
            <ul class="text-sm text-gray-800 space-y-1">
                <li>📅 3 Juni 2025 – Seminar Kepemimpinan</li>
                <li>📅 6 Juni 2025 – Workshop Public Speaking</li>
                <li>📅 12 Juni 2025 – Festival Kampus</li>
            </ul>
        </div>
    </div> -->
                <!-- <div class="mt-6 px-4 ">
  <div class="bg-white p-4 rounded-xl shadow-lg w-72">
      <h2 class="text-sm font-semibold text-gray-600 mb-2">Kalender Event</h2>
      <ul class="text-sm text-gray-800 space-y-1">
          <li>📅 6 Juni 2025 – Workshop Machine Learning</li>
          <li>📅 12 Juni 2025 – IT SPORTS </li>
          <li>📅 10 Agustus 2025 – PKKMB USU</li>
      </ul>
  </div>
</div>

            </div>
        </div>
    </div> -->



    <!-- Garis transisi antar section -->
<div class="h-2 w-full flex mt-10">
    <div class="flex-1 bg-[#ffade1]"></div> <!-- pink -->
    <div class="flex-1 bg-[#fff7ad]"></div> <!-- kuning muda -->
    <div class="flex-1 bg-[#5e17eb]"></div> <!-- ungu -->
    <div class="flex-1 bg-white"></div>     <!-- putih -->
</div>

<section class="bg-gradient-to-br from-black/70 to-slate-800/80 backdrop-blur-md py-12 px-6 rounded-xl shadow-lg mx-auto max-w-7xl mt-10" >
  <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12 md:pr-12">

    <!-- Kiri: Gambar -->
    <div class="flex justify-center md:justify-start">
      <img src="<?php echo e(asset('images/poster.png')); ?>" alt="poster" class="max-w-md w-full rounded-xl shadow-md animate-fade-in-up">
    </div>

    <!-- Kanan: Teks yang lebih ke kanan -->
    <div class="space-y-6 animate-fade-in text-right md:pl-8">
      <article id="about">
      <h2 class="text-4xl md:text-5xl font-extrabold text-purple-800 leading-tight">
        EventConnect sebagai <br> platform kegiatan kampus
      </h2>
      <p class="text-base text-white">
        EventConnect bertujuan untuk mempermudah mahasiswa dalam mengakses kegiatan terkini serta memberikan ruang bagi organisasi dan komunitas kampus untuk mempublikasikan acaranya secara lebih luas dan terstruktur.
      </p>
      <p class="text-base text-white">
        Dengan tampilan yang informatif dan fitur yang mudah digunakan, EventConnect diharapkan dapat menjadi jembatan antara penyelenggara dan peserta event, sekaligus menjadi wadah kolaboratif bagi seluruh elemen mahasiswa.
      </p>

      <!-- Tombol CTA -->
      <div class="flex justify-end flex-wrap gap-4 mt-4">
        <a href="<?php echo e(route('user.events')); ?>" class="bg-[#fff9c4] text-[#2d0c57] font-bold py-3 px-6 rounded-xl hover:bg-yellow-200 shadow transition">
          BE A PART OF THE EVENT TEAM
        </a>
        <a href="#" class="bg-blue-300 hover:bg-blue-400 text-[#2d0c57] font-bold py-3 px-6 rounded-xl hover:bg-yellow-200 shadow transition">
          LAUNCH YOUR CAMPUS EVENT
        </a>
      </div>
    </div>
    </article>
  </div>
</section>

   <!-- Garis transisi antar section -->
    
<div class="h-2 w-full flex mt-10">
    <div class="flex-1 bg-[#ffade1]"></div> <!-- pink -->
    <div class="flex-1 bg-[#fff7ad]"></div> <!-- kuning muda -->
    <div class="flex-1 bg-[#5e17eb]"></div> <!-- ungu -->
    <div class="flex-1 bg-white"></div>     <!-- putih -->
</div>

<section class="bg-gradient-to-br from-black/70 to-slate-800/80 backdrop-blur-md py-12 px-6 mt-16 rounded-xl shadow-lg max-w-7xl mx-auto">
  <h2 class="text-3xl md:text-4xl font-bold text-center text-purple-800 mb-10">
    Alur Pendaftaran EventConnect
  </h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <!-- Step 1 -->
    <div class="bg-yellow-100 opacity-100 p-6 rounded-xl shadow-md space-y-4">
      <div class="text-6xl">🖱️</div>
      <h3 class="text-xl font-bold text-purple-800">Pilih Event</h3>
      <p class="text-sm text-gray-700">
        Pilih event yang ingin kamu daftar
      </p>
    </div>

    <!-- Step 2 -->
    <div class="bg-yellow-100 p-6 rounded-xl shadow-md space-y-4">
      <div class="text-6xl">📋</div>
      <h3 class="text-xl font-bold text-purple-800">Isi Form</h3>
      <p class="text-sm text-gray-700">
        Isi form sesuai data diri kamu, jangan lupa submit ya
      </p>
    </div>

    <!-- Step 3 -->
    <div class="bg-yellow-100 p-6 rounded-xl shadow-md space-y-4">
      <div class="text-6xl">✅❌</div>
      <h3 class="text-xl font-bold text-purple-800">Cek Status</h3>
      <p class="text-sm text-gray-700">
        Jangan lupa cek status kamu untuk mengetahui diterima atau tidak yaa
      </p>
    </div>
  </div>

  <!-- Button -->
  <div class="mt-10 flex justify-center">
    <a href="<?php echo e(route('user.events')); ?>"
       class="bg-blue-300 hover:bg-blue-400 text-black font-semibold px-8 py-3 rounded-full hover:bg-purple-700 transition">
      Daftar Sekarang
    </a>
  </div>
  <div>
    <div>
</section>

    <!-- Garis transisi antar section -->
<div class="h-2 w-full flex mt-10">
    <div class="flex-1 bg-[#ffade1]"></div> <!-- pink -->
    <div class="flex-1 bg-[#fff7ad]"></div> <!-- kuning muda -->
    <div class="flex-1 bg-[#5e17eb]"></div> <!-- ungu -->
    <div class="flex-1 bg-white"></div>     <!-- putih -->
</div>

<!-- Footer Section -->
<footer class="bg-gradient-to-br from-black/70 to-slate-800/80 backdrop-blur-md animate-gradient-x">
    <div class="max-w-7xl mx-auto py-14 px-10 grid md:grid-cols-3 gap-10 items-start">
        <!-- Logo & Deskripsi -->
        <div class="flex flex-col items-start space-y-4">
            <p class="text-violet-200 font-medium">
                Melalui fitur-fitur yang disediakan, EventConnect berkomitmen menjadi bagian penting dalam pertumbuhan generasi muda kampus yang lebih kreatif, partisipatif, dan berdaya saing.
            </p>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-bold text-violet-200 mb-2">KANTOR PUSAT</h3>
            <p class="text-violet-200 mb-2">
                Jalan Setia Buntu<br>
                Kab. Menyala-2<br>
                <em>Medan, Indonesia</em>
            </p>
            <div class="flex flex-col gap-2 text-violet-200">
                <p><i class="fas fa-envelope mr-2"></i> pusateventconnect@gmail.com</p>
                <p><i class="fas fa-phone mr-2"></i> +62 813 993587782</p>
            </div>
        </div>

        <!-- Media Sosial -->
        <div>
            <h3 class="text-lg font-bold text-violet-200 mb-2">Follow Us</h3>
            <div class="flex space-x-4 text-2xl text-violet-200">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
     <article id="help">
      <div class="border-t border-[#2d0c57] text-center py-6 text-violet-200 text-sm">
        <div class="flex justify-center space-x-10 mb-2">
            <a href="#" class="underline hover:text-[#5e17eb]">Legal Terms</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Privacy Policy</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Accessibility</a>
        </div>
        <p>&copy; 2025 - EventConnect All Rights Reserved.</p>
    </div>
     </article>
    <!-- <div class="border-t border-[#2d0c57] text-center py-6 text-[#2d0c57] text-sm">
        <div class="flex justify-center space-x-10 mb-2">
            <a href="#" class="underline hover:text-[#5e17eb]">Legal Terms</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Privacy Policy</a>
            <a href="#" class="underline hover:text-[#5e17eb]">Accessibility</a>
        </div>
        <p>&copy; 2025 - EventConnect All Rights Reserved.</p>
    </div> -->
    <div class="fixed bottom-5 right-5 z-50">
    <a href="#help"
       class="flex items-center justify-center bg-[#5e17eb] text-white text-base font-bold rounded-full w-24 h-12 shadow-lg hover:bg-[#7b3df0] transition-all duration-300">
        <i class="fas fa-question-circle mr-2 text-lg"></i> help
    </a>
</div>
<div class="fixed bottom-20 right-5 z-50">
  <form method="GET" action="<?php echo e(route('eo.register')); ?>">
   <button
       class="flex items-center justify-center bg-yellow-300 text-[#2d0c57] font-bold rounded-full w-36 h-12 shadow-lg hover:bg-yellow-400 transition-all duration-300">
        <i class="fas fa-plus mr-2"></i> Create Event
</button>
</div>

</footer>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/dashboard.blade.php ENDPATH**/ ?>