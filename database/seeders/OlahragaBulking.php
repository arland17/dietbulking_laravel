<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaBulking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('olahraga_bulkings')->insert([
            [
                'description' => '- Wajib angkat beban/gym
- Progressive Overload: Coba untuk secara bertahap meningkatkan berat angkatan setiap minggu agar otot terus tumbuh.
- Kardio: Bisa dilakukan ringan, 1-2 kali seminggu, agar tubuh tetap sehat tanpa mengganggu bulking.

Jadwal:
3x seminggu selang seling dengan Rest day

CONTOH LATIHAN : (bisa diubah atau ditambahkan sesuai kebutuhan)
Hari 1:
• Squat
• Bench Press
• Barbell Row
Hari 2:
• Deadlift
• Pull-up (atau Lat Pulldown)
• Overhead Press
Hari 3 (Opsional/Recovery):
• Squat atau Deadlift ringan
• Latihan isolasi (seperti leg curls, bicep curls, triceps extensions, dll)

Catatan:
Total berat yang di angkat saat gym berpengaruh dalam membesarkan otot tubuh',
            ],
            
        ]);
    }
}
