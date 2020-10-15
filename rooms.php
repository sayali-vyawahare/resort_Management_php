<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
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

<body id="home">
    <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <div class="container">
                <a class="navbar-brand wow slideInLeft" href="home.php"><img src="assets/img/paradise.png" alt="logo"
                        width="120px" height="auto"></a>
                <button class=" navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active wow zoomInDown">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown wow zoomInDown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Rooms
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Single Rooms</a>
                                <a class="dropdown-item" href="#">Double Rooms</a>
                                <a class="dropdown-item" href="#">Semideluxe Rooms</a>
                                <a class="dropdown-item" href="#">Deluxe Rooms</a>
                            </div>
                        </li>
                        <li class="nav-item wow zoomInDown">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item wow zoomInDown">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <form class="form-inline my-1 my-lg-0">
                        <a class="nav-link wow slideInRight" href="login.php" target="_self">User Login</a>
                        <a class="nav-link wow slideInRight" href="admin/adminlogin.php" target="_self">Admin
                            Login</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <h1 class="text-center bg-dark text-white py-2"><u>Rooms</u></h1>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-6 col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a>Card title</a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="card">
                        <!-- <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                            alt="Card image cap"> -->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/img/single_room.jpg" alt="First slide"
                                        width="100%" height="300px">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/img/presidential_suite.jpg"
                                        alt="Second slide" width="100%" height="300px">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/img/double_room 1.jpg" alt="Third slide"
                                        width="100%" height="300px">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
                        <div class="card-body">
                            <h4 class="card-title"><a>Card title</a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6 col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a>Card title</a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a>Card title</a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
    </footer>
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