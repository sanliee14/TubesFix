
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-cover bg-center " style="background-image: url('{{ asset('images/66.jpg') }}')">
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
                <table class="min-w-full text-left text-sm bg-white bg-opacity-80 backdrop-blur-sm rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-pink-300/70 text-[#2B0052] font-semibold">
                            <th class="px-6 py-4">Nama Event</th>
                            <th class="px-6 py-4">Tanggal</th>
                            <th class="px-6 py-4">Jumlah Panitia</th>
                            <th class="px-6 py-4">Lebih Lanjut</th>
                        </tr>
                    </thead>
                    @foreach ($event as $item)
                    <tbody class="divide-y divide-pink-200">
                        <tr class="hover:bg-pink-50/70">
                            <td class="px-6 py-4">
                                {{ $item->nama_event }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $panitiaCounts[$item->id] ?? 0 }}
                            </td>
                            <td class="px-6 py-4">
                                <form method="POST" action="{{ route('admin.panitevent',$item->id) }}">
                                    @csrf
                                    <button class="bg-pink-400 hover:bg-pink-200 text-[#2B0052] font-semibold px-6 py-3 rounded-full">
                                        Detail
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
