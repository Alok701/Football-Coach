<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>



<!--=================================
    footer-->
<footer class="footer ">
    <div class="space-ptb bg-overlay-white-97">
        <div class="container">
            <div class="row position-relative">
                <div class="col-sm-3 col-lg-3 mb-4 mb-lg-0">
                    <div class="footer-contact-info">
                        <div class="footer-logo mb-2">
                            <a href="{{url('/trial')}}"><img class="img-fluid" style="height:100px" src="{{asset('images/logo/logo_football.jpg')}}" alt=""></a>
                        </div>
                        <div class="contact-address">
                            <div class="contact-item mb-3 mb-md-4">
                                    <p class="para-foot">A comprehensive solution for every football coach. Quality, functionality and a step forward in your career and progression.</p>
                             </div>
                            <!-- <div class="contact-item mb-3 mb-md-4">
                                    <h4 class="mb-0 fw-normal"><a href="#">+(704) 279-1249</a></h4>
                                </div>
                                <div class="contact-item">
                                    <a href="#">Demo@</a>
                                </div> -->
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3 col-lg-3">
                    <h5 class="footer-title">Contact</h5>
                     <div class="contact-address">
                            <div class="contact-item mb-3 mb-md-4">
                                    <p class="para-foot">Office No. 327/328 Plot No. 72,<br>
                                    Shiv Center, Sector-17, Vashi,<br>
                                    Navi Mumbai - 400 703.</p>
                                        <p class="mb-0"><b class="text-dark">Call us:</b> +91 81691 00364</p>
        <p class="mb-0"><b class="text-dark">Call us:</b> +421 9173 11108</p>
        <p class="mb-0"><b class="text-dark">Mail us:</b> info@iamfootballcoach.in</p>
                            </div>
                        </div>
                 </div>
                <div class="col-sm-3 col-xl-3 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="footer-title">Explore</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{url('/trial')}}">Home</a></li>
                            <li><a href="{{url('/about-us')}}">About us</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                        </ul>
                        <!-- <ul class="list-unstyled mb-0">
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Our news</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul> -->
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-xl-3 col-lg-2 mb-4 mb-sm-0">
                        <h5 class="footer-title">Resources</h5>
                        <div class="footer-link">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Donors</a></li>
                                <li><a href="#">Educators</a></li>
                                <li><a href="#">Professionals</a></li>
                                <li><a href="#">Become A Teacher</a></li>
                                <li><a href="#">Student Profile</a></li>
                            </ul>
                        </div>
                    </div> -->
                <div class="col-sm-3 col-lg-3">
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
    <div class="footer-bottom">
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
                        <p class="mb-0 small">© Copyright 2023 <a href="#" class="foot-hover">I'm football coach</a> All Rights Reserved.</p>
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
                <div class="row align-content">
                    
                    <div class="col-md-7" >
                        <!--<h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                        <h2 style="padding:50px;color: #ffffff;">Welcome {{SESSION("USER_POSITION")}} my name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for your registration and enjoy the 7-day free version to the fullest.</h2>
                        <!-- <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a> -->
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
                @elseif(SESSION("USER_PLAN") == "Premium")
                 <div class="row">
                    
                    <div class="col-md-7" >
                         <h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>
                        <h6 class="mb-4">Hi and welcome coach. My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. I believe that you will make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>
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
                    
                <!--    <div class="col-md-7">-->
                <!--        <h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                <!--        <h6 class="mb-4">Hi and welcome coach. My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. I believe that you will make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>-->
                        <!-- <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a> -->
                <!--    </div>-->
                <!--    <div class="col-md-5">-->
                <!--        <img class="img-fluid" alt="" src="images/trial/coach1.png">-->
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
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/slick/slick.min.js')}}"></script>

@if(SESSION("loginsuccess"))
<script>
    $('document').ready(function() {
        $('#WelcomePopup').modal('show');
    });
</script>
@endif

</body>


</html>