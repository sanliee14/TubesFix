<x-app-layout>
    <div class="py-12 min-h-screen" style="background-image: url('{{ asset('images/wall.jpg') }}')">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm rounded-2xl">
                <div class="p-6 flex flex-col gap-10 items-center text-center">
                    
                    {{-- JUDUL HALAMAN --}}
                    <div class="flex justify-center mb-8">
                <div class="bg-pink-200/50 backdrop-blur-sm text-purple-300 font-semibold py-3 px-8 rounded-full text-lg">
                    Daftar Event
                </div>
                    </div>
                    {{-- GRID EVENT --}}
                    <div class="grid grid-cols-3 gap-10">
                        @foreach ($events as $item)
                            <div class="bg-gradient-to-br from-purple-500/20 to-violet-600/30 backdrop-blur-sm p-5 rounded-[40px] flex flex-col items-center justify-center">
                
                                    {{-- FOTO EVENT --}}
                                    <div class="bg-pink-200/50 backdrop-sepia-0 p-6 rounded-[40px] w-35 h-35 flex flex-col gap-4 items-center justify-center transition-all
                                            <!-- @if ($loop->index === 1) border-2 border-[#a067e6] @else border-2 border-transparent @endif">
                                    <img src="{{ asset('storage/' . $item->url_gambar) }}" 
                                         alt="Gambar {{ $item->nama_event }}" 
                                         class="w-32 h-32 object-cover rounded-xl shadow-md">
                                    </div>
                                    {{-- NAMA EVENT --}}
                                    <h1 class="font-semibold font-serif text-xl text-center text-yellow-300">
                                        {{ $item->nama_event }}
                                    </h1>

                                    {{-- DESKRIPSI --}}
                                    <p class="text-center font-sans-serif text-sm text-purple-300">
                                        {{ $item->deskripsi }}
                                    </p>

                                    {{-- TANGGAL --}}
                                    <p class="text-center text-sm text-purple-300">
                                        {{ \Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d F Y') }} -
                                        {{ \Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d F Y') }}
                                    </p>

                                    {{-- TOMBOL DAFTAR --}}
                                    <a href="/daftar-panitia/{{ strtolower($item->nama_event) }}"
                                       class="mt-3 bg-[#5e17eb] hover:bg-[#4b0fcb] px-5 py-3 rounded-2xl font-semibold text-white text-sm transition">
                                        Daftar
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
