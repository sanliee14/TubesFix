@include('EO.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <div class="min-h-screen" >
    <div class="min-h-screen" style="background-image: url('{{ asset('images/2.png') }}');>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm rounded-2xl">
                <div class="p-8 flex flex-col gap-10 items-center text-center">

                    {{-- JUDUL HALAMAN --}}
                    <div class="bg-blue-200/50 backdrop-blur-sm py-3 px-8 rounded-full text-lg">
                    <h1 class="text-blue-900 text-3xl font-bold">Daftar Event</h1>
                    </div>
                    {{-- GRID EVENT --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 p-4">
                        @foreach ($events as $item)
                            <div class="bg-blue-300/60 backdrop-blur-md p-6 rounded-[40px] flex flex-col items-center justify-center shadow-lg">

                                {{-- FOTO EVENT --}}
                                <img src="{{ asset('storage/' . $item->url_gambar) }}"
                                     alt="Gambar {{ $item->nama_event }}"
                                     class="w-32 h-32 object-cover rounded-xl shadow-md mb-4">

                                {{-- NAMA EVENT --}}
                                <h1 class="font-serif font-semibold text-2xl text-center text-[#FAF3E0] mb-2">
                                    {{ $item->nama_event }}
                                </h1>

                                {{-- DESKRIPSI --}}
                                <p class="font-sans text-center text-sm text-gray-900 mb-2 px-2">
                                    {{ $item->deskripsi }}
                                </p>

                                {{-- TANGGAL --}}
                                <p class="font-sans text-center text-sm text-gray-900 mb-4 px-2">
                                    {{ \Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d F Y') }} -
                                    {{ \Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d F Y') }}
                                </p>

                                {{-- TOMBOL --}}
                                <div class="flex gap-2 mt-4">
                                    <button
                                       class="text-[#FAEBD7] bg-blue-900 hover:bg-blue-700 h-12 w-24 rounded-2xl font-semibold text-sm transition">
                                        Edit
                                    </button>
                                    <form action="/delete/{{$item->id}}" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                        @csrf
                                        <button
                                           type="submit"
                                           class="text-[#FAEBD7] bg-red-700 hover:bg-red-600 h-12 w-24 rounded-2xl font-semibold text-sm transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>

                            </div>
                        @endforeach
                    </div>

               <div class="fixed bottom-8 right-8 z-50">
                    <a href="{{ route('user.create_event') }}" class="flex items-center justify-center bg-blue-900 hover:bg-blue-200 text-[#FAEBD7] font-bold rounded-full w-40 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-4">
                        <i class="fas fa-plus"></i>
                        Create Event
                    </a>
                </div>
            </div>
        </div>
    </div>

