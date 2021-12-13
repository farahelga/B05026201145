@extends('layout.ceria')

@section('title', 'BERAS')

@section('isikonten')
@section('subtitle', 'Detail Beras')

	<a href="/beras"> Kembali</a>

	<br/>
	<br/>

	@foreach($beras as $b)

        <div class="form-group row">
            <label for="merk" class="col-sm-2 control-label"> Merk :</label>
            <div class="col-sm-4">
                {{ $b->merkberas }}
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-sm-2 control-label"> Stock :</label>
            <div class="col-sm-4">
                {{ $b->stockberas }}
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
            <div class="col-sm-4">
                @if ($b->tersedia === "Y") {{ "Ya" }} @else ($b->tersedia === "T") {{ "Tidak" }} @endif
            </div>
        </div>

    @endforeach

@endsection

