@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')
@section('subtitle', 'Data Absen')

<a href="/absen"> Kembali</a>
<br>
<br>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="IDPegawai" class="col-sm-2 control-label"> Pegawai :</label>
            <div class="col-sm-4">
                <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select><br>
            </div>
        </div>

		<div class="form-group row">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class="col-sm-4">
                <input type='text' id="dtpickerdemo" class="form-control bg-white" name="Tanggal" />
            </div>

        </div>
            <script type="text/javascript">
                $(function () {
                    $("#dtpickerdemo").flatpickr(
                        {
                            defaultDate: 'today',
                            altInput: true,
                            altFormat: "j F Y H:i",
                            enableTime: true,
                            time_24hr: true
                        }
                    );
                    // $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>

        <div class="form-group row">
            <label for="Status" class="col-sm-2 control-label">Status :</label>
            <div class="col-sm-4">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="hadir" name="Status" value="H">HADIR
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="tidak" name="Status" value="T" checked="checked">TIDAK HADIR
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
