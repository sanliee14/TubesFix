<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<div class="min-h-screen bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/2.png')); ?>');">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="overflow-hidden rounded-2xl">
            <div class="p-8 flex flex-col gap-12 items-center text-center">

                
                <div class="shadow-md">
                    <h1 class="text-blue-200 text-3xl font-bold tracking-wide">Daftar Event</h1>
                </div>

                
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                     <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-blue-300/60 backdrop-blur-lg  p-8 rounded-3xl flex flex-col items-center gap-6 hover:shadow-xl transition-all duration-300">

                
                       <div class="bg-blue-200/50 rounded-2xl w-48 h-48 flex items-center justify-center p-1 border-2 border-blue-400/30">
                            <img src="<?php echo e(asset('storage/' . $item->url_gambar)); ?>"
                                alt="Gambar <?php echo e($item->nama_event); ?>"
                                class="w-full h-full object-cover rounded-xl shadow-lg">
                        </div>
                        
                        <div class="flex-1 flex flex-col gap-3 w-full">
                            
                            <h2 class="font-bold text-2xl text-blue-900 truncate">
                                <?php echo e($item->nama_event); ?>

                            </h2>

                            
                            <p class="text-white text-semibold text-lg line-clamp-2">
                                <?php echo e($item->deskripsi); ?>

                            </p>

                            <div class="bg-blue-100/50 px-3 py-2 rounded-lg">
                            <p class="text-blue-800 text-semibold text-lg line-clamp-2">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <?php echo e($item->lokasi); ?>

                            </p>
                            </div>

                            
                            <div class="bg-blue-100/50 px-3 py-2 rounded-lg">
                                <p class="text-blue-800 text-sm font-medium">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d M Y')); ?> -
                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d M Y')); ?>

                                </p>
                            </div>
                        </div>

                        
                        <div class="w-full">
                            <div class="flex justify-center gap-4 w-full pt-2">
                                <form method="GET" action="<?php echo e(route('eo.edit',$item->id)); ?>" class="flex-1">
                                    <?php echo csrf_field(); ?>
                                    <button class="w-full px-3 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                        <i class="fas fa-edit text-sm"></i> Edit
                                    </button>
                                </form>

                                <form action="/delete/<?php echo e($item->id); ?>" method="POST" class="flex-1">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="w-full px-3 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                        <i class="fas fa-trash text-sm"></i> Hapus
                                    </button>
                                </form>
                            </div>
                            
                            <form method="POST" action="#" class="w-full mt-2">
                                <?php echo csrf_field(); ?>
                                <button class="w-full px-3 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                    <i class="fas fa-check text-sm"></i> Selesai
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>

                
                <div class="fixed bottom-8 right-8 z-50">
                    <a href="<?php echo e(route('user.create_event')); ?>" class="flex items-center justify-center bg-blue-900 hover:bg-blue-200 text-[#FAEBD7] font-bold rounded-full w-40 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-4">
                        <i class="fas fa-plus"></i>
                        Buat Event
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/EO/eventeo.blade.php ENDPATH**/ ?>