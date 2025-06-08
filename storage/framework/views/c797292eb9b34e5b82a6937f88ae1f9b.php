<!-- <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
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
            <div class="bg-[#ffade1] overflow-hidden shadow-sm rounded-2xl">
                <form action="<?php echo e(route('user.store_event')); ?>" class="flex justify-center p-14 gap-6" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="flex flex-col gap-4">
                        <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex items-center justify-center"></div>
                        <input type="file" name="gambar" id="upload" accept="image/*">
                        <button class="text-white font-semibold bg-[#5e17eb] rounded-full px-6 py-3 text-lg w-fit">Buat Event</button>
                    </div>
                    <div class="flex flex-col gap-4 w-[32rem]">
                        <div class="flex justify-between items-center">
                            <label for="nama" class="font-semibold text-lg">Nama Event</label>
                            <input type="text" id="nama" name="nama" class="bg-[#fff7ad] border-none outline-white rounded-full w-80">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="mulai" class="font-semibold text-lg">Tanggal Mulai</label>
                            <input type="date" id="mulai" name="mulai" class="bg-[#fff7ad] border-none outline-white rounded-full w-80">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="selesai" class="font-semibold text-lg">Tanggal Selesai</label>
                            <input type="date" id="selesai" name="selesai" class="bg-[#fff7ad] border-none outline-white rounded-full w-80">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="lokasi" class="font-semibold text-lg">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" class="bg-[#fff7ad] border-none outline-white rounded-full w-80">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="deskripsi" class="font-semibold text-lg">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="bg-[#fff7ad] border-none outline-white rounded-xl p-2"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const input = document.getElementById('upload');
        const gambarDiv = document.querySelector('.gambar');

        input.addEventListener('change', function () {
            const file = this.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    gambarDiv.innerHTML = `<img src="${e.target.result}" class="object-cover w-full h-full" alt="Preview">`;
                };
                reader.readAsDataURL(file);
            } else {
                gambarDiv.innerHTML = 'File bukan gambar';
            }
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?> -->
<?php /**PATH C:\laragon\tubes\pwl-EC\resources\views/user/create_event.blade.php ENDPATH**/ ?>