@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('subtitle', 'Data Absen')

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table class="table">
        <thead>
            <tr>
              <th scope="col">IDPegawai</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Opsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($absen as $a)
            <tr>
                <td>{{ $a->IDPegawai }}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status }}</td>
                <td>
                    <a href="/absen/edit/{{ $a->ID }}">Edit</a>
                    |
                    <a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
                </td>
            </tr>
		    @endforeach
        </tbody>
	</table>

@endsection
