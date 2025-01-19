<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HidrasiBulkingPerempuan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hidrasi_bulking_perempuans')->insert([
            [
                'description' => '- 3-4 liter per hari atau sekitar 12-16 gelas air untuk pria.
- 2.5-3 liter per hari atau sekitar 10-12 gelas air untuk wanita.',
            ],
        ]);
    }
}
