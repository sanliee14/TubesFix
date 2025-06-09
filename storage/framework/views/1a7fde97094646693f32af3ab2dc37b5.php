<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <div class="min-h-screen" >
    <div class="min-h-screen" style="background-image: url('<?php echo e(asset('images/2.png')); ?>');>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm rounded-2xl">
                <div class="p-8 flex flex-col gap-10 items-center text-center">

                    
                    <div class="bg-blue-200/50 backdrop-blur-sm py-3 px-8 rounded-full text-lg">
                    <h1 class="text-blue-900 text-3xl font-bold">Daftar Event</h1>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 p-4">
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-blue-300/60 backdrop-blur-md p-6 rounded-[40px] flex flex-col items-center justify-center shadow-lg">

                                
                                <img src="<?php echo e(asset('storage/' . $item->url_gambar)); ?>"
                                     alt="Gambar <?php echo e($item->nama_event); ?>"
                                     class="w-32 h-32 object-cover rounded-xl shadow-md mb-4">

                                
                                <h1 class="font-serif font-semibold text-2xl text-center text-[#FAF3E0] mb-2">
                                    <?php echo e($item->nama_event); ?>

                                </h1>

                                
                                <p class="font-sans text-center text-sm text-gray-900 mb-2 px-2">
                                    <?php echo e($item->deskripsi); ?>

                                </p>

                                
                                <p class="font-sans text-center text-sm text-gray-900 mb-4 px-2">
                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d F Y')); ?> -
                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d F Y')); ?>

                                </p>

                                
                                <div class="flex gap-2 mt-4">
                                    <button
                                       class="text-[#FAEBD7] bg-blue-900 hover:bg-blue-700 h-12 w-24 rounded-2xl font-semibold text-sm transition">
                                        Edit
                                    </button>
                                    <form action="/delete/<?php echo e($item->id); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                        <?php echo csrf_field(); ?>
                                        <button
                                           type="submit"
                                           class="text-[#FAEBD7] bg-red-700 hover:bg-red-600 h-12 w-24 rounded-2xl font-semibold text-sm transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

               <div class="fixed bottom-8 right-8 z-50">
                    <a href="<?php echo e(route('user.create_event')); ?>" class="flex items-center justify-center bg-blue-900 hover:bg-blue-200 text-[#FAEBD7] font-bold rounded-full w-40 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-4">
                        <i class="fas fa-plus"></i>
                        Create Event
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\EventConnect\resources\views/EO/eventeo.blade.php ENDPATH**/ ?>