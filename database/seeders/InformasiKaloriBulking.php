<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiKaloriBulking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasi_kalori_bulkings')->insert([
            [
                'total_kalori' => '2808 kalori',
                'makanan' => '1. Nasi putih 200 gr = 260 kalori
2. Lauk hewani 100 gr = 200 kalori
3. Lauk nabati 50 gr = 100 kalori
4. Sayur hijau 50 gr = 15 kalori

1x makan total 575 Kalori, dan untuk sehari
3x makan totalnya 1725 kalori',
                'snack' => '1. Roti 80 gr (2 roti) = 200 kalori
2. Pisang 300 gr = 270 kalori
3. Susu whey protein 30 gr = 130 kalori
4. Oatmeal 40 gr = 148 kalori

Total 2x makan snack pagi dan sore adalah  1083 kalori',
                'tambahan' => '- 1 jam setelah olahraga, MINUM susu whey protein 1 scoop
- Suplemen Creatine 5 gr per hari (1 sendok teh) untuk meningkatkan cadangan energi dalam otot.
- Cara masak makanan adalah; rebus, kukus, sop, panggang.',
            ],
        ]);
    }
}
