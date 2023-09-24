<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('segmens')->insert([
            [
                'name' => 'DCS',
            ],
            [
                'name' => 'DGS',
            ],
            [
                'name' => 'DES',
            ],
            [
                'name' => 'DBS',
            ],
        ]);
    }
}
