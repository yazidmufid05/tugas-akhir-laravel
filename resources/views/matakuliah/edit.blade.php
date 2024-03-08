@extends('adminlte::page')

@section('title', 'Edit Matakuliah')

@section('content_header')
    <h1>Edit Matakuliah</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama Matakuliah:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $matakuliah->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="nilai">Nilai:</label>
                    <input type="text" name="nilai" class="form-control" value="{{ $matakuliah->nilai }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
