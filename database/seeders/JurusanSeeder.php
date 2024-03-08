<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Teknik Sipil',
            ],
            [
                'nama' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Teknik Elektro',
            ],
            [
                'nama' => 'Hukum',
            ],
            // Add more departments as needed
        ];
        DB::table('jurusan')->insert($data);
    }
}
