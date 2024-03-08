<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;
use App\Models\Matakuliah;

class NilaiMhs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'jurusan_id',
        'kota',
        'provinsi',
        'matakuliah_id',
        'foto',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'matakuliah_id');
    }
}