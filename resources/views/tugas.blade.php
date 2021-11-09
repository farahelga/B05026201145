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
    <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h3>Your Mystery Number:</h3>
            <div class="form-row">
                <div class="col-md-5">
                    <label for="number">Mystery Number</label>
                </div>

                <div class=col-md-1>=</div>

                <div class=col-md>
                    <?php
                    function mysteryrecursion($n) {
                        $result;
                        if($n <= 1) {
                            echo ": " ;
                        }

                        else {
                            $result = $n % 2;
                            // echo($result);
                           echo $result.' ' ;
                           mysteryrecursion($n / 2) ;
                           echo "$n " ;
                        }
                    }

                    // echo mysteryrecursion(5);
                    mysteryrecursion($_GET["number"]);
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
