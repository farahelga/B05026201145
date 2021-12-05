@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')
@section('subtitle', 'Data Pegawai')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label"> Nama :</label>
            <div class="col-sm-4">
                <input type="text" id="nama" class="form-control" name="nama" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label"> Jabatan :</label>
            <div class="col-sm-4">
                <input type="text" id="jabatan" class="form-control" name="jabatan" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label"> Umur :</label>
            <div class="col-sm-4">
                <input type="number" id="umur" class="form-control" name="umur" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label"> Alamat :</label>
            <div class="col-sm-4">
                <textarea id="alamat" class="form-control" name="alamat" required="required"></textarea>
            </div>
        </div>

		{{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}

        <button type="submit" class="btn btn-primary" value="Simpan Data">>Submit</button>
	</form>

@endsection
