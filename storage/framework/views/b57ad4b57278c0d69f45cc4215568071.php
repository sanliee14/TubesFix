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

        <?php if(!request()->is('login') && !request()->is('register')): ?>
            <?php if(Auth::user()->role == 'user'): ?>
            <div class="min-h-screen bg-center" style="background-image: url('<?php echo e(asset('images/wall.jpg')); ?>')">
                <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php elseif(Auth::user()->role == 'eo'): ?>
            <div class="min-h-screen bg-center" style="background-image: url('<?php echo e(asset('images/2.png')); ?>')">
                <?php echo $__env->make('eo.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php elseif(Auth::user()->role == 'admin'): ?>
            <div class="bg-cover bg-center min-h-screen" style="background-image: url('<?php echo e(asset('images/66.jpg')); ?>');">
                <?php echo $__env->make('admin.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        <?php endif; ?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
             <main>
            <?php echo e($slot); ?>

        </main>
        </div>
    </body>
</html>
<?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/layouts/app.blade.php ENDPATH**/ ?>