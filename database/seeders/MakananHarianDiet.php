<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakananHarianDiet extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makanan_harian_diets')->insert([
            [
                'waktu' => '07.00-08.00',
                'jenis' => '- Nasi
- Sayur Hewani
- Lauk Nabati
- Minyak',
                'jumlah' => '- 50 gr
- 50 gr
- 50 gr
- 10 gr(1 sendok makan)',
                'keterangan' => '- 3 sendok makan
- Ikan/ayam/daging (1 potong) atau putih telur 2 butir
- Tempe/Tahu (2 potong sedang)
- Minyak zaitun/kelapa',
            ],
            [
                'waktu' => '09.00-10.00',
                'jenis' => 'Buah',
                'jumlah' => '150 gram',
                'keterangan' => 'Apel/pier',
            ],
            [
                'waktu' => '12.00-13.00',
                'jenis' => '- Nasi
- Sayur Hewani
- Lauk Nabati
- Minyak',
                'jumlah' => '- 50 gr
- 50 gr
- 50 gr
- 10 gr(1 sendok makan)',
                'keterangan' => '- 3 sendok makan
- Ikan/ayam/daging (1 potong) atau putih telur 2 butir
- Tempe/Tahu (2 potong sedang)
- Minyak zaitun/kelapa',
            ],
            [
                'waktu' => '15.00-16.00',
                'jenis' => 'Buah',
                'jumlah' => '150 gram',
                'keterangan' => 'Apel/pier',
            ],
            [
                'waktu' => '18.00-19.00',
                'jenis' => '- Nasi
- Sayur Hewani
- Lauk Nabati
- Minyak',
                'jumlah' => '- 50 gr
- 50 gr
- 50 gr
- 10 gr(1 sendok makan)',
                'keterangan' => '- 3 sendok makan
- Ikan/ayam/daging (1 potong) atau putih telur 2 butir
- Tempe/Tahu (2 potong sedang)
- Minyak zaitun/kelapa',  
            ],
        ]);
    }
}
