@include('EO.navbar')

<div class="py-8 min-h-screen" style="background-image: url('{{ asset('images/2.png') }}')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Status Button -->
        <div class="flex justify-center mb-8">
            <div class="text-blue-200 font-bold py-3 px-8 rounded-full text-3xl">
                Data Pendaftar
            </div>
        </div>

        @foreach ($detail as $item)
        <div class="bg-blue-300/60 backdrop-blur-md text-[#FAEBD7] rounded-3xl p-8 mb-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                <!-- Profil dan Gambar -->
                <div class="flex flex-col items-center">
                    <div class="w-60 h-72 bg-white rounded-xl overflow-hidden mb-4 flex justify-center items-center">
                        <img src="" alt="Foto Profil" class="object-cover w-full h-full">
                    </div>
                    <h2 class="text-blue-800 text-xl font-bold text-center">Profil</h2>
                </div>

                <!-- Informasi Pendaftar -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Nama -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Nama
                        </div>
                        <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                            {{ $item->user->name }}
                        </div>
                    </div>

                    <!-- Posisi -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Posisi
                        </div>
                        <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                            {{ $item->posisi }}
                        </div>
                    </div>

                    <!-- Alasan -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Alasan Daftar
                        </div>
                        <div class="flex-1 bg-blue-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                            {{ $item->alasan }}
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-800 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                            Status
                        </div>
                        <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                            {{ $item->status }}
                        </div>
                    </div>

                    @if($item->status == 'menunggu')
                    <!-- Tombol -->
                    <div class="flex justify-center gap-4 pt-4">
                        <form method="POST" action="{{ route('terima',$item->id_apply) }}">
                            @csrf
                                <button
                                    class="text-[#FAEBD7] bg-blue-900 hover:bg-blue-200 hover:text-blue-900 px-5 py-3 rounded-2xl font-semibold text-sm transition">
                                    Terima
                                </button>
                        </form>
                        <form method="POST" action="{{ route('tolak',$item->id_apply) }}">
                            @csrf
                                <button
                                    class="text-[#FAEBD7] bg-red-700 hover:bg-red-200 hover:text-red-700 px-5 py-3 rounded-2xl font-semibold text-sm transition">
                                    Tolak
                                </button>
                        </form>
                    </div>
                    @else

                    @endif
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
