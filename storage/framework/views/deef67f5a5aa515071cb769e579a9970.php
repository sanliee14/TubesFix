<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-center" style="background-image: url('<?php echo e(asset('images/8.png')); ?>')">
    <div class="min-h-screen flex items-center justify-center">
        <div class="backdrop-blur-md p-8 rounded-xl w-full max-w-md shadow-lg">
            <h2 class="text-3xl font-bold text-center text-yellow-200 mb-6">Register</h2>
            <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                
                <div class="w-32 h-32 mx-auto mb-16">
                    <label for="foto" class="cursor-pointer group block w-full h-full rounded-full overflow-hidden border-2 border-dashed border-yellow-300 hover:border-yellow-500">
                        <img id="preview-foto"
                             src="<?php echo e(asset('images/default-profile.png')); ?>"
                             alt=""
                             class="object-cover w-full h-full transition-opacity duration-200 group-hover:opacity-75" />
                    </label>
                    <input type="file" name="foto" id="foto" accept="image/*" class="hidden" />
                    <p class="text-center text-sm text-white mt-2">Foto Profil</p>
                </div>

                
                <input type="text" name="name" placeholder="Name" required class="w-full p-3 mb-4 rounded-md" />
                <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-4 rounded-md" />
                <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 rounded-md" />
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="w-full p-3 mb-4 rounded-md" />

                
                <button type="submit"
                    class="w-full bg-yellow-200 text-black font-bold py-2 rounded-md hover:bg-yellow-300">
                    Register
                </button>

                <p class="text-center mt-4 text-sm text-white">
                    Already Registered? <a href="<?php echo e(route('users.login')); ?>" class="text-purple-900 font-semibold">Login</a>
                </p>
            </form>
        </div>
    </div>
</div>


<script>
    document.getElementById('foto').addEventListener('change', function (event) {
        const preview = document.getElementById('preview-foto');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/auth/register.blade.php ENDPATH**/ ?>