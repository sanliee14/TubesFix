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
    <div class="min-h-screen font-poppins">
        <!-- Header Section -->
        <div class="flex justify-center mt-8 mb-8">
                <div class="text-purple-300 font-bold py-3 px-8 text-3xl">
                    Status
                </div>
            </div>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Status Sections -->
                <div class="space-y-5">
                    <!-- Event Status Card -->
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-gradient-to-br from-purple-500/20 to-violet-600/30 backdrop-blur-sm rounded-3xl p-6 mb-6 shadow-lg">
                        <div class="flex justify-between items-center mb-4">
                            <!-- Blurred Title (no background color) -->
                            <div class="text-2xl font-semibold text-[#FAEBD7] flex justify-center">
                                <?php echo e($item->nama_event); ?>

                            </div>
                            <form method="POST" action="<?php echo e(route('user.detail-status',$item->id)); ?>">
                                <?php echo csrf_field(); ?>
                                    <button
                                        class="bg-gradient-to-r from-purple-400 to-purple-500 text-white px-6 py-2 rounded-full text-sm font-bold hover:translate-y-[-2px] hover:shadow-md transition-all duration-300">
                                        Cek Status
                                    </button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/user/status.blade.php ENDPATH**/ ?>