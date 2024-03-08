@extends('adminlte::page')

@section('title', 'Daftar Jurusan')

@section('content_header')
    <h1>Daftar Jurusan</h1>
@stop

@section('content')
@php
$ar_judul = ['No','Nama Jurusan','Aksi'];
$no = 1;
@endphp

    <div class="card">
    <div class="card-header">
        <br>
        <h2 class="card-title">Daftar Jurusan</h2></br></br>
        <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-fw fa-plus"></i> Tambahkan Jurusan
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
                        <th>Nama Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ar_jurusan as $jurusan)
                        <tr>
                            <td>{{ $jurusan->nama }}</td>
                            <td>
                                <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                                <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
