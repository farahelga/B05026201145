@extends('layout.ceria')

@section('title', 'BERAS')

@section('isikonten')
@section('subtitle', 'Data Beras')

	<a href="/beras"> Kembali</a>

	<br/>
	<br/>

	<form action="/beras/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="merk" class="col-sm-2 control-label"> Merk :</label>
            <div class="col-sm-4">
                <input type="text" id="merk" class="form-control" name="merk" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-sm-2 control-label"> Stock :</label>
            <div class="col-sm-4">
                <input type="number" id="stock" class="form-control" name="stock" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
            <div class="col-sm-4">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="ya" name="tersedia" value="Y">YA
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="tidak" name="tersedia" value="T" checked="checked">TIDAK
                    </label>
                </div>
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
