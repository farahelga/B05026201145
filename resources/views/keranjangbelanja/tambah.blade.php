@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')
@section('subtitle', 'Data Belanja')

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 control-label"> Kode Barang :</label>
            <div class="col-sm-4">
                <input type="text" id="KodeBarang" class="form-control" name="KodeBarang" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 control-label"> Jumlah :</label>
            <div class="col-sm-4">
                <input type="text" id="Jumlah" class="form-control" name="Jumlah" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="Harga" class="col-sm-2 control-label"> Harga :</label>
            <div class="col-sm-4">
                <input type="text" id="Harga" class="form-control" name="Harga" required="required">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
	</form>

@endsection
