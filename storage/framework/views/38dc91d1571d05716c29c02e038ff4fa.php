<?php echo $__env->make('admin.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="py-8 min-h-screen bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/66.jpg')); ?>')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-pink-300/40 backdrop-blur-md rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <?php $__currentLoopData = $detailEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <div class="md:col-span-1">

                        <div class="bg-pink-300/50 rounded-2xl aspect-square flex items-center justify-center mb-4">
                            <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex  justify-center">

                                    <img src="<?php echo e(asset('storage/'. $item->url_gambar)); ?>" alt="Gambar Event" class="object-cover">

                        </div>
                            <!-- <div class="text-purple-600 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Foto Event</p>
                            </div> -->
                        </div>

                        <h2 class="text-[#FAEBD7] text-xl font-bold text-center"><?php echo e($item->nama_event); ?></h2>

                    </div>

                    <!-- Event Information -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Tanggal Mulai -->
                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Mulai
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php echo e($item->tanggal_mulai); ?>

                            </div>
                        </div>

                        <!-- Tanggal Selesai -->
                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Selesai
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php echo e($item->tanggal_selesai); ?>

                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                               Deskripsi
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php echo e($item->deskripsi); ?>

                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                               Lokasi
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php echo e($item->lokasi); ?>

                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                               Jumlah Panitia
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php echo e($panitiaCounts[$item->id] ?? 0); ?>

                            </div>
                        </div>

                        <!-- Status -->
                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Status
                            </div>
                            <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                                <?php echo e($item->status); ?>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\TubesFix\resources\views/admin/panitevent.blade.php ENDPATH**/ ?>