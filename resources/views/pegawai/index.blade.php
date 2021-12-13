@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')
@section('subtitle', 'Data Pegawai')

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>


    <br/>
    <br/>

	<table class="table">
		<thead>
			<th scope="col">Nama</th>
			{{-- <th scope="col">Jabatan</th>
			<th scope="col">Umur</th> --}}
			<th scope="col">Alamat</th>
			<th scope="col">Opsi</th>
        </thead>

        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                {{-- <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td> --}}
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
		    @endforeach
        </tbody>
	</table>

    {{ $pegawai->links() }}


@endsection
