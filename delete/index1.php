<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Paradise Resort</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <!-- Navbar starts here -->
        <nav class="navbar navbar-expand-sm bg-white fixed-top container">
            <!-- logo -->
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" width="120px">
                <!-- <h1 id="logo">The Paradise</h1> -->
            </a>
            <!-- collapsible button -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links starts here -->
            <div class="collapse navbar-collapse " id="collapsibleNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <!-- dropdown -->
                    <li class="dropdown nav-item">
                        <button type="button" class="btn dropdown-toggle text-info" data-toggle="dropdown">
                            <a class="nav-link" href="#">Rooms</a>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">Single Rooms</a></li>
                            <li class="dropdown-item"><a href="#">Double Rooms</a></li>
                            <li class="dropdown-item"><a href="#">Semideluxe Rooms</a></li>
                            <li class="dropdown-item"><a href="#">Deluxe Rooms</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Spa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" name="userLogin">
                            <a class="nav-link" href="login.php" target="_self">User Login</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn" name="adminLogin">
                            <a class="nav-link" href="admin.php" target="_self">Admin Login</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- banner 1 -->
    <section>
        <img src="../img/resort1.jpg" width="100%" height="750px">
    </section>
    <h1 class="centered display-3 text-center">Welcome to your residence.</h1>
    <div class="p-5 text-uppercase text-center">
        <h2>Welcome to our resort!</h2>
        <p>A whole world on a single island.</p>
    </div>
    <section></section>
    <!-- facilities div -->
    <div class=" class= pt-2 text-uppercase text-center ">
        <h2 class="mt-2"><u>Featured facilities</u></h2>
        <div class="row bg-dark m-0">
            <div class="col-md-3 bg-white p-3">
                <i class="fa fa-wifi fa-2x" aria-hidden="true"></i>
                <h4>Free Wifi</h4>
            </div>
            <div class="col-md-3 bg-white p-3 ">
                <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                <h4>Restaurant</h4>
            </div>
            <div class="col-md-3 bg-white p-3 ">
                <i class="fa fa-wheelchair-alt fa-2x" aria-hidden="true"></i>
                <h4>Gym</h4>
            </div>
            <div class="col-md-3 bg-white p-3">
                <i class="fa fa-cab fa-2x" aria-hidden="true"></i>
                <h4>Pick Up</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/yTCI6yV13kU" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <footer>
        <p></p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>

</body>

</html>