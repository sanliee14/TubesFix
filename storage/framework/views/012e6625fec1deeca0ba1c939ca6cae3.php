<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
            <script>
                Swal.fire({
                    title: "Success",
                    text: "<?php echo e(session('success')); ?>",
                    icon: "success"
                });
                </script>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

    <div class="min-h-screen" style="background-image: url('<?php echo e(asset('images/2.png')); ?>');">
        <!-- Header Section -->
        <div class="py-8 flex justify-center mb-8">
                <div class="text-blue-200 font-bold py-3 px-8 rounded-full text-3xl">
                    Daftar Peserta
                </div>
            </div>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Status Sections -->
                <div class="space-y-5">
                    <!-- Event Status Card -->
                        <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-blue-300/60 backdrop-blur-sm rounded-3xl p-6 mb-6 shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <!-- Blurred Title (no background color) -->
                                <div class="text-2xl font-semibold text-white flex justify-center">
                                    <?php echo e($item->nama_event); ?>

                                </div>

                                <form method="POST" action="<?php echo e(route('eo.detail-pendaftar',$item->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <button
                                    class="bg-gradient-to-r from-blue-400 to-blue-500 text-white px-6 py-2 rounded-full text-sm font-bold hover:translate-y-[-2px] hover:shadow-md transition-all duration-300">
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
<?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/EO/pendaftar.blade.php ENDPATH**/ ?>