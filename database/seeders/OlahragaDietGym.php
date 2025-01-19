<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaDietGym extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('olahraga_diet_gyms')->insert([
            [
                'day' => 'Senin',
                'category' => 'Upper Body',
                'exercises' => "- Dumbbell Variation (3 set x 5-8 repetisi)
- Barbell Variation (3 set x 5-8 repetisi)",
                'notes' => "- Saat latihan dengan dumbbell dan barbell variation, sesuaikan dengan kebutuhan bagian upper body mana yang ingin di latih
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi latihan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah
- Di akhir sebelum selesai latihan, usahakan sampai failure"
            ],
            [
                'day' => 'Selasa',
                'category' => 'Kardio/REST',
                'exercises' => "- Treadmill (30-45 menit), usahakan sampai 5000 langkah
- Static bike (30-45 menit)",
                'notes' => "- Selama kardio boleh menambahkan variasi kardio lainnya
- Waktu atau langkah disesuaikan dengan kemampuan
- Naikan jumlah lama waktu atau jumlah langkah jika sudah merasa mudah"
            ],
            [
                'day' => 'Rabu',
                'category' => 'Upper Body',
                'exercises' => "- Dumbbell Variation (3 set x 5-8 repetisi)
- Barbell Variation (3 set x 5-8 repetisi)",
                'notes' => "- Saat latihan dengan dumbbell dan barbell variation, sesuaikan dengan kebutuhan bagian upper body mana yang ingin di latih
- Antar set, rest selama 2 menit dan antar variasi, rest selama 2-3 menit
- Repetisi disesuaikan dengan kemampuan
- Variasi latihan disesuaikan dengan kemampuan, usahakan bisa sampai 3 variasi
- Naikan jumlah repetisi jika sudah merasa mudah
- Di akhir sebelum selesai latihan, usahakan sampai failure"
            ],
            [
                'day' => 'Kamis',
                'category' => '',
                'exercises' => "- Treadmill (30-45 menit), usahakan sampai 5000 langkah
- Static bike (30-45 menit)
- Boleh REST",
                'notes' => "- Selama kardio boleh menambahkan variasi kardio lainnya
- Waktu atau langkah disesuaikan dengan kemampuan
- Naikan jumlah lama waktu atau jumlah langkah jika sudah merasa mudah"
            ],
            [
                'day' => 'Jumat',
                'category' => 'Lower Body',
                'exercises' => "- Squat dengan barbell/dumbbell (3 set x 5-8 repetisi)
- Dumbbell Squat variation (3 set x 5-8 repetisi)
- Leg Press (3 set x 5-8 repetisi)
- Plank (30 detik - 1 menit)
- Lunges dengan dumbbell (3 set x 5-8 repetisi) 

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
                'exercises' => "- Treadmill (30-45 menit), usahakan sampai 5000 langkah
- Static bike (30-45 menit)
- Boleh REST",
                'notes' => "- Selama kardio boleh menambahkan variasi kardio lainnya
- Waktu atau langkah disesuaikan dengan kemampuan
- Naikan jumlah lama waktu atau jumlah langkah jika sudah merasa mudah"
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
