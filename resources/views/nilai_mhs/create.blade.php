@extends('adminlte::page')

@section('title', 'Tambah Data Nilai Mahasiswa')

@section('content_header')
    <h1>Tambah Data Nilai Mahasiswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('nilai_mhs.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jurusan_id">Jurusan:</label>
                    <select name="jurusan_id" class="form-control" required>
                        @foreach ($ar_jurusan as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="matakuliah_id">Matakuliah:</label>
                    <select name="matakuliah_id" class="form-control" required>
                        @foreach ($ar_matakuliah as $matakuliah)
                            <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kota">Kota:</label>
                    <input type="text" name="kota" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi:</label>
                    <input type="text" name="provinsi" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@stop
