<x-frontend.trail.trialheader />

<!--=================================
    Inner Header -->
<section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/inner-banner.jpg');">
  <div class="container">
    <div class="row align-items-center position-relative">
      <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
        <h1 class="breadcrumb-title mb-0 text-white">Coach</h1>
      </div>
      <!-- <div class="col-md-6">
            <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
              <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fas fa-home me-1"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>About Us</span></li>
            </ol>
          </div> -->
    </div>
  </div>
</section>
<!--=================================
    Inner Header -->




<section class="space-ptb">
  <div class="container">

    <div class="row  d-flex align-items-center">
      @if(SESSION("USER_PLAN") == "Free")
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <img class="img-fluid" alt="" src="images/trial/coach1.png">
          </div>
          <div class="col-md-8">
            <h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>
            <h6 class="mb-4">My name is Dr. tomas Hvostik and I am the founder of this platform. Thak you for your registration and enjoy the 7-days free version to the fullest.</h6>
            <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a>
          </div>
        </div>
      </div>
      @elseif(SESSION("USER_PLAN") == "Premium")
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <img class="img-fluid" alt="" src="{{asset('images/trial/player.png')}}">
          </div>
          <div class="col-md-8">
            <h2 style="line-height: 60px;">Welcome <span style="color:#288334">Coach !</span></h2>
            <h6 class="mb-4">My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. i believe that you wil make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>
            <a class="btn btn-md btn-primary animated" href="{{url('/coach-index')}}">Buy Premium</a>
          </div>
        </div>
      </div>
      @endif
    </div>

  </div>
</section>



<!--=================================
          Feature info -->
<section class="space-pb pt-0 pt-lg-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="bg-dark rounded-sm p-3 p-sm-4 p-xl-5">
          <div class="m-2">
            <div class="d-flex align-items-center mb-3">
              <i class="flaticon-book fa-4x text-white me-4"></i>
              <h3 class="mb-0 mt-0 text-white">Demo Version</h3>
            </div>
            <p class="mb-4 text-white lead">7 days trial version</p>
            <p class="mb-4 text-white lead">Basic access to each section</p>
            <p class="mb-4 text-white lead">Basic access to each section</p>
            <p class="mb-4 text-white lead">1x article from the coach to read</p>
            <p class="mb-4 text-white lead">1x sample presentation from lector of education</p>
            <a class="btn btn-outline-primary" href="demo-version.php">Free Trial</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-primary rounded-sm p-3 p-sm-4 p-xl-5">
          <div class="m-2">
            <div class="d-flex align-items-center mb-3">
              <i class="flaticon-book-1 fa-4x text-white me-4"></i>
              <h3 class="mb-0 mt-0 text-white">Full Version of Registration</h3>
            </div>
            <p class="mb-4 text-white lead">Full version for users</p>
            <p class="mb-4 text-white lead">Lifetime license</p>
            <p class="mb-4 text-white lead">Full access to each section</p>
            <p class="mb-4 text-white lead">Loyalty program</p>
            <p class="mb-4 text-white lead">Many individual solutions</p>
            <a class="btn btn-light" href="./premium-version/">Buy Premium</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
          Feature info -->


<x-frontend.trail.trialfooter />