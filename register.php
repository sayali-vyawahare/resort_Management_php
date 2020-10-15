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
    include 'dbconnection.php';

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($dbconnect, $_POST['username']);
        $email = mysqli_real_escape_string($dbconnect, $_POST['email']);
        $password = mysqli_real_escape_string($dbconnect, $_POST['password1']);
        $cpassword = mysqli_real_escape_string($dbconnect, $_POST['password2']);

        $password1 = password_hash($password, PASSWORD_BCRYPT);
        $password2 = password_hash($cpassword, PASSWORD_BCRYPT);
        $activation_id = bin2hex(random_bytes(15));

        $equery = "SELECT * FROM loginuser WHERE email = '$email' ";
        $query = mysqli_query($dbconnect, $equery);
        $emailcount = mysqli_num_rows($query);

        if ($emailcount > 0) {
            echo "email already exists please try another email";
        } elseif ($password === $cpassword) {
            $insertquery = "INSERT INTO loginuser (username, email, password1, password2, activation_id, activation_status) VALUES ('$username','$email','$password1','$password2','$activation_id',false)";
            $iquery = mysqli_query($dbconnect, $insertquery);

            if ($iquery) {

                $subject = "Activation email";
                $body = "Hi $username, Kindly click on below link to activate your account.
                http://localhost/mangproj/emailactivation.php?activation_id=$activation_id";
                $sender = "From:vyawahare.sayali@gmail.com";

                if (mail($email, $subject, $body, $sender)) {
                    $_SESSION['msg'] = "Check your registered email ($email) to activate your account.";
                    // header('location:login.php');
    ?>
    <script>
    document.write("<h2 style='text-align: center'>Please check your registerd email and login.</h2>");
    </script>
    <?php
                } else {
                    echo "email not sent";
                }
            } else {
                ?>
    <script>
    alert("not registered");
    </script>
    <?php
            }
        } else {
            echo "password and confirm password are not matching";
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
                            <label for="username">Username: </label>
                            <input type="text" name="username" class="form-control" placeholder="Enter username"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" name="password1" class="form-control" placeholder="Enter password"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="confirm">Confirm Password: </label>
                            <input type="password" name="password2" class="form-control" placeholder="Confirm password"
                                required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success btn-css">Submit</button>
                        </div>
                        <div class="form-group">
                            <P class="text-center">Already have an account?<a href="login.php">Log In</a></P>
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