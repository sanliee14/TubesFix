
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo e(asset('images/66.jpg')); ?>')">
            
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

            <?php $__sessionArgs = ['delete'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
            <script>
                Swal.fire({
                    title: "Success",
                    text: "<?php echo e(session('delete')); ?>",
                    icon: "success"
                });
            </script>
            <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
            

            <?php echo $__env->make('admin.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="rounded-2xl w-full flex flex-col mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto">
                <table class="min-w-full text-left text-sm bg-white bg-opacity-80 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-pink-300/70 text-[#2B0052] font-semibold">
                            <th class="px-6 py-4">Nama EO</th>
                            <th class="px-6 py-4 w-1/6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php $__currentLoopData = $panitia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody class="divide-y divide-pink-200">
                            <tr class="hover:bg-pink-50/70">
                                <td class="px-6 py-4 font-medium text-[#2B0052]">
                                    <div class="flex items-center gap-3">
                                        <div>
                                            <p class="font-bold">
                                                <?php echo e($item->name); ?>

                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <form method="POST" action="<?php echo e(route('admin.eventnyaeo',$item->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                            <button class="inline-block bg-pink-400 hover:bg-pink-500 text-[#2B0052] font-semibold px-6 py-2 rounded-full transition-colors duration-200">
                                                Detail
                                            </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\TubesFix\resources\views/admin/detaileo.blade.php ENDPATH**/ ?>