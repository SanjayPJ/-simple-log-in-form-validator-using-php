<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <style>
        body {
            font-family: 'PT Sans', sans-serif;
        }

        .login-container {
            width: 30vw;
            padding: 20px;
            border: 1px solid #EBEBEB;
            border-radius: 5px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

    </style>

    <title>Simple Login form using PHP</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <h3 class="text-center"><b>LogIn</b></h3>
            <p class="text-uppercase text-muted text-center"><small>Sample login form</small></p>
            <form action="php/form_external.php" method="post">
                <input type="text" name="user" id="" class="form-control mt-3">
                <input type="password" name="password" id="" class="form-control mt-2">
                <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
            </form>
        </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
