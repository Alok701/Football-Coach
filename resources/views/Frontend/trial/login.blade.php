<x-frontend.trail.trialheader />
<!--=================================
    Inner Header -->
<section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/inner-banner.jpg');">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <h1 class="breadcrumb-title mb-0 text-white">Login</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Login</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Inner Header -->

<!--=================================
    Login -->
<section class="space-ptb login">
    <div class="container">
        <!-- <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>Create an account</h2>
                </div>
            </div>
        </div> -->
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-sm-11">
                <!-- <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                    </li>
                   
                </ul> -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="{{url('/login')}}" method="post" enctype="multipart/form-data" class="row mt-4 mb-4 mb-sm-5 align-items-center form-flat-style">
                            @csrf
                            <!-- <div class="mb-3 col-sm-12">
                                <label class="form-label text-dark"><b>Plan's</b></label>
                                <select class="form-control" name="cars" id="cars">
                                    <option value="Coach">Free Trial for 7 Days</option>
                                    <option value="Player">Premium Membership</option>
                                </select>
                            </div> -->
                            <div class="mb-3 col-sm-12">
                                <label class="form-label  text-dark"><b>Choose a Position</b></label>
                                <select class="form-control" name="position" id="position" required>
                                    <option disabled value="" selected hidden>Choose Position</option>
                                    <option value="Coach">I'm Coach</option>
                                    <option value="Player">I'm Player</option>
                                    <option value="Mentor">I'm Mentor</option>
                                </select>
                            </div>
                            <div class="mb-3 col-sm-12">
                                <label class="form-label  text-dark"><b>Email Id</b></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="" value="" required>
                            </div>
                            <div class="mb-3 col-sm-12">
                                <label class="form-label  text-dark"><b>Password</b></label>
                                <input type="Password" class="form-control" name="password" id="password" placeholder="" required>
                            </div>
                            <div class="col-sm-6 d-grid">
                                <button class="btn btn-primary btn-flat" type="submit">Login</button>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3 justify-content-sm-end">
                                    <li class="me-1"><a class="text-dark" href="{{url('/register')}}">Don't have an account? Click here</a></li>
                                </ul>
                            </div>
                        </form>
                        <!--<div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded-sm">-->
                        <!--    <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>-->
                        <!--    <form class="row">-->
                        <!--        <div class="col-sm-6">-->
                        <!--            <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f me-2"></i>Login with Facebook</span></a>-->
                        <!--        </div>-->
                        <!--        <div class="col-sm-6">-->
                        <!--            <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter me-2"></i>Login with Twitter</span></a>-->
                        <!--        </div>-->
                        <!--        <div class="col-sm-6">-->
                        <!--            <a class="btn instagram-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-instagram me-2"></i>Login with Instagram</span></a>-->
                        <!--        </div>-->
                        <!--        <div class="col-sm-6">-->
                        <!--            <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in me-2"></i>Login with Linkedin</span></a>-->
                        <!--        </div>-->
                        <!--    </form>-->
                        <!--</div>-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Login -->



<x-frontend.trail.trialfooter />