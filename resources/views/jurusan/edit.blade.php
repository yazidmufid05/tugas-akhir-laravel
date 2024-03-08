@extends('adminlte::page')

@section('title', 'Edit Data Jurusan')

@section('content_header')
    <h1>Edit Data Jurusan</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama Jurusan:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $jurusan->nama }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
