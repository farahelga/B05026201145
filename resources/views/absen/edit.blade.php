<!DOCTYPE html>
<html>
<head>
	<title>Tugas Minggu 13 Pemrograman Web</title>
</head>
<body>

	<h2>Farah Helga Az-Zahra 5026201145</h2>
	<h3>Edit Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->absen_id }}"> <br/>
		IDPegawai <input type="number" required="required" name="id_pegawai" value="{{ $a->absen_idpegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $a->absen_tanggal }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $a->absen_status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
