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

    <div class="py-8 min-h-screen" style="background-image: url('<?php echo e(asset('images/wall.jpg')); ?>')>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Status Button -->
            <div class="flex justify-center mb-8">
                <div class="text-purple-300 font-bold py-3 px-8 rounded-full text-3xl">
                    Detail Status
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-500/20 to-violet-600/30 backdrop-blur-sm rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-1">

                        <div class="bg-purple-300 rounded-2xl aspect-square flex items-center justify-center mb-4">
                            <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex  justify-center">
                                <?php if($data->url_gambar): ?>
                                    <img src="<?php echo e(asset('storage/' . $data->url_gambar)); ?>" alt="Gambar Event" class="object-cover">
                                <?php endif; ?>
                        </div>
                            <!-- <div class="text-purple-600 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Foto Event</p>
                            </div> -->
                        </div>
                        <?php if($data->nama_event): ?>
                        <h2 class="text-[#FAEBD7] text-xl font-bold text-center"><?php echo e($data->nama_event); ?></h2>
                        <?php endif; ?>
                    </div>

                    <!-- Event Information -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Tanggal Daftar -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Daftar
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php if($data->applies): ?>
                                <?php echo e($data->applies->first()->created_at->format('d-m-Y')); ?>

                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Tanggal Konfirmasi -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Konfirmasi
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                <?php if($data->applies): ?>
                                <?php echo e($data->applies->first()->created_at->format('d-m-Y')); ?>

                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Status
                            </div>
                            <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                                <?php if($data->applies): ?>
                                <?php echo e($data->applies->first()->status); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #6b46c1 0%, #1e1b4b 100%);
        }
    </style>
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
<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\TubesFix\resources\views/user/detail_status.blade.php ENDPATH**/ ?>