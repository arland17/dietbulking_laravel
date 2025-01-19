<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaDietCalisthenics extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('olahraga_diet_calisthenics')->insert([
            [
                'day' => 'Senin',
                'category' => 'Upper Body',
                'exercises' => "-Incline Push Up (3 set x 8-12 repetisi)
-Regular Push Up (3 set x 8-12 repetisi)
-Diamond Push Up (3 set x 8-12 repetisi)
-Decline Push up (3 set x 8-12 repetisi)",
                'notes' => "- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi gerakan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah"
            ],
            [
                'day' => 'Selasa',
                'category' => 'Kardio/REST',
                'exercises' => "- Kardio (30 menit-1 jam atau usahakan sampai 5000 langkah)",
                'notes' => "- Tambahkan waktu atau langkah jika sudah terasa mudah"
            ],
            [
                'day' => 'Rabu',
                'category' => 'Upper Body',
                'exercises' => "- Regular Pull up (3 set x 5-12 repetisi)
- Wide Grip Pull up (3 set x 5-12 repetisi)
- Close Grip Pull up (3 set x 5-12 repetisi)
- Chin up (3 set x 5-12 repetisi)",
                'notes' => "- Jika belum bisa pull up, lakukan gerakan Dead Hang Pull up Bar selama 30 detik-1 menit
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi gerakan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah
- Jika tidak ada pull up bar atau tempat untuk pull up, bisa diganti dengan push up sesuai jadwal hari SENIN"
            ],
            [
                'day' => 'Kamis',
                'category' => 'Kardio/REST',
                'exercises' => "- Kardio (30 menit-1 jam atau usahakan sampai 5000 langkah)",
                'notes' => "- Tambahkan waktu atau langkah jika sudah terasa mudah"
            ],
            [
                'day' => 'Jumat',
                'category' => 'Lower Body',
                'exercises' => "- Kardio (30 menit-1jam atau usahakan sampai 5000 langkah)
- Squat (3 set x 10-20 repetisi)
- Burpees (3 set x 5-12 repetisi)
- Plank (3 set x 30 detik - 1 menit)

Lower Body boleh dilakukan 2 minggu sekali dan di ganti dengan latihan lain, tapi untuk kardio WAJIB dilakukan",
                'notes' => "- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi gerakan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah"
            ],
            [
                'day' => 'Sabtu',
                'category' => '',
                'exercises' => "-Bisa REST atau kardio (jalan, renang, sepeda, dll)",
                'notes' => ""
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
