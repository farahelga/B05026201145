@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('subtitle', 'Data Absen')

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="/absen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari pegawai berdasarkan nama .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

    <br/>
    <br/>

	<table class="table">
        <thead>
            <tr>
              <th scope="col">Nama Pegawai</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Opsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($absen as $a)
            <tr>
                <td>{{ $a->pegawai_nama }}</td>
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

    {{ $absen->links() }}

@endsection
