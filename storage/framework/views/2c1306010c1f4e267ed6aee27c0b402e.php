<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-[#1D0039]"> 
    <div class="bg-pink-300 p-8 rounded-xl w-full max-w-md shadow-lg"> 
        <h2 class="text-3xl font-bold text-center text-yellow-200 mb-6">Login</h2> 
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 rounded-md" />
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 rounded-md" />

            <button type="submit" class="w-full bg-yellow-200 text-black font-bold py-2 rounded-md hover:bg-yellow-300">
                Login
            </button>

            <p class="text-center mt-4 text-sm text-black">
                Don’t have an account? <a href="<?php echo e(route('register')); ?>" class="text-purple-800 font-semibold">Sign Up</a>
            </p>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\Sanny PW\PWL\pwl-EC\resources\views/auth/login.blade.php ENDPATH**/ ?>