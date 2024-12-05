<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OlahragaDiet;
use App\Models\OlahragaBulking;
use App\Models\MakananHarianDiet;
use App\Models\MakananHarianBulking;
use App\Models\InformasiKaloriDiet;
use App\Models\InformasiKaloriBulking;
use App\Models\MakronutrienDiet;
use App\Models\MakronutrienBulking;
use App\Models\CamilanDiet;
use App\Models\CamilanBulking;
use App\Models\HidrasiDiet;
use App\Models\HidrasiBulking;
use Illuminate\Routing\Controller;

class RecommendationController extends Controller
{
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

    // Inisialisasi rekomendasi
    $recommendations = [];

    // Rekomendasi berdasarkan tujuan (diet atau bulking)
    if ($validated['tujuan'] === 'diet') {
        $recommendations = $this->generateDietRecommendations($validated);
    } elseif ($validated['tujuan'] === 'bulking') {
        $recommendations = $this->generateBulkingRecommendations($validated);
    }

    // Return hasil ke view
    return view('recommendation.result', [
        'recommendations' => $recommendations,
    ]);
}

private function generateDietRecommendations($input)
{
    $recommendations = [];

    // Rekomendasi olahraga
    if ($input['hobi'] === 'yes') {
        $recommendations['Olahraga'] = OlahragaDiet::all();
    }

    // Rekomendasi makanan harian
    if ($input['rencana_makan'] === 'yes') {
        $recommendations['Makanan Harian'] = MakananHarianDiet::all();

        // Informasi tambahan tentang kalori
        if ($input['kalori'] === 'yes') {
            $recommendations['Informasi Kalori'] = InformasiKaloriDiet::all();
        }

        // Informasi tambahan tentang makronutrien
        if ($input['makronutrien'] === 'yes') {
            $recommendations['Makronutrien'] = MakronutrienDiet::all();
        }
    }

    // Rekomendasi camilan
    if ($input['camilan'] === 'yes') {
        $recommendations['Camilan'] = CamilanDiet::all();
    }

    // Panduan hidrasi
    if ($input['hidrasi'] === 'yes') {
        $recommendations['Hidrasi'] = HidrasiDiet::all();
    }

    // Jika tidak ada data, jangan masukkan kategori ke dalam hasil
    return $recommendations;
}

private function generateBulkingRecommendations($input)
{
    $recommendations = [];

    // Rekomendasi olahraga
    if ($input['hobi'] === 'yes') {
        $recommendations['Olahraga'] = OlahragaBulking::all();
    }

    // Rekomendasi makanan harian
    if ($input['rencana_makan'] === 'yes') {
        $recommendations['Makanan Harian'] = MakananHarianBulking::all();

        // Informasi tambahan tentang kalori
        if ($input['kalori'] === 'yes') {
            $recommendations['Informasi Kalori'] = InformasiKaloriBulking::all();
        }

        // Informasi tambahan tentang makronutrien
        if ($input['makronutrien'] === 'yes') {
            $recommendations['Makronutrien'] = MakronutrienBulking::all();
        }
    }

    // Rekomendasi camilan
    if ($input['camilan'] === 'yes') {
        $recommendations['Camilan'] = CamilanBulking::all();
    }

    // Panduan hidrasi
    if ($input['hidrasi'] === 'yes') {
        $recommendations['Hidrasi'] = HidrasiBulking::all();
    }

    // Jika tidak ada data, jangan masukkan kategori ke dalam hasil
    return $recommendations;
}

}
