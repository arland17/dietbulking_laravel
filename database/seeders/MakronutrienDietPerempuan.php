<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakronutrienDietPerempuan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makronutrien_diet_perempuans')->insert([
            [
                'description' => '1. NASI 50 gram
Kalori: 65-70 kcal
Karbohidrat : 37 gram
protein: 1 gram
Lemak: 0,2 gram',
            ],
            [
                'description' => '2. Lauk Hewani 50 gram (misalnya daging ayam, ikan, atau daging sapi tanpa lemak)
Kalori: 80-120 kcal
Karbohidrat: 0 gram
Protein: 15-16 gram
Lemak: 2-3 gram',
            ],
            [
                'description' => '3. Tempe/Tahu 50 gram
Kalori: 90-100 kcal
Karbohidrat: 6 gram
Protein: 6 gram
Lemak: 3 gram',
            ],
            [
                'description' => '4. Minyak zaitun/kelapa 1 sdm
Kalori: 120 kalori
Karbohidrat: 0 gram
Protein: 0 gram
Lemak: 14 gram
Mengandung antioksidan seperti vitamin E dan polifenol, yang bermanfaat untuk kesehatan secara keseluruhan.',
            ],
            [
                'description' => '5. Apel/pier 150 gram
Kalori: 80-90 kalori
Karbohidrat: 22-24 gram
Gula: 17-19 gram (terutama fruktosa dan glukosa alami)
Serat: 4 gram
Protein: 0.5 gram
Lemak: 0.3 gram
Vitamin C: 6-10 mg (7-12% dari kebutuhan harian)
Kalium: 150-160 mg',
            ],
        ]);

    }
}
