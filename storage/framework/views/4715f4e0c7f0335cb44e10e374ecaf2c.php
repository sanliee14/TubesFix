
    <body class="font-sans antialiased bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo e(asset('images/66.jpg')); ?>')">
        
        <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <script>
            Swal.fire({
                title: "Success",
                text: "<?php echo e(session('success')); ?>",
                icon: "success"
            });
        </script>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

        <?php $__sessionArgs = ['delete'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <script>
            Swal.fire({
                title: "Success",
                text: "<?php echo e(session('delete')); ?>",
                icon: "success"
            });
        </script>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
        

        <?php echo $__env->make('admin.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Main Content -->
        <div class="min-h-screen">
            <!-- Dashboard Overview -->
            <div class="flex justify-center items-center py-6 px-2 mb-2 mt-6">
                <div class="bg-pink-200/40 backdrop-blur-sm items-center justify-center rounded-3xl p-12 max-w-7xl w-full flex flex-col lg:flex-row gap-6 shadow-2xl">
                    <div class="text-center w-full text-[#f7e7c2] space-y-6">
                        <h1 class="text-4xl md:text-5xl font-extrabold text-pink-900 leading-tight drop-shadow-lg">
                            Welcome Admin!!
                        </h1>
                        <p class="text-lg md:text-xl leading-relaxed font-semibold text-rose-800 max-w-2xl mx-auto">
                              Dashboard ini dirancang untuk memberikan Anda akses cepat ke semua informasi penting. Nikmati kemudahan dalam mengelola event dengan antarmuka yang intuitif dan menarik.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <section class="bg-pink-300/30 backdrop-blur-md py-12 px-6 mt-10 rounded-xl shadow-lg max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="bg-pink-100 opacity-100 p-6 rounded-xl shadow-md space-y-4">
                        <h3 class="text-3xl font-bold text-blue-800">Total Event</h3>
                        <p class="text-xl text-gray-700">jumlah</p>
                        <div class="mt-10 flex justify-center">
                            <a href="<?php echo e(route('admin.detailevent')); ?>" class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-8 py-3 rounded-full hover:bg-blue-700 transition">
                                Detail
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-pink-100 p-6 rounded-xl shadow-md space-y-4">
                        <h3 class="text-3xl font-bold text-blue-800">Total EO</h3>
                        <p class="text-xl text-gray-700">jumlah</p>
                        <div class="mt-10 flex justify-center">
                            <a href="<?php echo e(route('admin.detaileo')); ?>" class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-8 py-3 rounded-full hover:bg-blue-700 transition">
                                Detail
                            </a>
                        </div>
                    </div>

                    <div class="bg-pink-100 p-6 rounded-xl shadow-md space-y-4">
                        <h3 class="text-3xl font-bold text-blue-800">Total Panitia</h3>
                        <p class="text-xl text-gray-700">jumlah</p>
                        <div class="mt-10 flex justify-center">
                            <a href="<?php echo e(route('admin.detailvol')); ?>" class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-8 py-3 rounded-full hover:bg-blue-700 transition">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Footer -->
        <footer class="mt-10 bg-pink-200/60 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto py-14 px-10 grid md:grid-cols-3 gap-10 items-start">
                <div class="flex flex-col items-start space-y-4">
                    <p class="text-[#2B0052] font-medium">
                        Melalui fitur-fitur yang disediakan, EventConnect berkomitmen menjadi bagian penting dalam pertumbuhan generasi muda.
                    </p>
                </div>
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
                <div>
                    <h3 class="text-lg font-bold text-[#2B0052] mb-2">Follow Us</h3>
                    <div class="flex space-x-4 text-2xl text-[#2B0052]">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-[#2d0c57] text-center py-6 text-[#2B0052] text-sm">
                <div class="flex justify-center space-x-10 mb-2">
                    <a href="#" class="underline hover:text-[#5e17eb]">Legal Terms</a>
                    <a href="#" class="underline hover:text-[#5e17eb]">Privacy Policy</a>
                    <a href="#" class="underline hover:text-[#5e17eb]">Accessibility</a>
                </div>
                <p>&copy; 2025 - EventConnect All Rights Reserved.</p>
            </div>
        </footer>
    </body>
</html><?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>