<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#ffade1] overflow-hidden shadow-sm rounded-2xl">
                <form action="{{ route('user.store_event') }}" class="flex justify-center p-14 gap-6"  method="POST">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('storage/' . $event->url_gambar) }}" alt="" class="object-cover">
                        </div>
                        <button class="text-white font-semibold bg-[#5e17eb] rounded-full px-6 py-3 text-lg w-fit">Daftar Panitia</button>
                    </div>
                    <div class="flex flex-col gap-4 w-[32rem]">
                        <div class="flex justify-between items-center">
                            <label for="nama" class="font-semibold text-lg">Nama</label>
                            <input type="text" id="nama" name="nama" value="{{Auth::user()->name}}" readonly class="bg-[#fff7ad] border-none outline-white rounded-full w-80">
                        </div>
                        <div class="flex justify-between items-center">
                            <label for="posisi" class="font-semibold text-lg">Posisi</label>
                            <input type="text" id="posisi" name="posisi" class="bg-[#fff7ad] border-none outline-white rounded-full w-80">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="alasan" class="font-semibold text-lg">Alasan Daftar</label>
                            <textarea id="alasan" name="alasan" class="bg-[#fff7ad] border-none outline-white rounded-xl p-2"></textarea>
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
</x-app-layout>
