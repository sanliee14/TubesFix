<?php echo $__env->make('EO.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="py-4 bg-[#15003e] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm rounded-2xl">
                <div class="p-8 flex flex-col gap-10 items-center text-center">
                    
                    
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

                                    
                                    <div class="flex justify-center gap-6">
                                    <!-- <a href="/daftar-panitia/<?php echo e(strtolower($item->nama_event)); ?>" -->
                                    <button
                                       class="mt-3 bg-[#5e17eb] hover:bg-[#4b0fcb] w-fit px-5 py-3 rounded-2xl font-semibold text-white text-sm transition">
                                        Edit
                                    </button>
                                    <form action="/delete/<?php echo e($item->id); ?> "method="POST">
                                        <?php echo csrf_field(); ?>
                                    <button
                                       class="mt-3 bg-[#5e17eb] hover:bg-[#4b0fcb] px-5 py-3 rounded-2xl font-semibold text-white text-sm transition">
                                        Hapus
                                    </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <div class="fixed bottom-20 right-5 z-50">
  <form method="GET" action="<?php echo e(route('user.create_event')); ?>">

   <button
       class="flex items-center justify-center bg-yellow-300 text-[#2d0c57] font-bold rounded-full w-36 h-12 shadow-lg hover:bg-yellow-400 transition-all duration-300">
        <i class="fas fa-plus mr-2"></i> Create Event
</button>
</div>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/EO/eventeo.blade.php ENDPATH**/ ?>