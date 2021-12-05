@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('subtitle', 'Edit Absen')

{{-- <h1>{{ $judul }}</h1> --}}

<a href="/absen"> Kembali</a>
<br>
<br>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $a->ID }}"> <br/>

        <div class="form-group row">
            <label for="IDPegawai" class="col-sm-2 control-label"> Pegawai :</label>
            <div class="col-sm-4">
                <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select><br>
            </div>
        </div>

        <div class="form-group row">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class='col-sm-4'>
                    <input type='text' id="dtpickerdemo" class="form-control bg-white" name="Tanggal" value="{{ $a->Tanggal }}"/>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $("#dtpickerdemo").flatpickr(
                        {
                            altInput: true,
                            altFormat: "j F Y H:i",
                            enableTime: true,
                            time_24hr: true
                        }
                    );

                    // $(document).on('change', '#dtpickerdemo', function(e) {
                    //     console.log($("#dtpickerdemo").val());
                    // })
                   //  $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>

        <div class="form-group row">
            <label for="Status" class="col-sm-2 control-label">Status :</label>
            <div class="col-sm-4">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="hadir" name="Status" value="H" @if ($a->Status === "H") checked="checked" @endif>HADIR
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="tidak" name="Status" value="T" @if ($a->Status === "T") checked="checked" @endif>TIDAK HADIR
                    </label>
                </div>
            </div>
        </div>

		{{-- Status
        <input type="radio" id="hadir" name="Status" value="H" @if ($a->Status === "H") checked="checked" @endif>
        <label for="hadir">HADIR</label>
        <input type="radio" id="tidak" name="Status" value="T" @if ($a->Status === "T") checked="checked" @endif>
        <label for="tidak">TIDAK HADIR</label><br> --}}

		<button type="submit" class="btn btn-primary">Submit</button>

	</form>
	@endforeach


@endsection



