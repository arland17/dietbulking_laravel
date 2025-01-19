<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiKaloriDietPerempuan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasi_kalori_diet_perempuans')->insert([
            [
                'total_kalori' => '1221 kalori',
                'makanan' => '1. Nasi putih 50 gr = 65 kalori
2. Lauk hewani 100 gr = 100 kalori
3. Lauk nabati 50 gr = 100 kalori
4. Minyak zaitun 10 gr = 90 kalori
1x makan total 355 Kalori, dan untuk sehari 3x makan totalnya 1065 kalori',
                'snack' => '1. Buah apel/pier 150 gr = 78 kalori
Total 2x makan snack pagi dan sore adalah 156 kalori',
                'tambahan' => '- Cara masak makanan adalah:
rebus, kukus, sop, panggang.
- Hindari makan makanan:
Junk food, Tinggi gula, Tepung-tepungan, Gorengan, Santan, Daging merah dengan banyak lemak, Kripik dan Krupuk.',
            ],
        ]);
    }
}
