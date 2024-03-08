@php
$no = 1;
$ar_judul = ['No', 'Nama', 'NIM', 'Jurusan', 'Kota', 'Provinsi', 'Matakuliah', 'Aksi'];
@endphp

<h3 align="center">Daftar Nilai Mahasiswa</h3>
<a href="{{ route('nilai_mhspdf') }}" class="btn btn-info">
    <i class="fas fa-file-pdf"></i> Unduh Nilai Mahasiswa
</a>
<table border="1" width="100%" cellspacing="0" align="center">
    <thead>
        <tr bgcolor="pink">
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
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
