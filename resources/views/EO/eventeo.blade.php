@include('EO.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<<<<<<< HEAD
<div class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/2.png') }}');">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="overflow-hidden rounded-2xl">
            <div class="p-8 flex flex-col gap-12 items-center text-center">

                {{-- PAGE TITLE --}}
                <div class="shadow-md">
                    <h1 class="text-blue-200 text-3xl font-bold tracking-wide">Daftar Event</h1>
                </div>

                {{-- EVENTS GRID --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                    @foreach ($events as $item)
                    <div class="bg-blue-300/60 backdrop-blur-lg p-6 rounded-3xl flex flex-col items-center justify-between gap-5 shadow-lg border border-white/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                        {{-- EVENT IMAGE --}}
                        <div class="bg-blue-200/50 w-full h-48 overflow-hidden rounded-xl shadow-md">
                            <img src="{{ asset('storage/' . $item->url_gambar) }}"
                                 alt="{{ $item->nama_event }}"
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        </div>

                        {{-- EVENT CONTENT --}}
                        <div class="flex-1 flex flex-col gap-3 w-full">
                            {{-- EVENT NAME --}}
                            <h2 class="font-bold text-2xl text-blue-900 truncate">
                                {{ $item->nama_event }}
                            </h2>

                            {{-- EVENT DESCRIPTION --}}
                            <p class="text-gray-700 text-semibold text-lg line-clamp-2">
                                {{ $item->deskripsi }}
                            </p>

                            {{-- EVENT DATES --}}
                            <div class="bg-blue-100/50 px-3 py-2 rounded-lg">
                                <p class="text-blue-800 text-sm font-medium">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    {{ \Carbon\Carbon::parse($item->tanggal_mulai)->translatedFormat('d M Y') }} -
                                    {{ \Carbon\Carbon::parse($item->tanggal_selesai)->translatedFormat('d M Y') }}
                                </p>
=======
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

>>>>>>> fb0e202496067edc8891457779b446970aae4bba
                            </div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="flex justify-center gap-4 w-full pt-2">
                            <a href="#" class="flex-1 mb-6 px-2 py-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-edit text-sm"></i> Edit
                            </a>

                            <form action="/delete/{{$item->id}}" method="POST" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full px-4 py-4 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2">
                                    <i class="fas fa-trash text-sm"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
<<<<<<< HEAD
                    @endforeach
                </div>

                {{-- CREATE BUTTON --}}
                <div class="fixed bottom-8 right-8 z-50">
                    <a href="{{ route('user.create_event') }}" class="flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full w-44 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-6">
=======

               <div class="fixed bottom-8 right-8 z-50">
                    <a href="{{ route('user.create_event') }}" class="flex items-center justify-center bg-blue-900 hover:bg-blue-200 text-[#FAEBD7] font-bold rounded-full w-40 h-12 shadow-xl transition-all duration-300 hover:shadow-2xl gap-2 px-4">
>>>>>>> fb0e202496067edc8891457779b446970aae4bba
                        <i class="fas fa-plus"></i>
                        Buat Event
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
