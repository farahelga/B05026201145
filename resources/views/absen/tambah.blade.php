@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')
@section('subtitle', 'Data Absen')

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>

		<div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="Tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>


		Status <input type="radio" id="hadir" name="Status" value="H">
        <label for="hadir">HADIR</label><br>
        <input type="radio" id="tidak" name="Status" value="T" checked="checked">
        <label for="tidak">TIDAK HADIR</label><br>

		<input type="submit" value="Simpan Data">
	</form>
@endsection
