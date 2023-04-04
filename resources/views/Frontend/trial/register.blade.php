<x-frontend.trail.trialheader />

<!--=================================
    Inner Header -->
<section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/inner-banner.jpg');">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <h1 class="breadcrumb-title mb-0 text-white">Register</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fas fa-home me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Register</span></li>
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
                <div class="tab-content" id="myTabContent">
                    <form id="form" action="{{url('/register')}}" method="post" enctype="multipart/form-data" class="row mt-4 mb-4 mb-sm-5 align-items-center form-flat-style">
                        @csrf
                        <div class="mb-3 col-sm-12">
                            <label class="form-label text-dark"><b>Plan's</b></label>
                            <select class="form-control" name="plan" id="plan" value="{{old('plan')}}" autocomplete="off" required>
                                <option disabled value="" selected hidden>Choose Plan's</option>
                                <option value="Free">Free Trial for 7 Days</option>
                                <option value="Premium">Premium Membership</option>
                            </select>
                            @error("plan")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-12">
                            <label class="form-label  text-dark"><b>Choose a Position</b></label>
                            <select class="form-control" name="position" id="position" value="{{old('position')}}" autocomplete="off" required>
                                <option disabled value="" selected hidden>Choose Position</option>
                                <option value="Coach">I'm Coach</option>
                                <option value="Player">I'm Player</option>
                                <option value="Mentor">I'm Mentor</option>
                            </select>
                            @error("position")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-12" id="club">

                        </div>
                        <div class="mb-3 col-sm-12">
                            <label class="form-label  text-dark"><b>Full Name</b></label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="" value="{{old('full_name')}}" autocomplete="off" required>
                            @error("full_name")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-12">
                            <label class="form-label  text-dark"><b>Email Address</b></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{old('email')}}" autocomplete="off" required>
                            @error("email")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-12">
                            <label class="form-label  text-dark"><b>Mobile Number</b></label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="" value="{{old('mobile')}}" autocomplete="off" required>
                            @error("mobile")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-12">
                            <label class="form-label  text-dark"><b>Password</b></label>
                            <input type="Password" class="form-control" name="password" id="password" placeholder="" autocomplete="off" required>
                            @error("password")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-12">
                            <label class="form-label  text-dark"><b>Confirm Password</b></label>
                            <input type="Password" class="form-control" name="cnfpassword" id="cnfpassword" placeholder="" value="" autocomplete="off" required>
                            @error("cnfpassword")
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 d-grid">
                            <!-- <a class="btn btn-primary btn-flat" href="login.php">Register</a> -->
                            <button class="btn btn-primary btn-flat" type="submit">Register</button>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                                <li class="me-1"><a href="{{url('/login')}}">Already Registered User? Click here to login</a></li>
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
</section>
<!--=================================
    Login -->



<x-frontend.trail.trialfooter />


<script>
    $(document).ready(function() {
        $("#position").change(function() {
            // alert("hi");
            var selectedItem = $(this).val();
            if (selectedItem === "Coach") {
                if (!$("#club_details").length) {
                    $(
                        '<label class="form-label text-dark lbl_club_details"><b>Club Details</b></label><input type="text" class="form-control lbl_club_details" name="club_details" id="club_details" placeholder="" value="" autocomplete="off" required>'
                    ).appendTo("#club");
                }
            } else {
                $(".lbl_club_details").remove();
            }
        });
    });
</script>