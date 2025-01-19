<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaBulkingGym extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('olahraga_bulking_gyms')->insert([
            [
                'day' => 'Senin',
                'category' => 'Upper Body',
                'exercises' => "- Dumbbell Variation (3 set x 8-12 repetisi)
- Barbell Variation (3 set x 8-12 repetisi)",
                'notes' => "- Saat latihan dengan dumbbell dan barbell variation, sesuaikan dengan kebutuhan bagian upper body mana yang ingin di latih
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi latihan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah"
            ],
            [
                'day' => 'Selasa',
                'category' => '',
                'exercises' => "- REST",
                'notes' => " "
            ],
            [
                'day' => 'Rabu',
                'category' => 'Upper Body',
                'exercises' => "- Dumbbell Variation (3 set x 8-12 repetisi)
- Barbell Variation (3 set x 8-12 repetisi)",
                'notes' => "- Saat latihan dengan dumbbell dan barbell variation, sesuaikan dengan kebutuhan bagian upper body mana yang ingin di latih
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi latihan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah"
            ],
            [
                'day' => 'Kamis',
                'category' => '',
                'exercises' => "- Treadmill (30-45 menit), usahakan sampai 5000 langkah
- Static bike (30-45 menit)
- Boleh REST",
                'notes' => "- Selama bulking, kardio dikurangi boleh melakukan variasi kardio lainnya
- Waktu atau langkah disesuaikan dengan kemampuan"
            ],
            [
                'day' => 'Jumat',
                'category' => 'Lower Body',
                'exercises' => "- Squat dengan barbell/dumbbell (3 set x 8-12 repetisi)
- Dumbbell Squat variation (3 set x 8-12 repetisi)
- Leg Press (3 set x 8-12 repetisi)
- Plank (1 menit)
- Lunges dengan dumbbell (3 set x 8-12 repetisi)",
                'notes' => "- Saat latihan dengan dumbbell dan barbell variation, sesuaikan dengan kebutuhan bagian Lower body mana yang ingin di latih
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi latihan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah"
            ],
            [
                'day' => 'Sabtu',
                'category' => 'Kardio/REST',
                'exercises' => "- Treadmill (30-45 menit), usahakan sampai 5000 langkah
- Static bike (30-45 menit)
- Boleh REST",
                'notes' => "- Selama bulking, kardio dikurangi boleh melakukan variasi kardio lainnya"
            ],
            [
                'day' => 'Minggu',
                'category' => '',
                'exercises' => "- FULL REST",
                'notes' => ""
            ],
        ]);
    }
}
