<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data dummy
        $data = [
            [
                'nama' => 'Teknik Sipil',
                'nilai' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sistem Informasi',
                'nilai' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Teknik Informatika',
                'nilai' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Manajemen',
                'nilai' => 78,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Akuntansi',
                'nilai' => 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data ke dalam tabel jurusan
        DB::table('matakuliah')->insert($data);
    }
}
