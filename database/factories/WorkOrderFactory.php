<?php

namespace Database\Factories;

use App\Models\WorkOrder;
use App\Models\KategoriOA;
use App\Models\Segmen;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkOrderFactory extends Factory
{
    protected $model = WorkOrder::class;

    public function definition()
    {
        // Mendapatkan semua kategori OA dan segmen yang tersedia
        $kategoriOAs = KategoriOA::pluck('id')->toArray();
        $segmens = Segmen::pluck('id')->toArray();

        return [
            'no_wo' => $this->faker->unique()->randomNumber(4),
            'alamat' => $this->faker->address,
            'kategori_oa' => 3, // atau 'kategori_oa' => 1, jika ingin memberikan nilai default
            'nama_pic' => $this->faker->name,
            'telp_pic' => $this->faker->phoneNumber,
            'layanan_mbps' => $this->faker->numberBetween(1, 100),
            'segmen' => 2,
            'sid' => $this->faker->randomNumber(8),
            'snont' => $this->faker->randomNumber(2),
            'lan' => $this->faker->randomNumber(2),
            'ip' => $this->faker->ipv4,
            'gw' => $this->faker->ipv4,
            'sm' => $this->faker->ipv4,
        ];
    }
}


