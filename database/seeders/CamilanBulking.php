<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CamilanBulking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('camilan_bulkings')->insert([
            [
                'description' => 'Greek yogurt ditambah madu, Kacang almond, Smoothie protein, Buah alpukat, Sandwich selai kacang (pakai roti gandum), Protein bar, Tuna salad, dan Oatmeal ditambah protein powder.',
            ],
        ]);
    }
}
