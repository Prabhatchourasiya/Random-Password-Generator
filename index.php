<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Random password generator</title>
</head>

<body>

    <?php
    if (isset($_POST["passwordlen"])) {
        $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_";
        $str1 = $str;
        for ($i = 1; $i <= 10; $i++) {
            $str1 .= $str1;
        }

        $str2 = str_shuffle($str1);
        $str2 = substr($str2, 1, $_POST["passwordlen"]);
        echo "<center><h1>Your Random Password = $str2</h1></center>";
        echo "<center><h6>$str</h6></center>";
    }
    ?>

    <form class="container" action="index.php" method="POST">
        <div class="col-auto">
            <label for="inputPasswordlength">Password Char</label>
            <input type="number" name="passwordlen" class="form-control" id="inputPasswordlength" value="10" min="10" max="1000" placeholder="Enter Password Length" /><br>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

</body>

</html>