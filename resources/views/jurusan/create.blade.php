@extends('adminlte::page')

@section('title', 'Tambah Data Jurusan')

@section('content_header')
    <h1>Tambah Data Jurusan</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jurusan.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Jurusan:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@stop
