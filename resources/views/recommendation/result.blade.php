<x-layout>
    <div class="bg-white p-6">
        <h1 class="text-4xl font-bold text-center lg:py-5 tracking-wide text-gray-900">Hasil Rekomendasi</h1>

        <!-- Menampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Menampilkan hasil rekomendasi -->
        @foreach ($recommendations as $key => $data)
            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $key }}</h2>

                @if (str_contains($key, 'Olahraga'))
                    <!-- Tabel Olahraga Diet/Bulking -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Activities</th>
                                <th class="border border-gray-400 px-4 py-2">Schedule</th>
                                <th class="border border-gray-400 px-4 py-2">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->activities)) !!}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->schedule)) !!}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->notes)) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @elseif (str_contains($key, 'Makanan Harian'))
                    <!-- Tabel Makanan Harian Diet/Bulking -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Waktu</th>
                                <th class="border border-gray-400 px-4 py-2">Jenis</th>
                                <th class="border border-gray-400 px-4 py-2">Jumlah</th>
                                <th class="border border-gray-400 px-4 py-2">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $item->waktu }}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->jenis)) !!}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->jumlah)) !!}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->keterangan)) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @elseif (str_contains($key, 'Informasi Kalori'))
                    <!-- Tabel Informasi Kalori Diet/Bulking -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Total Kalori</th>
                                <th class="border border-gray-400 px-4 py-2">Makanan</th>
                                <th class="border border-gray-400 px-4 py-2">Snack</th>
                                <th class="border border-gray-400 px-4 py-2">Tambahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $item->total_kalori }}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->makanan)) !!}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->snack)) !!}</td>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->tambahan)) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @elseif (str_contains($key, 'Makronutrien'))
                    <!-- Tabel Makronutrien Diet/Bulking -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->description)) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @elseif (str_contains($key, 'Camilan'))
                    <!-- Tabel Camilan Diet/Bulking -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">{{ $item->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @elseif (str_contains($key, 'Hidrasi'))
                    <!-- Tabel Hidrasi Diet/Bulking -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->description)) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        @endforeach
    </div>
</x-layout>
