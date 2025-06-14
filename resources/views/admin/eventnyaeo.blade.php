@include('admin.nav')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<div class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/66.jpg') }}');>
        <div class="overflow-hidden">
            <div class="p-4 md:p-8 flex flex-col gap-8 items-center text-center">

                {{-- PAGE TITLE --}}
                <!-- <div class="px-6 py-3">
                    <h1 class="text-pink-100 text-3xl font-bold">Daftar Event</h1>
                </div> -->

                {{-- EVENTS GRID --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
                    <!-- Event Card Template - Repeat this block for each event -->
                    <div class="bg-pink-300/50 backdrop-blur-md p-6 rounded-3xl flex flex-col items-center gap-5 hover:shadow-xl transition-all duration-300 hover:transform hover:scale-[1.02] border border-pink-400/30">
                        
                        {{-- EVENT IMAGE --}}
                         <div class="bg-pink-200/50 rounded-2xl w-48 h-48 flex items-center justify-center p-1 border-2 border-pink-400/30">
                            <img src=""
                                alt="Gambar "
                                class="w-full h-full object-cover rounded-xl shadow-lg">
                        </div>
                        
                        {{-- EVENT CONTENT --}}
                        <div class="flex-1 flex flex-col gap-3 w-full">
                            {{-- EVENT NAME --}}
                            <h2 class="font-bold text-xl text-pink-900 truncate">
                                Nama Event
                            </h2>

                            {{-- EVENT DESCRIPTION --}}
                            <p class="text-pink-800 font-medium text-sm line-clamp-2">
                                Deskripsi singkat event akan muncul di sini...
                            </p>

                            {{-- EVENT DATES --}}
                            <div class="bg-pink-200/50 px-3 py-2 rounded-lg">
                                <p class="text-pink-800 text-sm font-medium">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    Tanggal Mulai - Tanggal Selesai
                                </p>
                            </div>
                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="flex justify-center gap-3 w-full mt-2">

                            <form action="#" method="POST" class="flex-1">
                                @csrf
                                <button type="submit" class="w-full mb-2 px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white font-medium rounded-lg transition-all flex items-center justify-center gap-2 text-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>