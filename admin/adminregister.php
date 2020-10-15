<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="login-body">
    <?php
    include '../dbconnection.php';

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($dbconnect, $_POST['email']);
        $pass = mysqli_real_escape_string($dbconnect, $_POST['password']);

        $password = password_hash($pass, PASSWORD_BCRYPT);

        $equery = "SELECT * FROM loginadmin WHERE email = '$email' ";
        $query = mysqli_query($dbconnect, $equery);
        $emailcount = mysqli_num_rows($query);

        if ($emailcount > 0) {
            echo "email already exists please try another email";
        } else {
            $insertquery = "INSERT INTO loginadmin (email, password) VALUES ('$email','$password')";
            $iquery = mysqli_query($dbconnect, $insertquery);
            header('location:adminlogin.php');
        }
    }
    ?>
    <div class="container sign-up wow slideInDown">
        <div class="row text-light row-css">
            <div class="col-md">
                <div class="form-group">
                    <h3>Sign up Here</h3>
                    <form name="signUpForm" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password"
                                required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success btn-css">Submit</button>
                        </div>
                        <div class="form-group">
                            <P class="text-center">Already have an account?<a href="adminlogin.php">Log In</a></P>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous"></script>
    <script src="js/home.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>