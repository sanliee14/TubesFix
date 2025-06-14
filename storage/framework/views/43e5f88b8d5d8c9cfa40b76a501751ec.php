
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-cover bg-center " style="background-image: url('<?php echo e(asset('images/66.jpg')); ?>')">
            
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
                <table class="min-w-full text-left text-sm bg-white bg-opacity-80 backdrop-blur-sm rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-pink-300/70 text-[#2B0052] font-semibold">
                            <th class="px-6 py-4">Nama Volunteer</th>
                            <th class="px-6 py-4">Event</th>
                            <th class="px-6 py-4">Posisi</th>
                            <th class="px-6 py-4">Tanggal Diterima</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-pink-200">
                        <tr class="hover:bg-pink-50/70">
                            <td class="px-6 py-4">
                                nama
                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            </td>
                        </tr>
                        <!-- Additional rows would go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\nitro\OneDrive\Dokumen\File Coding\LARAVEL\TubesFix\resources\views/admin/detailvol.blade.php ENDPATH**/ ?>