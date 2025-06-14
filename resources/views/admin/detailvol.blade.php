
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
                            <th class="px-6 py-4">Nama Volunteer</th>
                            <th class="px-6 py-4">Event</th>
                            <th class="px-6 py-4">Posisi</th>
                            <th class="px-6 py-4">Tanggal Diterima</th>
                        </tr>
                    </thead>
                    @foreach ($user as $item)

                        <tbody class="divide-y divide-pink-200">
                            <tr class="hover:bg-pink-50/70">
                                <td class="px-6 py-4">
                                    {{ $item->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->events->nama_event }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->posisi }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->updated_at }}
                                </td>
                                </td>
                            </tr>
                            <!-- Additional rows would go here -->
                        </tbody>

                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
