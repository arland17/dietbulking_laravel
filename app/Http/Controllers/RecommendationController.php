<?php

namespace App\Http\Controllers;

use App\Models\CamilanDiet;
use App\Models\HidrasiDiet;
use Illuminate\Http\Request;
use App\Models\CamilanBulking;
use App\Models\HidrasiBulking;
use App\Models\OlahragaDietGym;
use App\Models\MakronutrienDiet;
use App\Models\MakananHarianDiet;
use App\Models\OlahragaBulkingGym;
use Illuminate\Routing\Controller;
use App\Models\InformasiKaloriDiet;
use App\Models\MakronutrienBulking;
use App\Models\HidrasiDietPerempuan;
use App\Models\MakananHarianBulking;
use App\Models\InformasiKaloriBulking;
use App\Models\HidrasiBulkingPerempuan;
use App\Models\OlahragaDietCalisthenics;
use App\Models\MakronutrienDietPerempuan;
use App\Models\MakananHarianDietPerempuan;
use App\Models\OlahragaBulkingCalisthenics;
use App\Models\InformasiKaloriDietPerempuan;
use App\Models\MakronutrienBulkingPerempuan;
use App\Models\MakananHarianBulkingPerempuan;
use App\Models\InformasiKaloriBulkingPerempuan;

class RecommendationController extends Controller
{
    private $facts = [];
    private $recommendations = [];
    private $rules = [];

    public function __construct()
    {
        $this->rules = [
            // DIET RULES
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T2' => 'Yes', 'T4' => 'Yes'],
                'conclusion' => 'Olahraga Diet (Gym dan Calisthenics)',
                'model' => [OlahragaDietGym::class, OlahragaDietCalisthenics::class],
            ],
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T2' => 'Yes', 'T4' => 'Yes', 'T5' => 'Yes'],
                'conclusion' => 'Olahraga Diet Gym',
                'model' => OlahragaDietGym::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T2' => 'Yes', 'T4' => 'Yes', 'T6' => 'Yes'],
                'conclusion' => 'Olahraga Diet Calisthenics',
                'model' => OlahragaDietCalisthenics::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T2' => 'Yes', 'T7' => 'Yes'],
                'conclusion' => 'Makanan Harian Diet Laki-laki',
                'model' => MakananHarianDiet::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T2' => 'Yes', 'T8' => 'Yes'],
                'conclusion' => 'Informasi Kalori Diet Laki-laki',
                'model' => InformasiKaloriDiet::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T2' => 'Yes', 'T9' => 'Yes'],
                'conclusion' => 'Makronutrien Diet Laki-laki',
                'model' => MakronutrienDiet::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T2' => 'Yes', 'T10' => 'Yes'],
                'conclusion' => 'Camilan Diet',
                'model' => CamilanDiet::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T2' => 'Yes', 'T11' => 'Yes'],
                'conclusion' => 'Hidrasi Diet Laki-laki',
                'model' => HidrasiDiet::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T2' => 'Yes', 'T7' => 'Yes'],
                'conclusion' => 'Makanan Harian Diet Perempuan',
                'model' => MakananHarianDietPerempuan::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T2' => 'Yes', 'T8' => 'Yes'],
                'conclusion' => 'Informasi Kalori Diet Perempuan',
                'model' => InformasiKaloriDietPerempuan::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T2' => 'Yes', 'T9' => 'Yes'],
                'conclusion' => 'Makronutrien Diet Perempuan',
                'model' => MakronutrienDietPerempuan::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T2' => 'Yes', 'T11' => 'Yes'],
                'conclusion' => 'Hidrasi Diet Perempuan',
                'model' => HidrasiDietPerempuan::class,
            ],

