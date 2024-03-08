@extends('adminlte::page')

@section('title', 'Tambah Data Nilai Matakuliah')

@section('content_header')
    <h1>Tambah Data Nilai Matakuliah</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('matakuliah.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Matakuliah:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai:</label>
                    <input type="text" name="nilai" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@stop
