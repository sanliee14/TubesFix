<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="py-8 min-h-screen" style="background-image: url('<?php echo e(asset('images/2.png')); ?>')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Status Button -->
        <div class="flex justify-center mb-8">
            <div class="text-blue-200 font-bold py-3 px-8 rounded-full text-3xl">
                Data Pendaftar
            </div>
        </div>

        <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-blue-300/30 backdrop-blur-md text-[#FAEBD7] rounded-3xl p-8 mb-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                <!-- Profil dan Gambar -->
                <div class="flex flex-col items-center">
                    <div class="w-60 h-72 bg-white rounded-xl overflow-hidden mb-4 flex justify-center items-center">
                        <img src="<?php echo e(asset('storage/'. $item->user->foto)); ?>" alt="Foto Profil" class="object-cover w-full h-full">
                    </div>
                    <!-- <h2 class="text-blue-800 text-xl font-bold text-center">Profil</h2> -->
                </div>

                <!-- Informasi Pendaftar -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Nama -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Nama
                        </div>
                        <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                            <?php echo e($item->user->name); ?>

                        </div>
                    </div>

                    <!-- Posisi -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Posisi
                        </div>
                        <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                            <?php echo e($item->posisi); ?>

                        </div>
                    </div>

                    <!-- Alasan -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Alasan Daftar
                        </div>
                        <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                            <?php echo e($item->alasan); ?>

                        </div>
                    </div>

                    <!-- Status -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Status
                        </div>
                        <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                            <?php echo e($item->status); ?>

                        </div>
                    </div>

                    <?php if($item->status == 'menunggu'): ?>
                    <div class="flex justify-center gap-4 pt-4">
                        <form method="POST" action="<?php echo e(route('terima',$item->id_apply)); ?>">
                            <?php echo csrf_field(); ?>
                            <button class="w-full px-3 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                Terima
                            </button>
                        </form>
                        <form method="POST" action="<?php echo e(route('tolak',$item->id_apply)); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="w-full px-3 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                Tolak
                            </button>
                        </form>
                    </div>
                    <?php else: ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/EO/detail-pendaftar.blade.php ENDPATH**/ ?>