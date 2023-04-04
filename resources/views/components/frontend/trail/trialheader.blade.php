<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I'm Football Coach</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/logo/logo_football.jpg')}}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
    <link rel="stylesheet" href="{{asset('css/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('css/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">


    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />


</head>

<body>
    <!--=================================
    Header -->
    <header class="header header-sticky ">
        <nav class="navbar navbar-static-top navbar-expand-lg px-3 px-md-5">
            <div class="container-fluid position-relative px-0" style="gap:2em;">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-fluid" src="{{asset('images/logo/logo_football.jpg')}}" alt="logo">
                </a>
                <div class="search-category ms-auto">
                    <input type="text" class="form-control" placeholder="Search Courses...">
                    <button class="search-button" type="submit"> <i class="fa fa-search"></i></button>
                </div>
                <div class="navbar-collapse collapse top-course">
                    <ul class="nav navbar-nav cs-gap">
                        <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a class="nav-link" href="{{ url('/contact-us') }}">Contact us</a></li>
                        
                        
                    </ul>
                </div>
                <div class="woo-action display">
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav nav-tabs justify-content-center">
                            <a href="{{ url('/login') }}">
                                <button type="submit" class="btn btn-primary btn-flat">Start 7-day Free Trial</button>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Start Free Trial</a>
                        </li> -->
                        <!-- <li class="nav nav-tabs justify-content-center">
                            <a href="../trial/login-register.php">
                            <button type="submit" class="btn btn-primary btn-flat">Login</button>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!--<div class="woo-action display">-->
                <!--    <ul class="list-unstyled">-->
                <!--        <li class="user"><a data-bs-toggle="modal" data-bs-target="#loginModal" href="#"> <i class="fa fa-user ps-2 text-primary"></i></a></li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </nav>
    </header>
    <!--=================================
    Header -->

    