<!DOCTYPE html>
<html>
<head>
	<title>Tugas Minggu 13 Pemrograman Web</title>
</head>
<body>

	<h2>Farah Helga Az-Zahra 5026201145</h2>
	<h3>Data Absen</h3>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->absen_idpegawai }}</td>
			<td>{{ $a->absen_tanggal }}</td>
			<td>{{ $a->absen_status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->absen_id }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->absen_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
