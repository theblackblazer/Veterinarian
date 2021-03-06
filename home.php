<?php
session_start(); 
if(!isset($_SESSION['user'])) 
{ 
    
    $_SESSION['loggedin']=false;
} 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


  <title>Veterinary Care - Home</title>




    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home.php">Veterinarian</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.php">About Cats</a>
                        <a class="dropdown-item" href="blog-home-2.php">About Dogs</a>
                        <a class="dropdown-item" href="blog-post.php">General Information</a>
                    </div>
                </li>
                <li class="nav-item dropdown" id="user_area">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome User
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="appoint.php">Book an appointment</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://hampdenvet.com/wp-content/uploads/revslider/veterinary-slider/vet-bg-1-min.jpg')">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://hampdenvet.com/wp-content/uploads/revslider/veterinary-slider/vet-bg-2-min.jpg')">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://hampdenvet.com/wp-content/uploads/revslider/veterinary-slider/vet-bg-3-min.jpg')">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <h1 class="my-4">We Care For Your Pet.</h1>

    <!-- Marketing Icons Section -->

    <!-- Portfolio Section -->


    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/Doctor.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Qualfied Doctors</a>
                    </h4>
                    <p class="card-text">We have all the Qualified Veterinarians ready all the time for your help.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/Emergency.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Emergency Care</a>
                    </h4>
                    <p class="card-text">We provide all kinds of Emergency Care to help your pet survive and live a longer life.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/24x7.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">24 Hours Service</a>
                    </h4>
                    <p class="card-text">We provide all the services 24 Hours and at every time Doctors are available for your support.</p>
                </div>
            </div>
        </div>

        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Veterinarian Services</h2>

                <ul>
                    <li>
                        Indvidualized Veterinary Care to patients in a friendly, caring and compassionate atmosphere.
                    </li>
                    <li>Time is devoted to creating and nurturing relationships with you and your pet.</li>
                    <li>We offer a wide array of veterinary services including veterinary dentistry, dermatology, radiology, soft tissue surgery, gastroenterology, pain management and senior care.</li>
                    <br>

                    <p>Veterinary Care is a place where both patients and their people can feel at home; where time is devoted to creating and nurturing relationships with you and your pet. Doctor's style of veterinary medicine is based upon open communication, education, and active pet parent involvement. She and her team wants to help you and your pet live the best possible life together by providing quality care for all stages of your pet’s journey</p>
                </ul>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/Doctor-1.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-light">
        <div class="container">
            <p class="m-0 text-center text-black">Copyright &copy; Veterinary Care 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
