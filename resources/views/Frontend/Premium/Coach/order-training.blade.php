<x-frontend.premium.coach.coachheader />


<!--=================================
    Inner Header -->
<section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/inner-banner.jpg');">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <h1 class="breadcrumb-title mb-0 text-white">Order Training</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Order Training</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Inner Header -->

<!--=================================
    Get free courses -->
<section class="space-ptb bg-primary" data-jarallax='{"speed": 0.5}' style="background-image: url('images/bg/09.png'); background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                @if(session('message'))
                  <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="p-5 rounded-sm bg-white text-center d-grid">
                    <h2 class="mb-0">Order Training</h2>
                    <!-- <p>It's time to learning</p> -->
                    <hr class="mt-4 mb-5">
                    <form class="row fill-form form-flat-style" method="post" action="{{url('/order-insert')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-sm-12">
                            <input type="text" name="name" required class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3 col-sm-12">
                            <input type="text" name="position" required class="form-control" placeholder="Position">
                        </div>
                        <div class="mb-3 col-sm-12">
                            <input type="text" name="phone" required class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="mb-3 col-sm-12">
                            <input type="text" name="sports" required class="form-control" placeholder="Sports organization/club">
                        </div>
                        <div class="mb-3 col-sm-12">
                            <input type="email" name="email" required class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3 col-sm-12">
                            <input type="text" name="subject" required class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3 col-sm-12">
                            <!-- <label class="form-label">Message</label> -->
                            <textarea required name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="mb-3 col-sm-12">
                            <button type="submit" name="submit" class="btn btn-primary">Send us</button>
                        </div>
                        <!-- <a href="#" class="btn btn-dark">Send</a> -->
                        <div class="text-center pt-3">
                            <h4 class="text-success">
                                <?php
                                if ($_GET) {
                                    echo $_GET['user']; // print_r($_GET); //remember to add semicolon      
                                } else {
                                }
                                ?>
                            </h4>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-0 ps-xl-5">
                    <div class="section-title">
                        <h2 class="text-white">To order a dedicated training, please use the form. We will contact you and arrange all the details. </h2>
                        <p class="text-white">Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important?</p>
                    </div>
                    <div class="countdown-style-2 pt-3 mb-4 mb-md-5">
                        <div class="countdown bg-white logo ms-0">
                            <!-- <h2 class="days">00</h2> -->
                            <i class="flaticon-mail-1 fa-3x mt-2 text-light days"></i>
                            <!-- <p class="days_ref mb-0">support@onlinecourses.com</p> -->
                        </div>
                        <div class="countdown bg-white logo">
                            <!-- <h2 class="hours">00</h2> -->
                            <i class="flaticon-phone fa-3x mt-2 text-light days"></i>
                            <!-- <p class="hours_ref mb-0">Hours</p> -->
                        </div>
                        <div class="countdown bg-white logo">
                            <!-- <h2 class="minutes">00</h2> -->
                            <i class="flaticon-link fa-3x mt-2 text-light days"></i>
                            <!-- <p class="minutes_ref mb-0">Minutes</p> -->
                        </div>
                        <div class="countdown bg-white logo">
                            <!-- <h2 class="seconds">00</h2> -->
                            <i class="flaticon-pin-1 fa-3x mt-2 text-light days"></i>
                            <!-- <p class="seconds_ref mb-0">Seconds</p> -->
                        </div>
                    </div>
                    <p class="text-white mb-0">Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting SMART goals.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Get free courses -->


<x-frontend.premium.coach.coachfooter />