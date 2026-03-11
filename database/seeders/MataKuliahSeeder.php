<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliah')->insert([
        [
            'nama_mk' => 'Pemrograman Web',
            'sks' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama_mk' => 'Basis Data',
            'sks' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
