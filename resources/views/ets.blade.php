<html>

<head>
    <title>5026201145 UTS Kode A</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>Farah Helga Az-Zahra
            <br>(Farah)
            <br>NRP: 5026201145
        </p>


        <h3>Form Pendaftaran Kuota Internet</h3><br>

        <div class="row justify-content-center">
            <form action="google.php">
                <div class="form-row">
                    <div class="col-md-5">
                        <label for="nama">Nama Mahasiswa</label>
                    </div>

                    <div class=col-md-1>:</div>

                    <div class=col-md>
                        <input class="form-control" type="text" id="nama" placeholder="Tulis nama Anda" name="nama"
                        pattern="[A-Za-z]{2,}" title="Tolong masukkan alfabet dengan lebih dari 1 huruf" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-5">
                        <label for="nrp">NRP Mahasiswa</label>
                    </div>

                    <div class=col-md-1>:</div>

                    <div class=col-md>
                        <input class="form-control" type="text" id="nrp" placeholder="Tulis NRP Anda" name="nrp"
                        pattern="[0-9]{10,}" title="Tolong masukkan angka min. 10 digit" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-5">
                        <label for="jurusan">Jurusan</label>
                    </div>

                    <div class="col-md-1">:</div>

                    <div class=col-md>
                        <select id="jurusan" name="jurusan" required>
                            <option value="">(Pilih jurusan Anda)</option>
                            <option value="sisteminformasi">Sistem Informasi</option>
                            <option value="elektro">Elektro</option>
                            <option value="informatika">Informatika</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-5">
                        <label for="nohp">No Handphone</label>
                    </div>

                    <div class="col-md-1">:</div>

                    <div class=col-md>
                        <input class="form-control" type="text" id="nohp" placeholder="Tulis no HP Anda"
                            name="nohp" pattern="[0-9]{10,}" title="Tolong masukkan angka min. 10 digit" required>
                    </div>
                </div>

                <br>

                <div class="form-row">
                    <div class="col-md-6">
                        <center><button type="submit" class="btn btn-primary" id="kirim">Kirim</button></center>
                    </div>

                    <div class="col-md-6">
                        <center><button type="reset" class="btn btn-secondary" id="reset">Reset</button></center>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

<script>
    $("#reset").click(function() {
        $("form").reset();
    });
</script>

</html>
