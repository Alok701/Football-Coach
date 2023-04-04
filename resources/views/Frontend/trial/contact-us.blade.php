<x-frontend.trail.trialheader />

<!--=================================
    Inner Header -->
<section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/inner-banner.jpg');">
  <div class="container">
    <div class="row align-items-center position-relative">
      <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
        <h1 class="breadcrumb-title mb-0 text-white">Contact Us</h1>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
          <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fas fa-home me-1"></i>Home</a></li>
          <li class="breadcrumb-item active"><span>Contact Us</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!--=================================
    Inner Header -->

<!--=================================
    Contact Us -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process?</p>
        </div>
      </div>
    </div>
    <div class="row">
        @if(session('msg'))
          <div class="alert alert-success">{{session('msg')}}</div>
        @endif
      <div class="col-md-9">
        <form class="row fill-form mb-4 mb-md-0 form-flat-style" method="post" action="{{url('/contact-insert')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3 col-sm-6">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="" required>

          </div>
          <div class="mb-3 col-sm-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="" required>
          </div>
          <div class="mb-3 col-sm-6">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="" required>
          </div>
          <div class="mb-3 col-sm-6">
            <label class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="" required>
          </div>
          <div class="mb-3 col-sm-12">
            <label class="form-label">Message</label>
            <textarea required name="message" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="mb-3 col-sm-12">
            <button type="submit" class="btn btn-primary">Send us</button>
          </div>
          
        </form>
      </div>
      <div class="col-md-3">
        <h4 class="mb-4">Contact Detail</h4>
        <p class="mb-2">Office No. 327/328 Plot No. 72, Shiv Center, Sector-17, Vashi, Navi Mumbai - 400 703.</p>
            <p class="mb-0"><b class="text-dark">Call us:</b> +91 81691 00364</p>
        <p class="mb-0"><b class="text-dark">Call us:</b> +421 9173 11108</p>
        <p class="mb-4"><b class="text-dark">Mail us:</b> info@iamfootballcoach.in</p>
        <div class="social-icon-round icon-sm">
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
    Contact Us -->

<!--=================================
    Additional Info -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <div class="section-title">
          <h2>Additional Contact Info</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="text-center px-0 px-sm-3 mb-4 mb-md-0">
          <i class="flaticon-support fa-3x text-primary"></i>
          <h4 class="my-4">Our Support Center</h4>
          <!--<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>-->
           <p class="mb-0"><b class="text-dark">Call us:</b> +91 81691 00364</p>
        <p class="mb-0"><b class="text-dark">Call us:</b> +421 9173 11108</p>
        <p class="mb-0"><b class="text-dark">Mail us:</b> info@iamfootballcoach.in</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center px-0 px-sm-3 mb-4 mb-md-0">
          <i class="flaticon-video fa-3x text-primary"></i>
          <h4 class="my-4">Address</h4>
          <p class="mb-0">Office No. 327/328 Plot No. 72, Shiv Center, Sector-17, Vashi, Navi Mumbai - 400 703.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center px-0 px-sm-3">
          <i class="flaticon-clock-1 fa-3x text-primary"></i>
          <h4 class="my-4">Education Hours</h4>
          <p class="mb-0">Monday to Friday : 10 am – 7 pm.<br> Saturday : 9 am – 1 pm. <br>Sunday : Closed</p>
        </div>
      </div>
    </div> 
    
  </div>
</section>
<!--=================================
    Additional Info -->

<!--=================================
    map -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <!--<iframe class="w-100 border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2125432535254!2d72.83246561487773!3d18.921984087176444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c73a0d5cad%3A0xc70a25a7209c733c!2sGateway%20Of%20India%20Mumbai!5e0!3m2!1sen!2sin!4v1675755332890!5m2!1sen!2sin" style="border:0; width: 100%; height: 500px;" allowfullscreen=""></iframe>-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7725143546127!2d72.99946371412369!3d19.07373695700188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c149d6464867%3A0x6041d95d66219c6f!2sM.G.%20Barvadiya%20%26%20Associates!5e0!3m2!1sen!2sin!4v1678355462444!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>
<!--=================================
    map -->
 
 
<!--=================================
    footer-->
<x-frontend.trail.trialfooter />