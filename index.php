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
    <?php include 'header.php' ?>

    <section class="container-fluid">

        <div id="carouselExampleCaptions" class=" carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item w3-animate-opacity active">
                    <img src="assets/img/resort1.jpg" class="d-block w-100" height="750px" alt="resort_img1">
                    <div class="carousel-caption caro-capt d-none d-md-block">
                        <h3>Welcome to Paradise</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item w3-animate-opacity">
                    <img src="assets/img/resort2.jpg" class="d-block w-100" height="750px" alt="resort_img2">
                    <div class="carousel-caption caro-capt d-none d-md-block">
                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item w3-animate-opacity">
                    <img src="assets/img/resort3.jpg" class="d-block w-100" height="750px" alt="resort_img3">
                    <div class="carousel-caption caro-capt d-none d-md-block">
                        <h3>Third slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item w3-animate-opacity">
                    <img src="assets/img/resort4.jpg" class="d-block w-100" height="750px" alt="resort_img4">
                    <div class="carousel-caption caro-capt d-none d-md-block">
                        <h3>Fourth slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class=" class= py-4 text-uppercase text-center wow bounceIn slow">
        <h2 class="mt-2"><u>Rooms</u></h2>
    </div>
    <section>
        <nav class="container">
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
        <h2 class="mt-2 wow bounceIn slow"><u>Featured facilities</u></h2>
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
    <!-- video -->
    <div class="container">
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
        </div>
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