<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakronutrienBulking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makronutrien_bulkings')->insert([
            [
                'description' => '1. Nasi putih/kentang 200 gram
Kalori: 260-280 kcal
Karbohidrat: 55-60 gram
Protein: 4-5 gram
Lemak: 0-1 gram
Serat: 0.5 gram',
            ],
            [
                'description' => '2. Lauk hewani 100 gram (misalnya daging ayam, ikan, atau daging sapi tanpa lemak)
Kalori: 150-250 kcal (tergantung jenis lauk)
Karbohidrat: 0 gram
Protein: 20-30 gram
Lemak: 5-15 gram (tergantung jenis daging dan cara pengolahan)',
            ],
            [
                'description' => '3. Lauk nabati 50 gram (misalnya tempe, tahu, atau kacang-kacangan)
Kalori: 70-130 kcal (tergantung jenis lauk nabati)
Karbohidrat: 5-10 gram
Protein: 5-10 gram
Lemak: 3-6 gram (tergantung jenis lauk nabati)',
            ],
            [
                'description' => '4. Sayuran hijau 50 gram (misalnya bayam, kangkung, brokoli)
Kalori: 10-20 kcal
Karbohidrat: 2-4 gram
Protein: 1-2 gram
Lemak: 0-1 gram
Serat: 1-2 gram',
            ],
            [
                'description' => '5. 2 buah pisang (ukuran sedang, 120-150 gram per pisang)
Kalori: 210-300 kcal
Karbohidrat: 54-60 gram
Protein: 2-3 gram
Lemak: 0.5-1 gram
Serat: 4-6 gram
Gula alami: 20-30 gram',
            ],
            [
                'description' => '6. 4 sendok makan oatmeal (32-40 gram oatmeal kering)
Kalori: 120-150 kcal
Karbohidrat: 20-25 gram
Protein: 4-5 gram
Lemak: 2-3 gram
Serat: 3-4 gram'
            ],
            [
                'description' => '7. 2 potong roti putih/gandum ( 60-80 gram)
Kalori: 160-200 kcal
Karbohidrat: 30-40 gram
Protein: 4-6 gram
Lemak: 2-4 gram
Serat: 2-4 gram (tergantung apakah menggunakan roti gandum atau putih)'
            ],
            [
                'description' => '8. 1 scoop whey protein (sekitar 25-30 gram)
Kalori: 100-130 kcal
Karbohidrat: 2-5 gram
Protein: 20-25 gram
Lemak: 1-3 gram'
            ],
        ]);
    }
}
