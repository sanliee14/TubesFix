<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-purple-500/20 to-violet-600/30 backdrop-blur-md overflow-hidden shadow-sm rounded-2xl">
                <form action="<?php echo e(route('user.store_event')); ?>" method="POST" class="p-10">
                    <?php echo csrf_field(); ?>
                    <div class="flex flex-col md:flex-row gap-10 items-center md:items-start">
                        <!-- Bagian Gambar -->
                        <div class="flex flex-col items-center gap-8">
                            <div class="w-60 h-72 bg-white rounded-xl overflow-hidden flex items-center justify-center shadow-md">
                                <img src="<?php echo e(asset('storage/' . $event->url_gambar)); ?>" alt="Event Image" class="object-cover w-full h-full">
                            </div>
                            <button type="submit" class="text-[#FAEBD7] font-semibold bg-purple-700 hover:bg-[#4c12c2] rounded-full px-6 py-3 text-lg w-full md:w-auto transition-colors duration-300 shadow-lg">
                                Daftar Panitia
                            </button>
                        </div>

                        <!-- Bagian Form -->
                        <div class="flex-1 space-y-6">
                            <!-- Nama -->
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <label for="nama" class="font-semibold text-purple-300 text-lg min-w-[120px]">Nama</label>
                                <input type="text" id="nama" name="nama" value="<?php echo e(Auth::user()->name); ?>" readonly 
                                       class="bg-[#5e17eb] border-none text-[#FAEBD7] outline-none rounded-full px-6 py-2 w-full md:w-100 shadow-inner">
                            </div>

                            <!-- Posisi -->
                              <!-- Posisi (Dropdown) -->
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <label for="posisi" class="font-semibold text-purple-300 text-lg min-w-[120px]">Posisi</label>
                                <select id="posisi" name="posisi" class="bg-[#5e17eb] text-[#FAEBD7] border-none outline-none rounded-full px-6 py-2 w-full md:w-100 shadow-inner appearance-none">
                                    <option value="" disabled selected>Pilih Posisi</option>
                                    <option value="Ketua">Ketua Panitia</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Logistik">Divisi Konsumsi</option>
                                    <option value="Acara">Divisi Acara</option>
                                    <option value="Humas">Divisi Humas</option>
                                    <option value="PDD">Divisi PDD</option>
                                    <option value="Dana">Divisi Dana</option>
                                    <option value="PTT">Divisi Perlengkapan & Keamanan</option>
                                </select>
                            </div>
                            <!-- Alasan -->
                            <div class="flex flex-col gap-3">
                                <label for="alasan" class="font-semibold text-purple-300 text-lg">Alasan Daftar</label>
                                <textarea id="alasan" name="alasan" rows="4"
                                          class="bg-[#5e17eb] border-none text-[#FAEBD7] outline-none rounded-xl p-4 w-full shadow-inner resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\tubes\EventCoba\EventConnect\resources\views/user/daftar-panitia.blade.php ENDPATH**/ ?>