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
    <div class="py-12 bg-[#15003e] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm rounded-2xl">
                <div class="p-14 flex flex-col gap-10 items-center text-center">
                    
                    
                    <h1 class="text-white text-4xl font-bold">Daftar Event</h1>

                    
                    <div class="grid grid-cols-3 gap-10">
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-[#ffade1] p-5 rounded-[40px] flex flex-col items-center justify-center">
                                <div class="bg-[#fff9b1] p-6 rounded-[40px] w-full h-full flex flex-col gap-4 items-center justify-center transition-all
                                            <?php if($loop->index === 1): ?> border-2 border-[#a067e6] <?php else: ?> border-2 border-transparent <?php endif; ?>">
                                    
                                    
                                    <img src="<?php echo e(asset('storage/' . $item->url_gambar)); ?>" 
                                         alt="Gambar <?php echo e($item->nama_event); ?>" 
                                         class="w-32 h-32 object-cover rounded-xl shadow-md">

                                    
                                    <h1 class="font-semibold text-xl text-center text-black">
                                        <?php echo e($item->nama_event); ?>

                                    </h1>

                                    
                                    <p class="text-center text-sm text-black">
                                        <?php echo e($item->deskripsi); ?>

                                    </p>

                                    
                                    <p class="text-center text-sm text-black">
                                        <?php echo e(\Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d F Y')); ?> -
                                        <?php echo e(\Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d F Y')); ?>

                                    </p>

                                    
                                    <a href="/daftar-panitia/<?php echo e(strtolower($item->nama_event)); ?>"
                                       class="mt-3 bg-[#5e17eb] hover:bg-[#4b0fcb] px-5 py-3 rounded-2xl font-semibold text-white text-sm transition">
                                        Daftar
                                    </a>
                                </div>
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
<?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/user/event.blade.php ENDPATH**/ ?>