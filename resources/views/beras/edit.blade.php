@extends('layout.ceria')

@section('title', 'BERAS')

@section('isikonten')
@section('subtitle', 'Edit Beras')

	<a href="/beras"> Kembali</a>

	<br/>
	<br/>

	@foreach($beras as $b)
	<form action="/beras/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodeberas }}"> <br/>

        <div class="form-group row">
            <label for="merk" class="col-sm-2 control-label"> Merk :</label>
            <div class="col-sm-4">
                <input type="text" id="merk" class="form-control" name="merk" value="{{ $b->merkberas }}" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-sm-2 control-label"> Stock :</label>
            <div class="col-sm-4">
                <input type="number" id="stock" class="form-control" name="stock" value="{{ $b->stockberas }}" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
            <div class="col-sm-4">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="ya" name="tersedia" value="Y" @if ($b->tersedia === "Y") checked="checked" @endif>YA
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="tidak" name="tersedia" value="T" @if ($b->tersedia === "T") checked="checked" @endif>TIDAK
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>

	</form>
    @endforeach

@endsection

