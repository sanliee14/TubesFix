<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="min-h-screen" style="background-image: url('<?php echo e(asset('images/2.png')); ?>');">
        <!-- Header Section -->
        <div class="py-8 flex justify-center mb-8">
                <div class="bg-blue-200/50 backdrop-blur-sm text-blue-900 font-bold py-3 px-8 rounded-full text-2xl">
                    Daftar Peserta
                </div>
            </div>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Status Sections -->
                <div class="space-y-5">
                    <!-- Event Status Card -->
                    <div class="bg-blue-300/60 backdrop-blur-sm rounded-3xl p-6 mb-6 shadow-lg">
                        <div class="flex justify-between items-center mb-4">
                            <!-- Blurred Title (no background color) -->
                            <div class="text-2xl font-semibold text-white flex justify-center">
                               
                            </div>
                            <button 
                                class="bg-gradient-to-r from-blue-400 to-blue-500 text-white px-6 py-2 rounded-full text-sm font-bold hover:translate-y-[-2px] hover:shadow-md transition-all duration-300"
                                onclick="window.location.href='<?php echo e(route('eo.detail-pendaftar')); ?>'">
                                Cek Status
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/EO/pendaftar.blade.php ENDPATH**/ ?>