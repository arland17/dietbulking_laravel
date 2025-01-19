<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HidrasiDietPerempuan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hidrasi_diet_perempuans')->insert([
            [
                'description' => '- 2.5-3 liter per hari atau sekitar 10-12 gelas air untuk pria.
- 2-2.5 liter per hari atau sekitar 8-10 gelas air untuk wanita.',
            ],
        ]);
    }
}
