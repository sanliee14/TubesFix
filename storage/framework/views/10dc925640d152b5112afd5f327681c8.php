<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center text-white" style="background-image: url('<?php echo e(asset('images/10.png')); ?>')">

    <!-- Overlay -->
    <div class="p-10 rounded-xl text-center max-w-xl w-full">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang!!!</h1>
        <p class="text-lg text-purple-100 mb-8">Gabung dan temukan event kampus menarik atau daftarkan event kamu!</p>



        <!-- Area Login/Register/Dashboard -->
        <?php if(Route::has('login')): ?>
            <nav class="flex flex-col md:flex-row gap-4 justify-center">
                <?php if(auth()->guard()->check()): ?>
                    <a
                        href="<?php echo e(url('/dashboard')); ?>"
                        class="bg-white text-purple-700 hover:bg-purple-300 font-semibold py-2 px-6 rounded-2xl shadow-md transition"
                    >
                        Dashboard
                    </a>
                <?php else: ?>
                    <a
                        href="<?php echo e(route('login')); ?>"
                        class="bg-white text-purple-700 hover:bg-purple-300 font-semibold py-2 px-6 rounded-2xl shadow-md transition"
                    >
                        Log in
                    </a>

                    <?php if(Route::has('register')): ?>
                        <a
                            href="<?php echo e(route('register')); ?>"
                            class="bg-purple-300 border border-white hover:bg-white hover:text-purple-700 font-semibold py-2 px-6 rounded-2xl transition"
                        >
                            Register
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </nav>
        <?php endif; ?>
    </div>

</body>
</html>
<?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/welcome.blade.php ENDPATH**/ ?>