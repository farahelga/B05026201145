@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')

@section('subtitle', 'Data Belanja')

	<a href="/keranjangbelanja/tambah"> + Beli</a>

	<br/>
	<br/>


	<table class="table">
        <thead>
            <tr>
              <th scope="col">Kode Pembelian</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Jumlah Pembelian</th>
              <th scope="col">Harga per Item</th>
              <th scope="col">Total</th>
              <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga), }} </td>
                <td>
                    {{ number_format($k->Jumlah * $k->Harga), }}
                </td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}">Batal</a>
                </td>
            </tr>
		    @endforeach
        </tbody>
	</table>

    {{ $keranjangbelanja->links() }}

@endsection
