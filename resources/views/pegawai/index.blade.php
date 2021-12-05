@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')
@section('subtitle', 'Data Pegawai')

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table">
		<thead>
			<th scope="col">Nama</th>
			<th scope="col">Jabatan</th>
			<th scope="col">Umur</th>
			<th scope="col">Alamat</th>
			<th scope="col">Opsi</th>
        </thead>

        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
		    @endforeach
        </tbody>
	</table>

@endsection
