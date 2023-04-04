<div>
    <!-- Be present above all else. - Naval Ravikant -->
</div>
<!--=================================
    footer-->
    
<footer class="footer ">
    <div class="space">
        <div class="container">
            <div class="row position-relative">
                <div class="col-sm-3 col-lg-3 mb-4 mb-lg-0">
                    <div class="footer-contact-info">
                        <div class="footer-logo mb-2">
                            <a href="{{ url('/') }}"><img class="img-fluid" style="height:100px" src="{{asset('images/logo/logo_football.jpg')}}" alt=""></a>
                        </div>
                        <div class="contact-address">
                            <div class="contact-item mb-3 mb-md-4">
                                    <p class="para-foot">A comprehensive solution for every football coach. Quality, functionality and a step forward in your career and progression.</p>
                            </div>
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
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About us</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
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
                        <p class="mb-0 small">© Copyright 2023 <a href="#">I'm football Coach</a> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=================================
    footer-->

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
@if(SESSION("success"))
<script>
    Swal.fire(
        // "{{SESSION("success")}}"
        '',
        '{{SESSION("success")}}',
        'success'
    )
</script>
@endif


@if(SESSION("error"))
<script>
    
    Swal.fire(
        // "{{SESSION("success")}}"
        '',
        '{{SESSION("error")}}',
        'error'
    )
</script>
@endif
</body>
<!-- E:\Football\Laravel\football-coach27-02-2023\public\images\trial\coach1.png -->
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/guruma/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 06:21:27 GMT -->

</html>