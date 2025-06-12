@include('EO.navbar')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @session('success')
            <script>
                Swal.fire({
                    title: "Success",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
                </script>
    @endsession

    <div class="min-h-screen" style="background-image: url('{{ asset('images/2.png') }}');">
        <!-- Header Section -->
        <div class="py-8 flex justify-center mb-8">
                <div class="text-blue-200 font-bold py-3 px-8 rounded-full text-3xl">
                    Daftar Peserta
                </div>
            </div>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Status Sections -->
                <div class="space-y-5">
                    <!-- Event Status Card -->
                        @foreach ($event as $item)
                        <div class="bg-blue-300/60 backdrop-blur-sm rounded-3xl p-6 mb-6 shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <!-- Blurred Title (no background color) -->
                                <div class="text-2xl font-semibold text-white flex justify-center">
                                    {{ $item->nama_event }}
                                </div>

                                <form method="POST" action="{{ route('eo.detail-pendaftar',$item->id) }}">
                                @csrf
                                <button
                                    class="bg-gradient-to-r from-blue-400 to-blue-500 text-white px-6 py-2 rounded-full text-sm font-bold hover:translate-y-[-2px] hover:shadow-md transition-all duration-300">
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
