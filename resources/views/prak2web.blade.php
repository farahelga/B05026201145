<html>

<head>
    <title>Praktikum 2 5026201145</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Registration Form</h2><br>
        <form action="google.php">
            <div class="form-row">
                <div class="col-1">
                    <label for="userid">User id:</label>
                </div>
                <div class="col">
                    <input class="form-control" type="text" id="userid" placeholder="Enter User id" name="userid"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="password">Password:</label>
                </div>
                <div class="col">
                    <input class="form-control" type="password" id="password" placeholder="Enter Password"
                        name="password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="name">Name:</label>
                </div>
                <div class="col">
                    <input class="form-control" type="text" id="name" placeholder="Enter Name" name="name"
                        pattern="[A-Za-z]{1,}" title="Alphabet only" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="address">Address:</label>
                </div>
                <div class="col">
                    <input class="form-control" type="text" id="address" placeholder="Enter Address" name="address"
                        style="width:300px">
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="country">Country:</label>
                </div>
                <div class="col">
                    <select id="country" name="country" required>
                        <option value="">(Please select a country)</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Thailand">Thailand</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="zipcode">ZIP Code:</label>
                </div>
                <div class="col">
                    <input class="form-control" type="text" id="zipcode" placeholder="Enter ZIP Code" name="zipcode"
                        pattern="[0-9]{1,}" title="Numeric only" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="email">Email:</label>
                </div>
                <div class="col">
                    <input class="form-control" type="email" id="email" placeholder="Enter Email" name="email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email :)" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="sex">Sex:</label>
                </div>
                <div class="col">
                    <input class="" type="radio" id="male" name="sex" value="male" required>
                    <label for="male">Male</label>
                    <input class="" type="radio" id="female" name="sex" value="female" required>
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="language">Language:</label>
                </div>
                <div class="col">
                    <input class="" type="checkbox" id="english" name="language" value="english">
                    <label for="english">English</label>
                    <input class="" type="checkbox" id="nonenglish" name="language" value="nonenglish">
                    <label for="nonenglish">Non English</label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">
                    <label for="about">About:</label>
                </div>
                <div class="col">
                    <textarea id="about" name="about" style=""></textarea><br>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-3">
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </div>
            </div>
        </form>
    </div>
</body>

<script>
    $("button").click(function () {
        let userid = $("#userid").val();
        let password = $("#password").val();
        let checked = $("input[type=checkbox]:checked").length;

        if (userid.length < 5 || userid.length > 12) {
            alert("Please input 5 to 12 characters in user id")
        }


        if (password.length < 7 || password.length > 12) {
            alert("Please input 7 to 12 characters in password")
        }


        if (!checked) {
            alert("You must check at least check one checkbox.");
            return false;
        }
    });
</script>

</html>
