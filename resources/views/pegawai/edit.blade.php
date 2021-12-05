@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')
@section('subtitle', 'Edit Pegawai')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label"> Nama :</label>
            <div class="col-sm-4">
                <input type="text" id="nama" class="form-control" name="nama" value="{{ $p->pegawai_nama }}" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label"> Jabatan :</label>
            <div class="col-sm-4">
                <input type="text" id="jabatan" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label"> Umur :</label>
            <div class="col-sm-4">
                <input type="number" id="umur" class="form-control" name="umur" value="{{ $p->pegawai_umur }}" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label"> Alamat :</label>
            <div class="col-sm-4">
                <textarea id="alamat" class="form-control" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" value="Simpan Data">>Submit</button>

		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
    @endforeach

@endsection

