<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nilai_mhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_mhs')->insert(
            [
                [
                    'nama' => 'bagas',
                    'nim' => '122222',
                    'jurusan_id' => 1,
                    'kota' => 'jombang',
                    'provinsi' => 'jombang',
                    'matakuliah_id' => 1
                ],
                [
                    'nama' => 'agus',
                    'nim' => '422222',
                    'jurusan_id' => 2,
                    'kota' => 'jakarta',
                    'provinsi' => 'jaksel',
                    'matakuliah_id' => 2
                ],
            ]);
    }
}
