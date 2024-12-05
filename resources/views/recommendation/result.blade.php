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

                @if ($key == 'Olahraga')
                    <!-- Tabel Olahraga -->
                    <table class="table-auto border-collapse border border-gray-500 w-full mt-4">
                        <thead>
                            <tr>
                                @if (isset($data->first()->activities)) 
                                    <!-- Tabel untuk Diet (memiliki kolom program, activities, dll) -->
                                    <th class="border border-gray-400 px-4 py-2">Activities</th>
                                    <th class="border border-gray-400 px-4 py-2">Schedule</th>
                                    <th class="border border-gray-400 px-4 py-2">Notes</th>
                                @else
                                    <!-- Tabel untuk Bulking (hanya deskripsi) -->
                                    <th class="border border-gray-400 px-4 py-2">Deskripsi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    @if (isset($item->activities)) 
                                        <!-- Menampilkan kolom untuk Diet -->
                                        <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->activities)) !!}</td>
                                        <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->schedule)) !!}</td>
                                        <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->notes)) !!}</td>
                                    @else
                                        <!-- Menampilkan deskripsi untuk Bulking -->
                                        <td class="border border-gray-400 px-4 py-2">{!! nl2br(e($item->description)) !!}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @elseif ($key == 'Makanan Harian')
                    <!-- Tabel Makanan Harian -->
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

                @elseif ($key == 'Informasi Kalori')
                    <!-- Tabel Informasi Kalori -->
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

                @elseif ($key == 'Makronutrien')
                    <!-- Tabel Makronutrien -->
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

                @elseif ($key == 'Camilan')
                    <!-- Tabel Camilan -->
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

                @elseif ($key == 'Hidrasi')
                    <!-- Tabel Hidrasi -->
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
