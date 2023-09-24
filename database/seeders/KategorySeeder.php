<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategorys')->insert([
            [
                'name' => 'ASTINET',
            ],
            [
                'name' => 'VPN IP',
            ],
            [
                'name' => 'METRO',
            ],
            [
                'name' => 'IPBX / SIPTRUNK',
            ],
            [
                'name' => 'IP TRANSIT',
            ],
            [
                'name' => 'WMS DATIN',
            ],
            [
                'name' => 'WMS LITE',
            ],
            [
                'name' => 'HSI / INDIBIZ',
            ],
        ]);

    }
}
