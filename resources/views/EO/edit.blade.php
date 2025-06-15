@include('EO.navbar')
    <div class="min-h-screen" style="background-image: url('{{ asset('images/2.png') }}');">
        <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-200/50 backdrop-blur-sm overflow-hidden shadow-sm rounded-2xl">
                <form action="{{ route('eo.edit.store',$event->id) }}" class="flex justify-center p-14 gap-6" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex items-center justify-center"></div>
                        <input type="file" name="gambar" id="upload" accept="image/*">
                        <button class="text-[#FAEBD7] font-semibold bg-blue-900 rounded-full px-6 py-3 text-lg w-fit">Edit Event</button>
                    </div>
                    <div class="flex flex-col gap-4 w-[32rem]">
                        <div class="flex justify-between items-center">
                            <label for="nama" class="font-semibold text-lg">Nama Event</label>
                            <input type="text" id="nama" name="nama" class="bg-blue-200 border-none outline-white rounded-full w-80" value="{{ old('nama', $event->nama_event) }}">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="mulai" class="font-semibold text-lg">Tanggal Mulai</label>
                            <input type="date" id="mulai" name="mulai"class="bg-blue-200  border-none outline-white rounded-full w-80" value="{{ old('nama', $event->tanggal_mulai) }}">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="selesai" class="font-semibold text-lg">Tanggal Selesai</label>
                            <input type="date" id="selesai" name="selesai" class="bg-blue-200  border-none outline-white rounded-full w-80" value="{{ old('nama', $event->tanggal_selesai) }}">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="lokasi" class="font-semibold text-lg">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" class="bg-blue-200  border-none outline-white rounded-full w-80" value="{{ old('nama', $event->lokasi) }}">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="deskripsi" class="font-semibold text-lg">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="bg-blue-200 border-none outline-white rounded-xl p-2" value="{{ old('nama', $event->deskripsi) }}"></textarea>
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

