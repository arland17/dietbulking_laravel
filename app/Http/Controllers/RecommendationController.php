<?php

namespace App\Http\Controllers;

use App\Models\CamilanDiet;
use App\Models\HidrasiDiet;
use App\Models\OlahragaDiet;
use Illuminate\Http\Request;
use App\Models\CamilanBulking;
use App\Models\HidrasiBulking;
use App\Models\OlahragaBulking;
use App\Models\MakronutrienDiet;
use App\Models\MakananHarianDiet;
use Illuminate\Routing\Controller;
use App\Models\InformasiKaloriDiet;
use App\Models\MakronutrienBulking;
use App\Models\MakananHarianBulking;
use App\Models\InformasiKaloriBulking;

class RecommendationController extends Controller
{
    private $facts = [];
    private $recommendations = [];
    private $rules = [];

    public function __construct()
    {
        // Aturan forward chaining berdasarkan spesifikasi Anda
        $this->rules = [
            // DIET RULES
            [
                'conditions' => ['tujuan' => 'diet', 'hobi' => 'yes'],
                'conclusion' => 'Olahraga Diet',
                'model' => OlahragaDiet::class,
            ],
            [
                'conditions' => ['tujuan' => 'diet', 'rencana_makan' => 'yes'],
                'conclusion' => 'Makanan Harian Diet',
                'model' => MakananHarianDiet::class,
            ],
            [
                'conditions' => ['tujuan' => 'diet',  'kalori' => 'yes'],
                'conclusion' => 'Informasi Kalori Diet',
                'model' => InformasiKaloriDiet::class,
            ],
            [
                'conditions' => ['tujuan' => 'diet', 'makronutrien' => 'yes'],
                'conclusion' => 'Makronutrien Diet',
                'model' => MakronutrienDiet::class,
            ],
            [
                'conditions' => ['tujuan' => 'diet', 'camilan' => 'yes'],
                'conclusion' => 'Camilan Diet',
                'model' => CamilanDiet::class,
            ],
            [
                'conditions' => ['tujuan' => 'diet', 'hidrasi' => 'yes'],
                'conclusion' => 'Hidrasi Diet',
                'model' => HidrasiDiet::class,
            ],

            // BULKING RULES
            [
                'conditions' => ['tujuan' => 'bulking', 'hobi' => 'yes'],
                'conclusion' => 'Olahraga Bulking',
                'model' => OlahragaBulking::class,
            ],
            [
                'conditions' => ['tujuan' => 'bulking', 'rencana_makan' => 'yes'],
                'conclusion' => 'Makanan Harian Bulking',
                'model' => MakananHarianBulking::class,
            ],
            [
                'conditions' => ['tujuan' => 'bulking', 'kalori' => 'yes',],
                'conclusion' => 'Informasi Kalori Bulking',
                'model' => InformasiKaloriBulking::class,
            ],
            [
                'conditions' => ['tujuan' => 'bulking', 'makronutrien' => 'yes'],
                'conclusion' => 'Makronutrien Bulking',
                'model' => MakronutrienBulking::class,
            ],
            [
                'conditions' => ['tujuan' => 'bulking', 'camilan' => 'yes'],
                'conclusion' => 'Camilan Bulking',
                'model' => CamilanBulking::class,
            ],
            [
                'conditions' => ['tujuan' => 'bulking', 'hidrasi' => 'yes'],
                'conclusion' => 'Hidrasi Bulking',
                'model' => HidrasiBulking::class,
            ],
        ];
    }

    public function getRecommendation(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'tujuan' => 'required|in:diet,bulking',
            'hobi' => 'required|in:yes,no',
            'rencana_makan' => 'required|in:yes,no',
            'kalori' => 'required|in:yes,no',
            'makronutrien' => 'required|in:yes,no',
            'camilan' => 'required|in:yes,no',
            'hidrasi' => 'required|in:yes,no',
        ]);

        // Simpan fakta awal
        $this->facts = $validated;

        // Proses forward chaining untuk rekomendasi
        $this->applyForwardChaining();

        // Return hasil ke view
        return view('recommendation.result', [
            'recommendations' => $this->recommendations,
        ]);
    }

    private function applyForwardChaining()
    {
        foreach ($this->rules as $rule) {
            // Cek apakah semua kondisi pada aturan terpenuhi
            if ($this->conditionsAreMet($rule['conditions'])) {
                // Ambil data dari model terkait dan tambahkan ke rekomendasi jika kondisi terpenuhi
                $modelClass = $rule['model'];
                
                // Cek jika data ada (mungkin untuk beberapa model bisa kosong)
                $modelData = $modelClass::all();  // Ambil seluruh data dari model
                
                // Tambahkan data model ke rekomendasi jika ada data yang ditemukan
                if ($modelData->isNotEmpty()) {
                    $this->recommendations[$rule['conclusion']] = $modelData;
                } else {
                    // Jika tidak ada data, beri pesan default
                    $this->recommendations[$rule['conclusion']] = 'Tidak ada data untuk kategori ini.';
                }
            }
        }
    }
    

    private function conditionsAreMet($conditions)
    {
        foreach ($conditions as $key => $value) {
            if (!isset($this->facts[$key]) || $this->facts[$key] !== $value) {
                return false; // Kondisi tidak terpenuhi
            }
        }
        return true; // Semua kondisi terpenuhi
    }
}
