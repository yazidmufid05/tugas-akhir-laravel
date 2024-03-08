@extends('adminlte::page')

@section('title', 'Data Mahasantri')

@section('content_header')
    <h1>Data Mahasantri</h1>
@stop

@section('content')
@php
$ar_judul = ['No','Nama','Nim','Jurusan','Kota','Provinsi','Matakuliah','Aksi'];
$no = 1;
@endphp

<div class="card">
    <div class="card-header">
        <br>
        <h2 class="card-title">Daftar Mahasantri</h2></br></br>
        <a href="{{ route('nilai_mhs.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-fw fa-plus"></i> Tambahkan Mahasantri
        </a></br>
        <div class="float-right">
            <a href="{{ url('nilai_mhspdf') }}" class="btn btn-danger mr-2">
                <i class="fas fa-file-pdf text-white"></i> Unduh Nilai Mahasantri
            </a>
            <a class="btn btn-success" href="{{ url('nilai_mhscsv') }}" role="button">
                <i class="fas fa-file-excel"></i> Export to CSV
            </a>
        </div>
    </div> 

        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        @foreach($ar_judul as $jdl)
                            <th>{{ $jdl }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($ar_nilai_mhs as $nilai_mhs)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $nilai_mhs->nama }}</td>
                            <td>{{ $nilai_mhs->nim }}</td>
                            <td>{{ $nilai_mhs->jur}}</td>
                            <td>{{ $nilai_mhs->kota }}</td>
                            <td>{{ $nilai_mhs->provinsi }}</td>
                            <td>{{ $nilai_mhs->mat }}</td>
                            <td>
                                <a href="{{ route('nilai_mhs.show', $nilai_mhs->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>&nbsp;
                                <a href="{{ route('nilai_mhs.edit', $nilai_mhs->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                                <form action="{{ route('nilai_mhs.destroy', $nilai_mhs->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset ('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@stop

@section('js')
    <!-- jQuery -->
    <script src="{{asset ('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset ('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset ('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset ('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset ('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset ('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset ('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset ('dist/js/demo.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
@stop
