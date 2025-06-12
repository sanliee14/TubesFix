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
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/wall.jpg')); ?>')">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-2xl">
                <div class="p-8 flex flex-col items-center">

                    
                    <!-- <div class="shadow-md">
                    <h1 class="text-blue-200 text-3xl font-bold tracking-wide">Daftar Event</h1>
                    </div> -->
                    <div class="mb-12 text-center">
                        <h1 class="text-4xl font-bold text-purple-300  py-4 px-10 rounded-full inline-block">
                            Daftar Event
                        </h1>
                    </div>

                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-gradient-to-br from-purple-500/30 to-violet-600/40 backdrop-blur-md p-8 rounded-3xl flex flex-col items-center gap-6 hover:shadow-xl transition-all duration-300">

                                
                                <div class="bg-pink-200/50 rounded-2xl w-48 h-48 flex items-center justify-center p-1 border-2 border-purple-400/30">
                                    <img src="<?php echo e(asset('storage/' . $item->url_gambar)); ?>"
                                         alt="Gambar <?php echo e($item->nama_event); ?>"
                                         class="w-full h-full object-cover rounded-xl shadow-lg">
                                </div>

                                
                                <div class="flex flex-col items-center gap-4 w-full">
                                    
                                    <h2 class="text-2xl font-bold text-[#FAEBD7] text-center">
                                        <?php echo e($item->nama_event); ?>

                                    </h2>

                                    
                                    <p class="text-purple-200 text-center text-sm line-clamp-2">
                                        <?php echo e($item->deskripsi); ?>

                                    </p>

                                    
                                    <div class="bg-purple-900/40 px-4 py-2 rounded-full">
                                        <p class="text-purple-100 text-sm">
                                            <i class="fas fa-calendar-alt mr-2"></i>
                                            <?php echo e(\Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d M Y')); ?> -
                                            <?php echo e(\Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d M Y')); ?>

                                        </p>
                                    </div>
                                </div>

                                
                                <a href="/daftar-panitia/<?php echo e(strtolower($item->nama_event)); ?>"
                                   class="mt-2 w-full max-w-xs bg-[#5e17eb] hover:bg-[#4b0fcb] text-white font-semibold py-3 px-6 rounded-xl text-center transition-all duration-300 transform hover:scale-105">
                                    Daftar Sekarang
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/user/event.blade.php ENDPATH**/ ?>