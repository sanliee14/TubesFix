@include('admin.nav')
    <div class="py-8 min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/66.jpg') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-pink-300/40 backdrop-blur-md rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-1">

                        <div class="bg-pink-300/50 rounded-2xl aspect-square flex items-center justify-center mb-4">
                            <div class="w-60 h-72 bg-white gambar rounded-xl overflow-hidden flex  justify-center">
                               
                                    <img src="" alt="Gambar Event" class="object-cover">
                              
                        </div>
                            <!-- <div class="text-purple-600 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Foto Event</p>
                            </div> -->
                        </div>
                        
                        <h2 class="text-[#FAEBD7] text-xl font-bold text-center">Nama Event</h2>
                       
                    </div>

                    <!-- Event Information -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Tanggal Mulai -->
                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Mulai
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                
                            </div>
                        </div>

                        <!-- Tanggal Selesai -->
                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Berakhir
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                               
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                               Keterangan
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                               
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="flex items-center gap-4">
                            <div class="bg-pink-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Jumlah Panitia
                            </div>
                            <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                                
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

