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
                    <div class="grid grid-cols-3 gap-10">
                        @foreach ($events as $item)
                            <div class="bg-blue-300/60 backdrop-blur-md p-6 rounded-[40px] flex flex-col items-center justify-center">
                                    
                                    {{-- FOTO EVENT --}}
                                    <img src="{{ asset('storage/' . $item->url_gambar) }}" 
                                         alt="Gambar {{ $item->nama_event }}" 
                                         class="w-32 h-32 object-cover rounded-xl shadow-md">

                                    {{-- NAMA EVENT --}}
                                    <h1 class="font-serif font-semibold text-2xl text-center text-[#FAF3E0]">
                                        {{ $item->nama_event }}
                                    </h1>

                                    {{-- DESKRIPSI --}}
                                    <p class="text-sans-serif text-center text-sm text-black">
                                        {{ $item->deskripsi }}
                                    </p>

                                    {{-- TANGGAL --}}
                                    <p class="text-sans-serif text-center text-sm text-black">
                                        {{ \Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d F Y') }} -
                                        {{ \Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d F Y') }}
                                    </p>

                                    {{-- TOMBOL --}}
                                    <div class="flex justify-center gap-6">
                                    <!-- <a href="/daftar-panitia/{{ strtolower($item->nama_event) }}" -->
                                    <button
                                       class="mt-3 mb-4 text-[#FAEBD7] bg-blue-900 hover:bg-blue-200 w-fit px-5 py-3 rounded-2xl font-semibold text-sm transition">
                                        Edit
                                    </button>
                                    <form action="/delete/{{$item->id}} "method="POST">
                                        @csrf
                                    <button
                                       class="mt-3 text-[#FAEBD7] bg-red-700 hover:bg-red-200  px-5 py-3 rounded-2xl font-semibold  text-sm transition">
                                        Hapus
                                    </button>
                                    </form>
                                    
                                    </div>
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

