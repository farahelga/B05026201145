<html>

<head>
    <title>Mystery Recursion</title>
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


        <h3>Input Your Number Here</h3><br>

        <div class="row justify-content-center">
            <form action="recursive" method="get">
                @csrf
                <div class="form-row">
                    <div class="col-md-5">
                        <label for="number">Number</label>
                    </div>

                    <div class=col-md-1>:</div>

                    <div class=col-md>
                        <input class="form-control" type="text" id="number" placeholder="Your number here" name="number"
                            pattern="[0-9]{1,}" title="Number Only" required>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <center><button type="submit" class="btn btn-primary" id="kirim">Kirim</button></center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
