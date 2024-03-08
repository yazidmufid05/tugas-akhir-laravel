@extends('adminlte::page')

@section('title', 'Daftar Nilai Matakuliah')

@section('content_header')
    <h1>Daftar Nilai Matakuliah</h1>
@stop

@section('content')
@php
$ar_judul = ['No','Nama Matakuliah','Nilai','Aksi'];
$no = 1;
@endphp

    <div class="card">
    <div class="card-header">
        <br>
        <h2 class="card-title">Daftar Matakuliah</h2></br></br>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-fw fa-plus"></i> Tambahkan Matakuliah
        </a></br>
    </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Matakuliah</th>
                        <th>Nilai</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ar_matakuliah as $matakuliah)
                        <tr>
                            <td>{{ $matakuliah->nama }}</td>
                            <td>{{ $matakuliah->nilai }}</td>
                            <td>
                            <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                            <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
