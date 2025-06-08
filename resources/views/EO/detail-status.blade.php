<x-app-layout>

    <div class="py-8 bg-gradient-to-b from-purple-900 to-indigo-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Status Button -->
            <div class="flex justify-center mb-8">
                <div class="bg-pink-300 text-purple-800 font-semibold py-3 px-8 rounded-full text-lg">
                    Detail Status
                </div>
            </div>

            <div class="bg-yellow-200 rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-1">
                        <div class="bg-purple-300 rounded-2xl aspect-square flex items-center justify-center mb-4">
                            <div class="text-purple-600 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Foto Event</p>
                            </div>
                        </div>
                        <h2 class="text-purple-800 text-xl font-bold text-center">Workshop Machine Learning</h2>
                    </div>

                    <!-- Event Information -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Tanggal Daftar -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Daftar
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                21-05-2025
                            </div>
                        </div>

                        <!-- Tanggal Konfirmasi -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Tanggal Konfirmasi
                            </div>
                            <div class="flex-1 bg-pink-200 rounded-full px-6 py-3 text-purple-800 font-medium">
                                01-06-2025
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-400 text-white px-6 py-3 rounded-full font-semibold w-48 text-center">
                                Status
                            </div>
                            <div class="flex-1 bg-green-200 rounded-full px-6 py-3 text-green-800 font-medium">
                                ✓ Diterima
                            </div>
                            <div class="mt-6 flex gap-6">
                <button class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-full shadow-md transition">Terima</button>
                <button class="bg-red-500 hover:bg-red-600 text-white font-semibold px-6 py-2 rounded-full shadow-md transition">Tolak</button>
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