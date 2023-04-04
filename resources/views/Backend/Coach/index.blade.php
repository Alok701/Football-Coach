<x-backend.coach.back-coach-header />

<div class="body d-flex">
     <div class="container-xxl">
         <div class="row align-items-center">
             <div class="border-0 mb-4">
                 <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                     <h3 class="fw-bold mb-0">Welcome Coach</h3>
                 </div>
             </div>
         </div>
         <div class="row ">

             <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="conatiner">
     <!-- <a href="#">
                <img src="assets/images/logo.png" alt="" class="avatar">
            </a> -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">

             <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
             <div class="container">
                 <!-- Nav tabs -->
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                         <a class="nav-link  cus" data-bs-toggle="tab" href="#mywork">
                             <div class="icon-back"><i class="fa-solid fa-briefcase"></i></div>
                             My Work Place
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link cus" data-bs-toggle="tab" href="#pro">
                             <div class="icon-back"><i class="fa-solid fa-gift"></i></div>
                             My Bonus Section
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link cus" data-bs-toggle="tab" href="#set">
                             <div class="icon-back"><i class="fa-sharp fa-solid fa-graduation-cap"></i></div>
                             My Work Courses
                         </a>
                     </li>
                 </ul>

                 <!-- Tab panes -->
                 <div class="tab-content">
                     <!--Start tab my work place -->
                     <div class="tab-pane container" id="mywork">
                         <div class="row pad-rl">
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="{{url('/coach/coach-graphics-view')}}">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             MY GRAPHICS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="{{url('/coach/coach-animation-view')}}">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/1.jpg')}}" class="subimg" alt=""></div>
                                             MY ANIMATION
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/2.jpg')}}" class="subimg" alt=""></div>
                                             MY COSPECTS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/3.jpg')}}" class="subimg" alt=""></div>
                                             MY ANALYSIS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="row pad-rl">
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/4.jpg')}}" class="subimg" alt=""></div>
                                             MY DRESS ROOM
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/5.jpg')}}" class="subimg" alt=""></div>
                                             MY CLUB SCHEME
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/6.jpg')}}" class="subimg" alt=""></div>
                                             MY PRESENTATION
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/7.jpg')}}" class="subimg" alt=""></div>
                                             MY TEAM SCHEME
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="row pad-rl">
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('admin/images/gallery/8.jpg')}}" class="subimg" alt=""></div>
                                             MY INDIVIDUAL PLAYER PREPARATION
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!--End tab my work place -->


                      <!--Start tab My Bonus Section -->
                     <div class="tab-pane container fade" id="pro">
                         <div class="row pad-rl">
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="Books-view.php">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             BOOKS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             ANIMATION
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             VIDEOS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             PRESENTATION
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="row pad-rl">
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             COSPECTS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             GRAPHICS
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                      <!--End tab My Bonus Section -->

                       <!--Start tab My Courses -->
                     <div class="tab-pane container fade" id="set">
                         <div class="row pad-rl">
                             <div class="col-sm-3">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item sub">
                                         <a class="nav-link " href="#">
                                             <div class="icon-back"> <img src="{{asset('coach/images/graphicupdate.png')}}" class="subimg" alt=""></div>
                                             ACCORIDING COMPLETE OUR COURSES
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                       <!--End tab My Courses -->
                 </div>
             </div>
         </div>
     </nav>

             </div>
         </div>
     </div>
 </div>
 
 
<x-backend.coach.back-coach-footer />