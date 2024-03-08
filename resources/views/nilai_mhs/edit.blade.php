@extends('adminlte::page')

@section('title', 'Edit Nilai Mahasiswa')

@section('content_header')
    <h1>Edit Nilai Mahasiswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('nilai_mhs.update', $nilaiMhs->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $nilaiMhs->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" class="form-control" value="{{ $nilaiMhs->nim }}" required>
                </div>

                <div class="form-group">
                    <label for="jurusan_id">Jurusan:</label>
                    <select name="jurusan_id" class="form-control" required>
                        @foreach($ar_jurusan as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ $nilaiMhs->jurusan_id == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="kota">Kota:</label>
                    <input type="text" name="kota" class="form-control" value="{{ $nilaiMhs->kota }}" required>
                </div>

                <div class="form-group">
                    <label for="provinsi">Provinsi:</label>
                    <input type="text" name="provinsi" class="form-control" value="{{ $nilaiMhs->provinsi }}" required>
                </div>

                <div class="form-group">
                    <label for="matakuliah_id">Matakuliah:</label>
                    <select name="matakuliah_id" class="form-control" required>
                        @foreach($ar_matakuliah as $matakuliah)
                            <option value="{{ $matakuliah->id }}" {{ $nilaiMhs->matakuliah_id == $matakuliah->id ? 'selected' : '' }}>
                                {{ $matakuliah->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
