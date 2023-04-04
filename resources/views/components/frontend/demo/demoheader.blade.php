<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="keywords" content="H" />
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

    <link rel="stylesheet" href="{{asset('css/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
    <link rel="stylesheet" href="{{asset('css/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
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
                <a class="navbar-brand" href="{{url('/trial')}}">
                    <img class="img-fluid" src="{{asset('images/logo/logo_football.jpg')}}" alt="logo">
                </a>
                <div class="search-category ms-auto">
                    <input type="text" class="form-control" placeholder="Search Courses...">
                    <button class="search-button" type="submit"> <i class="fa fa-search"></i></button>
                </div>
                <div class="navbar-collapse collapse top-course">
                    <ul class="nav navbar-nav gap-2">
                        <li><a class="nav-link" href="{{url('/trial')}}">Home</a></li>
                        <li><a class="nav-link" href="{{url('/about-us')}}">About Us</a></li>
                        <li><a class="nav-link" href="{{url('/contact-us')}}">Contact us</a></li>
                        
                          @if(session("USER_POSITION") == "Coach")
                         <li><a class="nav-link" href="{{ url('/coach/coach-dashboard') }}">Dashborad</a></li>
                         @endif
                         
                    </ul>
                </div>
              <div class="woo-action key">
                    <ul class="nav nav-tabs justify-content-center">
                    <li class="nav nav-tabs justify-content-center">
                       <div class="btn btn-primary btn-flat Demo-version">Demo Version for Only 7 Days</div>
                            <!-- <button type="submit" class="btn btn-primary btn-flat Demo-version" id="key">Demo Version for Only 7 Days</button> -->
                            
                        </li>
                    <li class="cart dropdown" style="padding-left: 10px;">
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
           
            </div>
        </nav>
    </header>
    <!--=================================
    Header -->

