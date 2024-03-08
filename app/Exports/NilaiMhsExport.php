<?php

namespace App\Exports;

use App\Models\NilaiMhs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class NilaiMhsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiMhs::all();
        $ar_nilai_mhs = DB::table('nilai_mhs')
            ->join('jurusan', 'jurusan.id', '=', 'nilai_mhs.jurusan_id')
            ->join('matakuliah', 'matakuliah.id', '=', 'nilai_mhs.matakuliah_id')
            ->select('nilai_mhs.*', 'jurusan.nama AS jur', 'matakuliah.nama AS mat')
            ->get();
    }
    public function headings(): array
    {
        return [
            'Nama',
            'NIM',
            'Jurusan',
            'Kota',
            'Provinsi',
            'Matakuliah',
        ];
    }
}
