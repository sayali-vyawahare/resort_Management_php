<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="css/test1.css">
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

<body>
    <?php include 'header.php' ?>

    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            <li data-target="#carousel-example-1z" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/re1.jpg" alt="First slide" height="650px">
                <div class="carousel-caption caro-capt d-none d-md-block wow slideInUp">
                    <h3>Welcome to Paradise</h3>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/re2.jpg" alt="Second slide" height="650px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/re3.jpg" alt="Third slide" height="650px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/re4.jpg" alt="Third slide" height="650px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class=" class= py-4 text-uppercase text-center ">
        <h2 class="mt-2 wow zoomIn slow"><u>Rooms</u></h2>
    </div>
    <section>
        <nav class="container-fluid h-100">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-single-tab" data-toggle="tab" href="#nav-single" role="tab"
                    aria-controls="nav-single" aria-selected="true">Single Room</a>
                <a class="nav-item nav-link" id="nav-double-tab" data-toggle="tab" href="#nav-double" role="tab"
                    aria-controls="nav-double" aria-selected="false">Double Room</a>
                <a class="nav-item nav-link" id="nav-semideluxe-tab" data-toggle="tab" href="#nav-semideluxe" role="tab"
                    aria-controls="nav-semideluxe" aria-selected="false">Semideluxe Room</a>
                <a class="nav-item nav-link" id="nav-deluxe-tab" data-toggle="tab" href="#nav-deluxe" role="tab"
                    aria-controls="nav-deluxe" aria-selected="true">Deluxe Room</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-single" role="tabpanel" aria-labelledby="nav-single-tab">
                <div class="container my-2 py-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/presidential_suite.jpg" width="100%">
                        </div>
                        <div class="col-8">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum omnis incidunt aliquid
                                repudiandae a. Omnis tempore, quidem velit quae eaque blanditiis asperiores impedit,
                                nobis veritatis voluptatem assumenda cupiditate, totam cum!
                            </p>
                            <a class="btn btn-info" href="rooms.php">Check more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-double" role="tabpanel" aria-labelledby="nav-double-tab">
                <div class="container my-2 py-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/presidential_suite.jpg" width="100%">
                        </div>
                        <div class="col-8">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum omnis incidunt aliquid
                                repudiandae a. Omnis tempore, quidem velit quae eaque blanditiis asperiores impedit,
                                nobis veritatis voluptatem assumenda cupiditate, totam cum!</p>
                            <a class="btn btn-info" href="rooms.php">Check more</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-semideluxe" role="tabpanel" aria-labelledby="nav-semideluxe-tab">
                <div class="container my-2 py-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/presidential_suite.jpg" width="100%">
                        </div>
                        <div class="col-8">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum omnis incidunt aliquid
                                repudiandae a. Omnis tempore, quidem velit quae eaque blanditiis asperiores impedit,
                                nobis veritatis voluptatem assumenda cupiditate, totam cum!</p>
                            <a class="btn btn-info" href="rooms.php">Check more</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-deluxe" role="tabpanel" aria-labelledby="nav-deluxe-tab">
                <div class="container my-2 py-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/presidential_suite.jpg" width="100%">
                        </div>
                        <div class="col-8">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum omnis incidunt aliquid
                                repudiandae a. Omnis tempore, quidem velit quae eaque blanditiis asperiores impedit,
                                nobis veritatis voluptatem assumenda cupiditate, totam cum!</p>
                            <a class="btn btn-info" href="rooms.php">Check more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- facilities -->
    <div class=" class= py-2 text-uppercase text-center">
        <h2 class="mt-2 wow zoomIn slow"><u>Featured facilities</u></h2>
        <div class="row bg-dark m-0">
            <div class="col-md-3 bg-white p-3 wow slideInLeft  slow">
                <i class="fa fa-wifi fa-2x" aria-hidden="true"></i>
                <h4>Free Wifi</h4>
            </div>
            <div class="col-md-3 bg-white p-3 wow slideInRight  slow">
                <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                <h4>Restaurant</h4>
            </div>
            <div class="col-md-3 bg-white p-3 wow slideInLeft  slow">
                <i class="fa fa-wheelchair-alt fa-2x" aria-hidden="true"></i>
                <h4>Gym</h4>
            </div>
            <div class="col-md-3 bg-white p-3 wow slideInRight  slow">
                <i class="fa fa-cab fa-2x" aria-hidden="true"></i>
                <h4>Pick Up</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Card deck -->
        <div class="card-deck">

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/pla2.jpg" alt="First slide" height="250px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/pla7.jpg" alt="Second slide" height="250px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/pla4.jpg" alt="Third slide" height="250px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Lorem Ipsum</h4>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-blue btn-md">Read more</button>

                </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/fd1.jpg" alt="First slide" height="250px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/fd2.jpg" alt="Second slide" height="250px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/fd3.jpg" alt="Third slide" height="250px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Lorem Ipsum</h4>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-blue btn-md">Read more</button>

                </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/pla1.jpg" alt="First slide" height="250px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/pla6.jpg" alt="Second slide" height="250px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/pla3.jpg" alt="Third slide" height="250px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls3" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls3" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Lorem Ipsum</h4>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-blue btn-md">Read more</button>

                </div>

            </div>
            <!-- Card -->

        </div>
        <!-- Card deck -->
    </div>
    <!-- video -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-6 bg-light wow">
                <iframe class="pt-2" width="100%" height="500px" src="https://www.youtube.com/embed/yTCI6yV13kU"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-6 bg-light">
                <h3>Lorem ipsum</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti pariatur fugiat, consectetur
                    quia accusantium reprehenderit harum, deserunt, voluptatum consequuntur optio autem repudiandae
                    consequatur possimus corporis nostrum alias vitae est iusto?
                </p>
            </div>
        </div> -->

    <footer>
        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
        <p class="text-center">&copy;The paradise 2020</p>
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