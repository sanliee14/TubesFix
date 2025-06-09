<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="py-8 min-h-screen" style="background-image: url('<?php echo e(asset('images/2.png')); ?>')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Status Button -->
            <div class="flex justify-center mb-8">
                <div class="bg-blue-200/50 backdrop-blur-sm text-blue-900 font-bold py-3 px-8 rounded-full text-lg">
                    Data Pendaftar
                </div>
            </div>

            <div class="bg-blue-300/60 backdrop-blur-md rounded-3xl p-8 max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-1">
                        <div class="rounded-2xl aspect-square flex items-center justify-center mb-4">
                            <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex  justify-center">
                            <img src="" alt="" class="object-cover">
                        </div>
                            <!-- <div class="text-purple-600 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Foto Event</p>
                            </div> -->
                        </div>
                        <h2 class="text-purple-300 text-xl font-bold text-center">Profil</h2>
                    </div>

                    <!-- Event Information -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Nama -->
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Nama
                            </div>
                            <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                21-05-2025
                            </div>
                        </div>

                        <!-- Posisi -->
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Posisi
                            </div>
                            <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                01-06-2025
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Alasan Daftar
                            </div>
                            <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                01-06-2025
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Status
                            </div>
                            <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                                
                            </div>
                            
                        </div>
                    <div class="justify-content:center">
                    <button
                        class="mt-3 mb-4 text-[#FAEBD7] bg-blue-900 hover:bg-blue-200 w-fit px-5 py-3 rounded-2xl font-semibold text-sm transition">
                        Terima
                    </button>
                     <button
                        class="mt-3 text-[#FAEBD7] bg-red-700 hover:bg-red-200  px-5 py-3 rounded-2xl font-semibold  text-sm transition">
                        Tolak
                    </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\EventConnect\resources\views/EO/detail-pendaftar.blade.php ENDPATH**/ ?>