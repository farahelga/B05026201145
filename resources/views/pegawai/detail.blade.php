@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')
@section('subtitle', 'Detail Pegawai')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)


        <div class="form-group row">
            <label for="nama" class="col-sm-2 control-label"> Nama :</label>
            <div class="col-sm-4">
                {{ $p->pegawai_nama }}
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 control-label"> Jabatan :</label>
            <div class="col-sm-4">
                {{ $p->pegawai_jabatan }}
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 control-label"> Umur :</label>
            <div class="col-sm-4">
                {{ $p->pegawai_umur }}
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 control-label"> Alamat :</label>
            <div class="col-sm-4">
                {{ $p->pegawai_alamat }}
            </div>
        </div>



		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}

    @endforeach

@endsection

