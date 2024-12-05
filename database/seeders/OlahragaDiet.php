<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaDiet extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('olahraga_diets')->insert([
            [
                'activities' => '- Jalan kaki: 30 menit non stop
- Berenang: 30 menit non stop
- Sepeda: 30 menit non stop',
                'schedule' => '5x seminggu dan bisa beri jeda 2 hari (bebas hari apa saja), untuk istirahat',
                'notes' => 'Jika target 30 menit sudah tercapai dan konsisten selama 5 hari, boleh ditingkatkan menjadi 60 menit. Jika 60 menit sudah tercapai dan sudah terbiasa, tingkatkan lagi sampai 120 menit.',
            ],
        ]);
    }
}
