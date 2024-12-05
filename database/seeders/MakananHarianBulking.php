<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakananHarianBulking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makanan_harian_bulkings')->insert([
            [
                'waktu' => '06.00-08.00',
                'jenis' => '- Nasi/kentang
- Lauk Hewani
- Lauk Nabati
- Sayuran hijau',
                'jumlah' => '- 200 gr
- 100 gr
- 50 gr
- 50 gr',
                'keterangan' => '- 2 centong nasi/2 kentang sedang
- telur ceplok 2 butir
- Tempe/Tahu (2 potong sedang)
- 1 Mangkok',
            ],
            [
                'waktu' => '09.00-10.00',
                'jenis' => '- Roti putih
- Buah
- Susu Whey Protein',
                'jumlah' => '- 80 gr
- 300 gr
- 30 gr',
                'keterangan' => '- 2 roti putih
- 2 pisang
- 1 scoop whey protein',
            ],
            [
                'waktu' => '12.00-13.00',
                'jenis' => '- - Nasi/kentang
- Lauk Hewani
- Lauk Nabati
- Sayuran hijau',
                'jumlah' => '- 200 gr
- 100 gr
- 50 gr
- 50 gr',
                'keterangan' => '- 2 centong nasi/2 kentang sedang
- Ayam dada + 1 telur
- Tempe/Tahu (2 potong sedang)
- 1 Mangkok',
            ],
            [
                'waktu' => '15.00-16.00',
                'jenis' => '- Oatmeal
- Buah
- Roti gandum',
                'jumlah' => '- 40 gr
- 150 gr
- 80 gr',
                'keterangan' => '- 4 sendok makan
- 1 buah pisang
- 2 roti gandum',
            ],
            [
                'waktu' => '18.00-19.00',
                'jenis' => '- Nasi/kentang
- Lauk Hewani
- Lauk Nabati
- Sayuran hijau',
                'jumlah' => '- 200 gr
- 100 gr
- 50 gr
- 50 gr',
                'keterangan' => '- 2 centong nasi/2 kentang sedang
- Ayam dada 2
- Tempe/Tahu (2 potong sedang)
- 1 Mangkok',  
            ],
        ]);
    }
}
