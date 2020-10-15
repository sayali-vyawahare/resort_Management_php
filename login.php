<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        $email_entered = $_POST['email'];
        $password_entered = $_POST['password'];

        $email_search = "select * from loginuser where email = '$email_entered' and activation_status=true";
        $result = mysqli_query($dbconnect, $email_search);
        $ecount = mysqli_num_rows($result);
        if ($ecount) {
            $email_pass = mysqli_fetch_assoc($result);
            $db_pass = $email_pass['password1'];
            $_SESSION['username'] = $email_pass['username'];
            $pass_decode = password_verify($password_entered, $db_pass);
            if ($pass_decode) {
                echo "login successful.";
    ?>
    <script>
    location.replace("home.php");
    </script>
    <?php
            } else {
                echo "password invalid";
            }
        } else {
            echo "Invalid email";
        }
    }
    ?>
    <div class="container sign-up wow slideInDown">
        <div class="row text-light row-css">
            <div class="col-md">
                <h3>Login Here</h3>
                <div>
                    <p class="bg-warning text-dark px-2">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                        }
                        // } else {
                        //     echo $_SESSION['msg'] = "Logged out successfuly. Please login again.";
                        // }
                        ?></p>
                </div>
                <form name="loginForm" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
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
                        <button type="submit" name="submit" class="btn btn-success btn-css">Login</button>
                    </div>
                    <p class="text-center">Not have an account? <a href="register.php">SignUp Here</a></p>
                </form>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
                    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
                    crossorigin="anonymous"></script>
                <script src="js/home.js"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
                </script>
</body>

</html>