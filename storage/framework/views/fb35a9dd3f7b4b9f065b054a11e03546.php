<?php echo $__env->make('admin.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<div class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo e(asset('images/66.jpg')); ?>');>
        <div class="overflow-hidden">
            <div class="p-4 md:p-8 flex flex-col gap-8 items-center text-center">

                
                <!-- <div class="px-6 py-3">
                    <h1 class="text-pink-100 text-3xl font-bold">Daftar Event</h1>
                </div> -->
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

                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
                    <!-- Event Card Template - Repeat this block for each event -->
                    <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="bg-pink-300/50 backdrop-blur-md p-6 rounded-3xl flex flex-col items-center gap-5 hover:shadow-xl transition-all duration-300 hover:transform hover:scale-[1.02] border border-pink-400/30">

                        
                         <div class="bg-pink-200/50 rounded-2xl w-48 h-48 flex items-center justify-center p-1 border-2 border-pink-400/30">
                            <img src="<?php echo e(asset('storage/' . $item->url_gambar)); ?>"
                                alt="Gambar "
                                class="w-full h-full object-cover rounded-xl shadow-lg">
                        </div>

                        
                        <div class="flex-1 flex flex-col gap-3 w-full">
                            
                            <h2 class="font-bold text-xl text-pink-900 truncate">
                                <?php echo e($item->nama_event); ?>

                            </h2>

                            
                            <p class="text-pink-800 font-medium text-sm line-clamp-2">
                                <?php echo e($item->deskripsi); ?>

                            </p>

                            <p class="text-pink-800 font-medium text-sm line-clamp-2">
                                <i class="fa-solid fa-map-location-dot mr-2"></i>
                                <?php echo e($item->lokasi); ?>

                            </p>

                            
                            <div class="bg-pink-200/50 px-3 py-2 rounded-lg">
                                <p class="text-pink-800 text-sm font-medium">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    <?php echo e($item->tanggal_mulai); ?> - <?php echo e($item->tanggal_selesai); ?>

                                </p>
                            </div>
                        </div>

                        
                        <div class="flex justify-center gap-3 w-full mt-2">
                            <form action="<?php echo e(route('admin.delete.event',$item->id)); ?>" method="POST" class="flex-1">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="w-full mb-2 px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2 text-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\TubesFix\resources\views/admin/search.blade.php ENDPATH**/ ?>