<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CamilanDiet extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('camilan_diets')->insert([
            [
                'description' => 'Cincau Hijau, Kacang rebus, Kacang edamame, Kacang almond, Jagung rebus, dan Buah',
            ],
        ]);
    }
}
