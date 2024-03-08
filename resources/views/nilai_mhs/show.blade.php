@extends('adminlte::page')

@section('title', 'Detail Nilai Mahasiswa')

@section('content_header')
    <h1 class="m-0">Detail Nilai Mahasiswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5>Nama:</h5>
                </div>
                <div class="col-md-9">
                    <p>{{ $nilaiMhs->nama }}</p>
                </div>

                <div class="col-md-3">
                    <h5>NIM:</h5>
                </div>
                <div class="col-md-9">
                    <p>{{ $nilaiMhs->nim }}</p>
                </div>

                <div class="col-md-3">
                    <h5>Jurusan:</h5>
                </div>
                <div class="col-md-9">
                    <p>{{ $nilaiMhs->jurusan->nama }}</p>
                </div>

                <div class="col-md-3">
                    <h5>Matakuliah:</h5>
                </div>
                <div class="col-md-9">
                    @if($nilaiMhs->matakuliah)
                        <p>{{ $nilaiMhs->matakuliah->nama }}</p>
                        <p>Nilai: {{ $nilaiMhs->matakuliah->nilai }}</p>
                    @else
                        <p>Data Matakuliah tidak ditemukan</p>
                    @endif
                </div>

                <div class="col-md-3">
                    <h5>Kota:</h5>
                </div>
                <div class="col-md-9">
                    <p>{{ $nilaiMhs->kota }}</p>
                </div>

                <div class="col-md-3">
                    <h5>Provinsi:</h5>
                </div>
                <div class="col-md-9">
                    <p>{{ $nilaiMhs->provinsi }}</p>
                </div>
            </div>
            <a href="{{ route('nilai_mhs.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@stop
