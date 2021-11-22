<!DOCTYPE html>
<html>
<head>
	<title>Tugas Minggu 13 Pemrograman Web</title>
</head>
<body>

	<h2>Farah Helga Az-Zahra 5026201145</h2>
	<h3>Data Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="id_pegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
