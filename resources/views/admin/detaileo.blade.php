
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/66.jpg') }}')">
            {{-- alert start --}}
            @session('success')
            <script>
                Swal.fire({
                    title: "Success",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
            </script>
            @endsession

            @session('delete')
            <script>
                Swal.fire({
                    title: "Success",
                    text: "{{ session('delete') }}",
                    icon: "success"
                });
            </script>
            @endsession
            {{-- alert end --}}

            @include('admin.nav')
            <div class="rounded-2xl w-full flex flex-col mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto">
                <table class="min-w-full text-left text-sm bg-white bg-opacity-80 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-pink-300/70 text-[#2B0052] font-semibold">
                            <th class="px-6 py-4">Nama EO</th>
                            <th class="px-6 py-4 w-1/6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-pink-200">
                        <tr class="hover:bg-pink-50/70">
                            <td class="px-6 py-4 font-medium text-[#2B0052]">
                                <div class="flex items-center gap-3">
                                    <div>
                                        <p class="font-bold">
                                            Nama EO
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.eventnyaeo') }}" class="inline-block bg-pink-400 hover:bg-pink-500 text-[#2B0052] font-semibold px-6 py-2 rounded-full transition-colors duration-200">
                                  Detail
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>