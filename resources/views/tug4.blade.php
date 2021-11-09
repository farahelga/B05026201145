<!DOCTYPE html>
<html>
<head> <title>List Belanja</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
            $("p").append(" <b>Appended text</b>.");
            });

            $("#btn2").click(function(){
                $("ol").append("<li>Minyak Goreng");
            });

            $("#btn3").click(function(){
                $("ol").append("<li>Gas Elpiji");
            });

            $("#btn4").click(function(){
                $("ol").append("<li>Beras Putih");
            });

            $("#btn5").click(function(){
                $("ol").append("<li>Telur Ayam");
            });

            $("#btn6").click(function(){
                $("ol").append("<li>Susu UHT");
            });

            $("#btn7").click(function(){
                $("ol").append("<li>Mie Instan");
            });

            $("#btn8").click(function(){
                $("ol").append("<li>Sabun Mandi Padat");
            });

            $("#btn9").click(function(){
                $("ol").append("<li>Sabun Mandi Cair");
            });

            $("#btn10").click(function(){
                $("ol").append("<li>Sikat Gigi");
            });

            $("#btn11").click(function(){
                $("ol").append("<li>Pasta Gigi");
            });

            $("#btn12").click(function(){
                $("ol").append("<li>Shampoo");
            });

            $("#btn13").click(function(){
                $("ol").append("<li>Obat Kumur");
            });

            $("#btn14").click(function(){
                $("ol").append("<li>Keripik Kentang");
            });

            $("#btn15").click(function(){
                $("ol").append("<li>Keripik Singkong");
            });

            $("#btn16").click(function(){
                $("ol").append("<li>Wafer Roll");
            });

            $("#btn17").click(function(){
                $("ol").append("<li>Biskuit");
            });

            $("#btn18").click(function(){
                $("ol").append("<li>Cracker");
            });

            $("#btn13").click(function(){
                $("ol").append("<li>Permen Coklat");
            });
        });

    </script>
    <style>
        .margin{
          margin-top: 50px;
          margin-bottom: 50px;
        }

        body{
            background-color: mintcream;
        }
    </style>
</head>

<div class="container">
<body>
    <h1>Selamat Datang!</h1>
    <p>Untuk membuat list barang belanjaan, kamu dapat klik tombol sesuai barang yang ingin kamu catat.</p>

    <hr>

    <p>Daftar Belanjaku:</p>
    <ol>
        <li>Minyak Goreng</li>
        <li>Sabun Mandi Cair</li>
        <li>Keripik Kentang</li>
    </ol>

    <hr>

    <h3>Pilih Barang-Barangmu</h3>
    <h5>Bahan Makanan Pokok</h5>
    <center><div class="row">
        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn2">Minyak Goreng</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn3">Gas Elpiji</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn4">Beras Putih</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn5">Telur Ayam</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn6">Susu UHT</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn7">Mie Instan</button>
        </div>
    </div></center>

    <p class="margin"></p>

    <h5>Alat Mandi</h5>
    <center><div class="row">
        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn8">Sabun Mandi Padat</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn9">Sabun Mandi Cair</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn10">Sikat Gigi</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn11">Pasta Gigi</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn12">Shampoo</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn13">Obat Kumur</button>
        </div>
    </div></center>

    <p class="margin"></p>

    <h5>Makanan Ringan</h5>
    <center><div class="row">
        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn14">Keripik Kentang</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn15">Keripik Singkong</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn16">Wafer Roll</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn17">Biskuit</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn18">Cracker</button>
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-primary" id="btn19">Permen Coklat</button>
        </div>

        <p class="margin"></p>
    </div></center>

</body>
</div>
</html>
