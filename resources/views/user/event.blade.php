<x-app-layout>
    <div class="py-12 bg-[#15003e] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm rounded-2xl">
                <div class="p-14 flex flex-col gap-10 items-center text-center">
                    
                    {{-- JUDUL HALAMAN --}}
                    <h1 class="text-white text-4xl font-bold">Daftar Event</h1>

                    {{-- GRID EVENT --}}
                    <div class="grid grid-cols-3 gap-10">
                        @foreach ($events as $item)
                            <div class="bg-[#ffade1] p-5 rounded-[40px] flex flex-col items-center justify-center">
                                <div class="bg-[#fff9b1] p-6 rounded-[40px] w-full h-full flex flex-col gap-4 items-center justify-center transition-all
                                            @if ($loop->index === 1) border-2 border-[#a067e6] @else border-2 border-transparent @endif">
                                    
                                    {{-- FOTO EVENT --}}
                                    <img src="{{ asset('storage/' . $item->url_gambar) }}" 
                                         alt="Gambar {{ $item->nama_event }}" 
                                         class="w-32 h-32 object-cover rounded-xl shadow-md">

                                    {{-- NAMA EVENT --}}
                                    <h1 class="font-semibold text-xl text-center text-black">
                                        {{ $item->nama_event }}
                                    </h1>

                                    {{-- DESKRIPSI --}}
                                    <p class="text-center text-sm text-black">
                                        {{ $item->deskripsi }}
                                    </p>

                                    {{-- TANGGAL --}}
                                    <p class="text-center text-sm text-black">
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
