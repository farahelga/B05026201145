@extends('layout.ceria')

@section('title', 'BERAS')

@section('isikonten')
@section('subtitle', 'Data Beras')

	<a href="/beras/tambah"> + Tambah Beras Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="/beras/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari beras berdasarkan merk .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>


    <br/>
    <br/>

	<table class="table">
		<thead>
			<th scope="col">Merk</th>
			{{-- <th scope="col">Stok</th> --}}
			<th scope="col">Tersedia</th>
            <th scope="col"></th>
        </thead>

        <tbody>
            @foreach($beras as $b)
            <tr>
                <td>{{ $b->merkberas }}</td>
                <td>@if ($b->tersedia === "Y") {{ "Ya" }} @else ($b->tersedia === "T") {{ "Tidak" }} @endif</td>
                <td>
                    <a href="/beras/view/{{ $b->kodeberas }}">View Detail</a>
                    |
                    <a href="/beras/edit/{{ $b->kodeberas }}">Edit</a>
                    |
                    <a href="/beras/hapus/{{ $b->kodeberas }}">Hapus</a>
                </td>
            </tr>
		    @endforeach
        </tbody>
	</table>

    {{ $beras->links() }}


@endsection
