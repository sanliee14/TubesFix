<x-app-layout>

    <div class="py-8 min-h-screen" style="background-image: url('{{ asset('images/wall.jpg') }}')>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Status Button -->
            <div class="flex justify-center mb-8">
                <div class="text-purple-300 font-bold py-3 px-8 rounded-full text-3xl">
                    Detail Status
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-500/20 to-violet-600/30 backdrop-blur-sm rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-1">

                        <div class="bg-purple-300 rounded-2xl aspect-square flex items-center justify-center mb-4">
                            <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex  justify-center">
                                @if($data->url_gambar)
                                    <img src="{{ asset('storage/' . $data->url_gambar) }}" alt="Gambar Event" class="object-cover">
                                @endif
                        </div>
                            <!-- <div class="text-purple-600 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Foto Event</p>
                            </div> -->
                        </div>
                        @if($data->nama_event)
                        <h2 class="text-[#FAEBD7] text-xl font-bold text-center">{{ $data->nama_event }}</h2>
                        @endif
                    </div>

                    <!-- Event Information -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Tanggal Daftar -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Daftar
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                @if($data->applies)
                                {{ $data->applies->first()->created_at->format('d-m-Y') }}
                                @endif
                            </div>
                        </div>

                        <!-- Tanggal Konfirmasi -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Konfirmasi
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                @if($data->applies)
                                {{ $data->applies->first()->created_at->format('d-m-Y') }}
                                @endif
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Status
                            </div>
                            <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                                @if($data->applies)
                                {{ $data->applies->first()->status }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #6b46c1 0%, #1e1b4b 100%);
        }
    </style>
</x-app-layout>
