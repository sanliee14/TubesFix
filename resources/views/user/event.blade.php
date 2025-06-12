<x-app-layout>
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/wall.jpg') }}')">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-2xl">
                <div class="p-8 flex flex-col items-center">
                    
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    @session('success')
                    <script>
                        Swal.fire({
                            title: "Success",
                            text: "{{ session('success') }}",
                            icon: "success"
                          });
                        </script>
                    @endsession

                    {{-- JUDUL HALAMAN --}}
                    <!-- <div class="shadow-md">
                    <h1 class="text-blue-200 text-3xl font-bold tracking-wide">Daftar Event</h1>
                    </div> -->
                    <div class="mb-12 text-center">
                        <h1 class="text-4xl font-bold text-purple-300  py-4 px-10 rounded-full inline-block">
                            Daftar Event
                        </h1>
                    </div>

                    {{-- GRID EVENT --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                        @foreach ($events as $item)
                            <div class="bg-gradient-to-br from-purple-500/30 to-violet-600/40 backdrop-blur-md p-8 rounded-3xl flex flex-col items-center gap-6 hover:shadow-xl transition-all duration-300">

                                {{-- FOTO EVENT --}}
                                <div class="bg-pink-200/50 rounded-2xl w-48 h-48 flex items-center justify-center p-1 border-2 border-purple-400/30">
                                    <img src="{{ asset('storage/' . $item->url_gambar) }}"
                                         alt="Gambar {{ $item->nama_event }}"
                                         class="w-full h-full object-cover rounded-xl shadow-lg">
                                </div>

                                {{-- KONTEN TEKS --}}
                                <div class="flex flex-col items-center gap-4 w-full">
                                    {{-- NAMA EVENT --}}
                                    <h2 class="text-2xl font-bold text-[#FAEBD7] text-center">
                                        {{ $item->nama_event }}
                                    </h2>

                                    {{-- DESKRIPSI --}}
                                    <p class="text-purple-200 text-center text-sm line-clamp-2">
                                        {{ $item->deskripsi }}
                                    </p>

                                    {{-- TANGGAL --}}
                                    <div class="bg-purple-900/40 px-4 py-2 rounded-full">
                                        <p class="text-purple-100 text-sm">
                                            <i class="fas fa-calendar-alt mr-2"></i>
                                            {{ \Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d M Y') }} -
                                            {{ \Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d M Y') }}
                                        </p>
                                    </div>
                                </div>

                                {{-- TOMBOL DAFTAR --}}
                                <a href="/daftar-panitia/{{ strtolower($item->nama_event) }}"
                                   class="mt-2 w-full max-w-xs bg-[#5e17eb] hover:bg-[#4b0fcb] text-white font-semibold py-3 px-6 rounded-xl text-center transition-all duration-300 transform hover:scale-105">
                                    Daftar Sekarang
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
