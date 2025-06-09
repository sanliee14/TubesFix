<x-app-layout>
    <div class="min-h-screen font-poppins">
        <!-- Header Section -->
        <div class="flex justify-center mt-8 mb-8">
                <div class="bg-pink-200/50 backdrop-blur-sm text-purple-300 font-semibold py-3 px-8 rounded-full text-lg">
                    Status
                </div>
            </div>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Status Sections -->
                <div class="space-y-5">
                    <!-- Event Status Card -->
                    @foreach ($events as $item)
                    <div class="bg-gradient-to-br from-purple-500/20 to-violet-600/30 backdrop-blur-sm rounded-3xl p-6 mb-6 shadow-lg">
                        <div class="flex justify-between items-center mb-4">
                            <!-- Blurred Title (no background color) -->
                            <div class="text-2xl font-semibold text-white flex justify-center">
                                {{ $item->nama_event }}
                            </div>
                            <form method="POST" action="{{ route('user.detail-status',$item->id) }}">
                                @csrf
                                    <button
                                        class="bg-gradient-to-r from-purple-400 to-purple-500 text-white px-6 py-2 rounded-full text-sm font-bold hover:translate-y-[-2px] hover:shadow-md transition-all duration-300">
                                        Cek Status
                                    </button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
