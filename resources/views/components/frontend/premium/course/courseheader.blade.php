<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/guruma/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 06:07:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Guruma - Online Course & Education HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
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

    <!-- Template Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>

    <!--=================================
    Header -->
    <header class="header header-sticky ">
        <div class="conatiner px-3 px-md-5 top-header">
             <nav class="navbar navbar-light ">
             <ul class="nav cs-gap">
                       <li class="cart dropdown">
                              <a href="mailto:info@iamfootballcoach.in">
                               info@iamfootballcoach.in
                               </a>
                             </li>
                             <li class="cart dropdown">
                               <a href="tel:+91 81691 00364">
                                  +91 81691 00364
                                </a>
                         </li>
                         </ul>
                          <div class="woo-action">
                        <ul class="list-un">
                            <li class="cart dropdown">
                                <a href="{{ url('/book') }}" target="_blank">
                                    <i class="fas fa-book ico"></i>
                                    <span class="cart-iconn1">Books</span>
                                </a>
                                 <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button> 
                            </li>
                             <li class="cart dropdown">
                                <a href="http://">
                                    <i class="fas fa-graduation-cap ico"></i>
                                    <span class="cart-iconn1">Training</span>
                                </a>
                            </li>
                        <!--    <li class="cart dropdown">-->
                        <!--    <a href="{{ url('/course-index') }}" target="_blank">-->
                        <!--            <i class="fa fa-bullhorn ico"></i>-->
                        <!--            <span class="cart-iconn1">Courses</span>-->
                        <!--        </a>    -->
                        <!--</li>-->
                        </ul>
                    </div>
                     
       </nav>
             </div>
            <!--<div class="row top">-->
          
            <!--    <div class="col-sm-6 mobile-hide">-->
            <!--    <ul class="nav cs-gap">-->
	           <!--     <li class="cart dropdown">-->
	           <!--         <a href="http://">-->
	           <!--            info@iamfootballcoach.in-->
	           <!--         </a>-->
	           <!--      </li>-->
	           <!--      <li class="cart dropdown">-->
	           <!--         <a href="http://">-->
	           <!--            +000 0000000-->
	           <!--         </a>-->
	           <!--      </li>-->
            <!--    </div>-->
            <!--    <div class="col-sm-6">-->
            <!--        <div class="woo-action">-->
            <!--            <ul class="list-un">-->
            <!--                <li class="cart dropdown">-->
            <!--                    <a href="{{ url('/book') }}" target="_blank">-->
            <!--                        <i class="fas fa-book ico"></i>-->
            <!--                        <span class="cart-iconn1">Books</span>-->
            <!--                    </a>-->
            <!--                </li>-->
            <!--                <li class="cart dropdown">-->
            <!--                    <a href="{{url('/coach-index')}}"  target="_blank">-->
            <!--                        <i class="fas fa-graduation-cap ico"></i>-->
            <!--                        <span class="cart-iconn1">Coach</span>-->
            <!--                    </a>-->
            <!--                </li>-->
                            <!-- <li class="cart dropdown">
                            <a href="#">
                                    <i class="fa fa-bullhorn ico"></i>
                                    <span class="cart-iconn1">Courses</span>
                                </a>    
                        </li> -->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
               
        <!--    </div>-->
       
        <nav class="navbar navbar-static-top navbar-expand-lg px-3 px-md-5">
            <div class="container-fluid position-relative px-0">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                <a class="navbar-brand" href="{{url('/course-index')}}">
                    <img class="img-fluid" src="{{asset('images/logo/logo_football.jpg')}}" alt="logo">
                </a>

                <div class="navbar-collapse collapse top-course">
                    <ul class="nav navbar-nav cs-gap">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/course-index') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/course-shop') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/about-us') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                        </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/contact-us') }}">Contact us</a>
                        </li>
                       @if(session("USER_POSITION") == "Coach")
                         <li><a class="nav-link" href="{{ url('/coach/coach-dashboard') }}">Dashborad</a></li>
                         @endif
                    </ul>
                </div>
                <div class="search-category ms-auto">
                    <input type="text" class="form-control" placeholder="Search Courses...">
                    <button class="search-button" type="submit"> <i class="fa fa-search"></i></button>
                </div>
                <div class="woo-action">
                    <ul class="list-unstyled">
                        <!--<li class="user"><a href="{{url('/logout')}}"> <a data-bs-toggle="modal" data-bs-target="#loginModal" href="#"><i class="fa fa-user ps-2 text-primary"></i></a></li>-->
                        <li class="cart dropdown">
                             <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user ps-2 text-primary"></i></button> 
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <ul class="cart-list  ">
                                    <li class="d-flex">
                                      <div class="cart-info">
                                            <a href="{{url('/logout')}}"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i> Log Out</a>
                                        </div>
                                     </li>
                               </ul>
                             </div>
                        </li>
                    </ul>
                </div>
                <!--<div class="woo-action">-->
                <!--    <ul class="list-unstyled gap">-->
                <!--        <li class="user"><a data-bs-toggle="modal" data-bs-target="#loginModal" href="#"><i class="fa fa-user ps-2 text-primary"></i></a></li>-->
                <!--        <li class="cart dropdown">-->
                <!--            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="cart-icon"><i class="fas fa-shopping-cart"></i></span></button>-->
                <!--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">-->
                <!--                <ul class="cart-list ps-0">-->
                <!--                    <li class="d-flex">-->
                <!--                        <a class="remove-item" href="#"><i class="fas fa-times text-danger"></i></a>-->
                <!--                        <img class="img-fluid me-3" src="images/shop/01.jpg" alt="">-->
                <!--                        <div class="cart-info">-->
                <!--                            <a href="#">Landscape Visitors Book - 122 Pages, A Design, A4</a>-->
                <!--                            <span class="d-block">1 x 12.49</span>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                    <li class="d-flex">-->
                <!--                        <a class="remove-item" href="#"><i class="fas fa-times text-danger"></i></a>-->
                <!--                        <img class="img-fluid me-3" src="images/shop/02.jpg" alt="">-->
                <!--                        <div class="cart-info">-->
                <!--                            <a href="#">Leather Visitors Notebook True-Ally A4 Faux</a>-->
                <!--                            <span class="d-block">1 x 28.72</span>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--                <div class="cart-footer">-->
                <!--                    <div class="d-flex mb-3">-->
                <!--                        <b class="me-auto text-dark">Subtotal:</b>-->
                <!--                        <span>$41.21</span>-->
                <!--                    </div>-->
                <!--                    <div class="d-inline-block d-sm-flex">-->
                <!--                        <a class="btn btn-sm btn-primary text-white me-2 px-4" href="{{ url('cart') }}">View cart</a>-->
                <!--                        <a class="btn btn-sm btn-dark text-white ms-0 mt-1 mt-sm-0 ms-sm-2 px-4" href="{{ url('checkout') }}">Checkout</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </nav>
    </header>
    <!--=================================
    Header -->

    <!--=================================
    Modal login -->
    <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false"> <span> Log in</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true"><span>Register</span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="row my-4 align-items-center">
                                <div class="mb-3 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                                        <li class="me-1"><a class="text-dark" href="#"><b>Already Registered User? Click here to login</b></a></li>
                                    </ul>
                                </div>
                            </form>
                            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded-sm">
                                <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
                                <form class="row">
                                    <div class="col-sm-6">
                                        <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f me-2"></i>Login with Facebook</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter me-2"></i>Login with Twitter</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn instagram-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-instagram me-2"></i>Login with Instagram</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in me-2"></i>Login with Linkedin</span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form class="row my-4 align-items-center">
                                <div class="mb-3 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                                        <li class="me-1"><a class="text-dark" href="#"><b>Already Registered User? Click here to login</b></a></li>
                                    </ul>
                                </div>
                            </form>
                            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded-sm">
                                <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
                                <form class="row">
                                    <div class="col-sm-6">
                                        <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f me-2"></i>Login with Facebook</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter me-2"></i>Login with Twitter</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn instagram-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-instagram me-2"></i>Login with Instagram</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in me-2"></i>Login with Linkedin</span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    Modal login -->