            // BULKING RULES
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T3' => 'Yes', 'T4' => 'Yes'],
                'conclusion' => 'Olahraga Bulking (Gym dan Calisthenics)',
                'model' => [OlahragaBulkingGym::class, OlahragaBulkingCalisthenics::class],
            ],
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T3' => 'Yes', 'T4' => 'Yes', 'T5' => 'Yes'],
                'conclusion' => 'Olahraga Bulking Gym',
                'model' => OlahragaBulkingGym::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T3' => 'Yes', 'T4' => 'Yes', 'T6' => 'Yes'],
                'conclusion' => 'Olahraga Bulking Calisthenics',
                'model' => OlahragaBulkingCalisthenics::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T3' => 'Yes', 'T7' => 'Yes'],
                'conclusion' => 'Makanan Harian Bulking Laki-laki',
                'model' => MakananHarianBulking::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T3' => 'Yes', 'T8' => 'Yes'],
                'conclusion' => 'Informasi Kalori Bulking Laki-laki',
                'model' => InformasiKaloriBulking::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T3' => 'Yes', 'T9' => 'Yes'],
                'conclusion' => 'Makronutrien Bulking Laki-laki',
                'model' => MakronutrienBulking::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => ['laki-laki', 'perempuan'], 'T3' => 'Yes', 'T10' => 'Yes'],
                'conclusion' => 'Camilan Bulking',
                'model' => CamilanBulking::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'laki-laki', 'T3' => 'Yes', 'T11' => 'Yes'],
                'conclusion' => 'Hidrasi Bulking Laki-laki',
                'model' => HidrasiBulking::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T3' => 'Yes', 'T7' => 'Yes'],
                'conclusion' => 'Makanan Harian Bulking Perempuan',
                'model' => MakananHarianBulkingPerempuan::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T3' => 'Yes', 'T8' => 'Yes'],
                'conclusion' => 'Informasi Kalori Bulking Perempuan',
                'model' => InformasiKaloriBulkingPerempuan::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T3' => 'Yes', 'T9' => 'Yes'],
                'conclusion' => 'Makronutrien Bulking Perempuan',
                'model' => MakronutrienBulkingPerempuan::class,
            ],
            [
                'conditions' => ['jenis_kelamin' => 'perempuan', 'T3' => 'Yes', 'T11' => 'Yes'],
                'conclusion' => 'Hidrasi Bulking Perempuan',
                'model' => HidrasiBulkingPerempuan::class,
            ],
        ];
    }

    public function getRecommendation(Request $request)
    {
        $validated = $request->validate([
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'T2' => 'required|in:Yes,No',
            'T3' => 'required|in:Yes,No',
            'T4' => 'required|in:Yes,No',
            'T5' => 'required|in:Yes,No',
            'T6' => 'required|in:Yes,No',
            'T7' => 'required|in:Yes,No',
            'T8' => 'required|in:Yes,No',
            'T9' => 'required|in:Yes,No',
            'T10' => 'required|in:Yes,No',
            'T11' => 'required|in:Yes,No',
        ]);

        $this->facts = $validated;
        $this->applyForwardChaining();

        return view('recommendation.result', [
            'recommendations' => $this->recommendations,
        ]);
    }

    private function applyForwardChaining()
    {
        foreach ($this->rules as $rule) {
            if ($this->conditionsAreMet($rule['conditions'])) {
                $modelClasses = (array) $rule['model'];
                $data = [];
                foreach ($modelClasses as $modelClass) {
                    $modelData = $modelClass::all();
                    if ($modelData->isNotEmpty()) {
                        $data = array_merge($data, $modelData->toArray());
                    }
                }
                $this->recommendations[$rule['conclusion']] = !empty($data) ? $data : 'Tidak ada data untuk kategori ini.';
            }
        }
    }

    private function conditionsAreMet($conditions)
    {
        foreach ($conditions as $key => $value) {
            if (is_array($value)) {
                if (!in_array($this->facts[$key], $value)) {
                    return false;
                }
            } elseif (!isset($this->facts[$key]) || $this->facts[$key] !== $value) {
                return false;
            }
        }
        return true;
    }
}
