<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>


          <footer class="footer">
            <div class="space-ptb bg-overlay-white-97"  >
              <div class="container">
                <div class="row  position-relative">
                  <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="footer-contact-info">
                      <div class="footer-logo mb-3">
                        <a href="#"><img class="img-fluid" style="height:100px" src="{{asset('images/logo/logo_football.jpg')}}" alt=""></a>
                      </div>
                      <div class="contact-address">
                        <div class="contact-item mb-3 ">
                          <p>We are a group of international experts who have been involved in football for over 30 years and for the last 15 years we have specialised in training football coaches in Europe.</p>
                        </div>
                        <!--<div class="contact-item mb-3 ">-->
                        <!--  <a class="mb-0 fw-normal"><a href="#">+(000) 0000000</a>-->
                        <!--</div>-->
                        <!--<div class="contact-item">-->
                        <!--  <a href="#">info@iamfootballcoach.in</a>-->
                        <!--</div>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="footer-title">Explore</h5>
                    <div class="footer-link">
                      <ul class="list-unstyled mb-0">
                           <li><a href="{{ url('coach-index') }}">Home</a></li>
                         <li><a href="{{ url('order-training') }}">Order Training</a></li>
                        <li><a href="{{ url('about-us') }}">About us</a></li>
                       
                        <li><a href="{{ url('contact-us') }}">Contact us</a></li>
                      </ul>
                      <!--  <ul class="list-unstyled mb-0">-->
                      <!--  <li><a href="../Admin-football-coach/">Admin Dashboard</a></li>-->
                      <!--  <li><a href="../Dashboard_Coach/">Coach Dashboard</a></li>-->
                      <!--  <li><a href="../Mentor_Dashboard">Mentor Dashboard</a></li>-->
                       
                      <!--</ul> -->
                   </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-2 mb-4 mb-sm-0">
                    <h5 class="footer-title">Resources</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                       
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Account</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <h5 class="footer-title">Subscribe us</h5>
                    <p>Sign up to our newsletter to get the latest news and offers.</p>
                    <form>
                      <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email*">
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom bg-light">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="social-icon text-md-start text-center mb-3 mb-md-0">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="copyright text-md-end text-center">
                      <p class="mb-0 small">© Copyright 2023 <a href="#">I'm Football coach</a> All Rights Reserved.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!--=================================
          footer-->
          
          
          <!--=================================
    Modal login -->
<div class="modal login fade" id="WelcomePopup" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header border-0" style="background-color:#288334;">
                <!-- <h5 class="modal-title" id="loginModalLabel">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color:#288334;">
                @if(SESSION("USER_PLAN") == "Free")
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" alt="" src="images/trial/coach1.png">
                    </div>
                    <div class="col-md-8">
                        <!--<h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                        <h6 class="mb-4">Welcome {{SESSION("USER_POSITION")}} my name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for your registration and enjoy the 7-day free version to the fullest.</h6>
                        <!-- <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a> -->
                    </div>
                </div>
                @elseif(SESSION("USER_PLAN") == "Premium")
                <div class="row">
                    
                    <div class="col-md-7" >
                         <!--<h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                        <h2 style="padding: 0px 50px 0px 50px;;color: #ffffff;">Hi and welcome coach. My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. I believe that you will make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>
                   <ul style="display:flex;" class="li-img">
                        <li>
                             <div class="image-hov">
                            <img class="img-fluid"  alt="" src="images/bubble-box/1.png">
                                </div>
                        </li>
                        <li>
                             <div class="image-hov">
                            <img class="img-fluid"  alt="" src="images/bubble-box/2.png">
                                </div>
                        </li>
                         <li>
                              <div class="image-hov">
                            <img class="img-fluid"  alt="" src="images/bubble-box/4.png">
                                </div>
                        </li>
                           <li>
                              <div class="image-hov">
                            <img class="img-fluid"  alt="" src="images/bubble-box/8.png">
                                </div>
                        </li>
                      
                    </ul>
                    </div>
                    <div class="col-md-5">
                      
                        <div class="image-hov">
                        <img class="img-fluid"  alt="" src="images/trial/coach1.png">
                        </div>
                       
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-md-4">-->
                <!--        <img class="img-fluid" alt="" src="images/trial/coach1.png">-->
                <!--    </div>-->
                <!--    <div class="col-md-8">-->
                        <!--<h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                        <!--<h6 class="mb-4">Hi and welcome {{SESSION("USER_POSITION")}}. My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. I believe that you will make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>-->
                        <!-- <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a> -->
                <!--    </div>-->
                <!--</div>-->
                @endif
            </div>
        </div>
    </div>
</div>
<!--=================================
    Modal login -->

          <!--=================================
          Back To Top -->
          <div id="back-to-top" class="back-to-top">
            <a href="#"><i class="fas fa-chevron-up"></i></a>
          </div>
          <!--=================================
          Back To Top -->

          <!--=================================
          Javascript -->

          <!-- JS Global Compulsory (Do not remove)-->
          <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
          <script src="{{asset('js/popper/popper.min.js')}}"></script>
          <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

          <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
          <script src="{{asset('js/select2/select2.full.js')}}"></script>
          <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
          <script src="{{asset('js/swiper/swiper.min.js')}}"></script>
          <script src="{{asset('js/swiperanimation/SwiperAnimation.min.js')}}"></script>
          <script src="{{asset('js/shuffle/shuffle.min.js')}}"></script>
          <script src="{{asset('js/jarallax/jarallax.min.js')}}"></script>
          <script src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
          <script src="{{asset('js/jquery.appear.js')}}"></script>
          <script src="{{asset('js/select2/select2.full.js')}}"></script>
          <script src="{{asset('js/counter/jquery.countTo.js')}}"></script>
          <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
          <!-- Template Scripts (Do not remove)-->
          <script src="{{asset('js/custom.js')}}"></script>


    
      
      <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
      <script src="{{asset('js/jquery.appear.js')}}"></script>
      <script src="{{asset('js/select2/select2.full.js')}}"></script>
      <script src="{{asset('js/range-slider/ion.rangeSlider.min.js')}}"></script>
      
     
@if(SESSION("loginsuccess"))
<script>
    $('document').ready(function() {
        $('#WelcomePopup').modal('show');
    });
</script>
@endif

          </body>

          <!-- Mirrored from themes.potenzaglobalsolutions.com/html/guruma/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 06:12:27 GMT -->

          </html>