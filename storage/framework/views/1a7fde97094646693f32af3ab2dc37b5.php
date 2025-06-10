<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<<<<<<< HEAD
<div class="min-h-screen bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/2.png')); ?>');">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="overflow-hidden rounded-2xl">
            <div class="p-8 flex flex-col gap-12 items-center text-center">

                
                <div class="shadow-md">
                    <h1 class="text-blue-200 text-3xl font-bold tracking-wide">Daftar Event</h1>
                </div>

                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-blue-300/60 backdrop-blur-lg p-6 rounded-3xl flex flex-col items-center justify-between gap-5 shadow-lg border border-white/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                        
                        <div class="bg-blue-200/50 w-full h-48 overflow-hidden rounded-xl shadow-md">
                            <img src="<?php echo e(asset('storage/' . $item->url_gambar)); ?>"
                                 alt="<?php echo e($item->nama_event); ?>"
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        </div>

                        
                        <div class="flex-1 flex flex-col gap-3 w-full">
                            
                            <h2 class="font-bold text-2xl text-blue-900 truncate">
                                <?php echo e($item->nama_event); ?>

                            </h2>

                            
                            <p class="text-gray-700 text-semibold text-lg line-clamp-2">
                                <?php echo e($item->deskripsi); ?>

                            </p>

                            
                            <div class="bg-blue-100/50 px-3 py-2 rounded-lg">
                                <p class="text-blue-800 text-sm font-medium">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d M Y')); ?> -
                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d M Y')); ?>

                                </p>
=======
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

>>>>>>> fb0e202496067edc8891457779b446970aae4bba
                            </div>
                        </div>

                        
                        <div class="flex justify-center gap-4 w-full pt-2">
                            <a href="#" class="flex-1 mb-6 px-2 py-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-edit text-sm"></i> Edit
                            </a>

                            <form action="/delete/<?php echo e($item->id); ?>" method="POST" class="flex-1">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="w-full px-4 py-4 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                    <i class="fas fa-trash text-sm"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
<<<<<<< HEAD
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="fixed bottom-8 right-8 z-50">
                    <a href="<?php echo e(route('user.create_event')); ?>" class="flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full w-44 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-6">
=======

               <div class="fixed bottom-8 right-8 z-50">
                    <a href="<?php echo e(route('user.create_event')); ?>" class="flex items-center justify-center bg-blue-900 hover:bg-blue-200 text-[#FAEBD7] font-bold rounded-full w-40 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-4">
>>>>>>> fb0e202496067edc8891457779b446970aae4bba
                        <i class="fas fa-plus"></i>
                        Buat Event
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\EventConnect\resources\views/EO/eventeo.blade.php ENDPATH**/ ?>