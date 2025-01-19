<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaBulkingCalisthenics extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('olahraga_bulking_calisthenics')->insert([
            [
                'day' => 'Senin',
                'category' => 'Upper Body',
                'exercises' => "- Regular Push up (3 set x 10-20 repetisi)
- Diamond Push up (3 set x 10-20 repetisi)
- Decline Push up (3 set x 10-20 repetisi)
- Archer Push up (3 set x 8-12 repetisi)
- Dips (3 set x 5-12 repetisi)",
                'notes' => "- Tambahkan beban semampunya (contoh, bisa memakai tas yang berisi barbel 2,5kg atau lebih, atau pakai weightlifting belt)
- Beban ditambahkan jika sudah merasa mudah
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi gerakan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah
- Di akhir sebelum selesai latihan, usahakan sampai failure"
            ],
            [
                'day' => 'Selasa',
                'category' => 'Kardio/REST',
                'exercises' => "- Kardio atau boleh melakukan REST
- Selama bulking, kardio dikurangi jumlahnya (waktu atau langkah), tidak sebanyak saat DIET",
                'notes' => ""
            ],
            [
                'day' => 'Rabu',
                'category' => 'Upper Body',
                'exercises' => "- Regular Pull up (3 set x 5-12 repetisi)
- Wide Grip Pull up (3 set x 5-12 repetisi)
- Close Grip Pull up (3 set x 5-12 repetisi)
- Chin up (3 set x 5-12 repetisi)",
                'notes' => "- Tambahkan beban semampunya (contoh, bisa memakai tas yang berisi barbel 2,5kg atau lebih, atau pakai weightlifting belt)
- Beban ditambahkan jika sudah merasa mudah
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi gerakan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah
- Di akhir sebelum selesai latihan, usahakan sampai failure"
            ],
            [
                'day' => 'Kamis',
                'category' => '',
                'exercises' => "- REST",
                'notes' => ""
            ],
            [
                'day' => 'Jumat',
                'category' => 'Lower Body',
                'exercises' => "- Squat (5 set x 10-20)
- Plank (3 set x 45 detik - 1 menit)
- Burpees (3 set x 10-15 repetisi) 

Lower Body boleh dilakukan 2 minggu sekali dan di ganti dengan latihan lain",
                'notes' => "- Tambahkan beban semampunya (contoh, bisa memakai tas yang berisi barbel 2,5kg atau lebih, atau pakai weightlifting belt)
- Beban ditambahkan jika sudah merasa mudah
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi gerakan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah
- Di akhir sebelum selesai latihan, usahakan sampai failure"
            ],
            [
                'day' => 'Sabtu',
                'category' => 'Kardio/REST',
                'exercises' => "- Bisa REST atau kardio (jalan, renang, sepeda, dll)
- Selama bulking, kardio dikurangi jumlahnya, tidak sebanyak saat DIET",
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
