<x-frontend.premium.coach.coachheader />

<!--=================================
    Banner -->
<section class="slider-01">
  <div class="container-fluid px-0">
    <div id="main-slider" class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide-01 align-items-center d-flex bg-overlay-black-10 header-position" style="background-image: url(images/banner/banner1.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="container">
            <div class="row">
              <div class="col-md-12 position-relative">
                <div class="banner-content">
                  <div class="content text-center">
                    <h1 class="animated text-white mb-3" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.0s">A great place for learning</h1>
                    <h6 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.5s">A best and cheapest way of getting know learning to make a better tomorrow.</h6>
                    <a class="btn btn-md btn-primary mt-4 animated" data-bs-toggle="modal" data-bs-target="#loginModal" href="#" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="2.0s">Ready to get started? </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-02 align-items-center d-flex bg-overlay-black-10" style="background-image: url(images/banner/banner2.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2 position-relative">
                <div class="banner-content">
                  <div class="content text-center">
                    <h1 class="animated text-white mb-3" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.0s">Best education from your home </h1>
                    <h6 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.5s">Don’t change your learning just change a way of. </h6>
                    <a class="btn btn-md btn-primary mt-4 animated" data-bs-toggle="modal" data-bs-target="#loginModal" href="#" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="2.0s">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></div>
      <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-chevron-right"></i></div>
    </div>
  </div>
</section>
<!--=================================
    Banner -->


<!--=================================
    Bubble -->
    
    @if(session("USER_POSITION") == "Coach")
    
   <section class="space-ptb ">
    <div class="container">
        <div class="row justify-content-center position-relative">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2>Coachs Daily Working Place</h2>
                    <!-- <p>Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.</p> -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative">
                     <div class="col-md-3">
                         <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/1.png')}}" alt="">
                         <p class="my-work-para">Unicoach</p>
                         </a>
                      </div>
                     <div class="col-md-3">
                          <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/2.png')}}" alt="">
                         <p class="my-work-para">Creator</p>
                         </a>
                     </div>
                     <div class="col-md-3">
                          <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/3.png')}}" alt="">
                         <p class="my-work-para">Match analyses</p>
                         </a>
                     </div>
                     <div class="col-md-3">
                          <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/4.png')}}" alt="">
                         <p class="my-work-para">Dressing room</p>
                         </a>
                     </div>
            </div>
            
             <div class="row justify-content-center position-relative">
                     <div class="col-md-3">
                         <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/5.png')}}" alt="">
                         <p class="my-work-para">Soccer Session</p>
                         </a>
                      </div>
                     <div class="col-md-3">
                          <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/6.png')}}" alt="">
                         <p class="my-work-para">Indivdual preparation</p>
                         </a>
                     </div>
                     <div class="col-md-3">
                          <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/7.png')}}" alt="">
                         <p class="my-work-para">Club comunications</p>
                         </a>
                     </div>
                     <div class="col-md-3">
                          <a class="image-hov">
                         <img class="img-fluid" src="{{asset('images/bubble-box/8.png')}}" alt="">
                         <p class="my-work-para">Player analyses</p>
                         </a>
                     </div>
            </div>
        </div>
        </section>
        @endif
        
<!--=================================
    Bubble -->





<!--=================================
    info box -->
<section class="bg-primary">
  <div class="container">
    <div class="row feature-info-02">
      <div class="col-sm-3 py-4 text-center">
        <i class="flaticon-online-learning-1 fa-3x text-white"></i>
        <h4 class="fw-5 mt-3 mb-0 text-white">56</h4>
        <p class="mb-0 text-white">We have organized so many trainings!</p>
      </div>
      <div class="col-sm-3 py-4 text-center">
        <i class="flaticon-statistics fa-3x text-white"></i>
        <h4 class="fw-5 mt-3 mb-0 text-white">1199</h4>
        <p class="mb-0 text-white">We have trained so many people</p>
      </div>
      <div class="col-sm-3 py-4 text-center">
        <i class="flaticon-list fa-3x mt-2 text-white"></i>
        <h4 class="fw-5 mt-3 mb-0 text-white">70</h4>
        <p class="mb-0 text-white">We covered so many topics</p>
      </div>
      <div class="col-sm-3 py-4 text-center">
        <i class="flaticon-lecture fa-3x mt-2 text-white"></i>
        <h4 class="fw-5 mt-3 mb-0 text-white">47</h4>
        <p class="mb-0 text-white">So many guests gave lectures</p>
      </div>
    </div>
  </div>
</section>
<!--=================================
    info box -->

<!--=================================
    Education Categories -->
<!-- <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="section-title text-center">
              <h2>Choose your course & learning</h2>
              <p>We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories">
                <img class="img-fluid" src="images/categories/01.jpg" alt="">
                <h6 class="categories-title">Design</h6>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories">
                <img class="img-fluid" src="images/categories/02.jpg" alt="">
                <h6 class="categories-title">Development</h6>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories">
                <img class="img-fluid" src="images/categories/03.jpg" alt="">
                <h6 class="categories-title">Marketing</h6>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories">
                <img class="img-fluid" src="images/categories/04.jpg" alt="">
                <h6 class="categories-title">IT & software</h6>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories mb-md-0">
                <img class="img-fluid" src="images/categories/05.jpg" alt="">
                <h6 class="categories-title">Photography</h6>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories mb-md-0">
                <img class="img-fluid" src="images/categories/06.jpg" alt="">
                <h6 class="categories-title">Music</h6>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories mb-sm-0">
                <img class="img-fluid" src="images/categories/07.jpg" alt="">
                <h6 class="categories-title">Personal Development</h6>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <div class="categories mb-0">
                <img class="img-fluid" src="images/categories/08.jpg" alt="">
                <h6 class="categories-title">Business</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section> -->
<!--=================================
    Education Categories -->

<section class="pt-5 pb-5 about happy" style="background-image: url('images/course/back.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      <img class="img-fluid" alt="" src="images/course/left.png">
      </div>
      <div class="col-md-6">
        <h2>Discover best coach for the best learning</h2>
        <p class="mb-4">There will be a list of trainers in the system who will be able to provide online tutoring Online meetings will be arranged on the basis of a calendar with visible possible dates. It will also be possible to leave a message to the selected trainer, which will be answered by the trainer in the form of video or text within a certain time.</p>
        <div class="row">
          <div class="col-6 col-sm-6 col-md-3 mb-md-0 mb-3">
            <div class="counter">
              <div class="counter-number">
                <h3 class="timer" data-to="2208" data-speed="2000">2208</h3>
              </div>
              <p class="mb-0 fw-6">Happy Students</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-3 mb-md-0 mb-3">
            <div class="counter">
              <div class="counter-number">
                <h3 class="timer" data-to="250" data-speed="2000">250</h3>
              </div>
              <p class="mb-0 fw-6">Our Courses</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <div class="counter">
              <div class="counter-number">
                <h3 class="timer" data-to="130" data-speed="2000">130</h3>
              </div>
              <p class="mb-0 fw-6">Our Coach</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <div class="counter">
              <div class="counter-number">
                <h3 class="timer" data-to="26" data-speed="2000">26</h3>
              </div>
              <p class="mb-0 fw-6">Awards Won</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!--=================================
    Course -->
<!-- <section class="space-pb pt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="section-title text-center">
          <h2>The greatest choice of coach</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 position-relative">
        <div class="filters-group mb-2 mb-4">
          <button class="btn-filter active" data-group="all">All</button>
          <button class="btn-filter" data-group="development">Development </button>
          <button class="btn-filter" data-group="design">Design</button>
          <button class="btn-filter" data-group="marketing">Marketing</button>
          <button class="btn-filter" data-group="software">IT & software</button>
          <button class="btn-filter" data-group="photography">Photography</button>
          <button class="btn-filter" data-group="music">Music</button>
          <button class="btn-filter" data-group="personal">Personal Development </button>
          <button class="btn-filter" data-group="business">Business</button>
        </div>
        <div class="my-shuffle-container grid-4">
          <div class="grid-item" data-groups='["development", "design", "marketing", "personal"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/01.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i>Development</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">Basic web development & coding online course</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Alice Williams</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>4.4</span>
                    <a href="#">578 Ratings</a>
                  </div>
                  <div class="price">$59</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item senior" data-groups='["personal", "marketing", "photography", "software"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/07.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> Personal Development</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">Great thinking devices to help you learn tough topics</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Alice Williams</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>4.4</span>
                    <a href="#">18 Ratings</a>
                  </div>
                  <div class="price">$79</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item" data-groups='["marketing", "design", "music", "business"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/03.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> Marketing</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">Diploma in marketing management course</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Felica Queen</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>3.4</span>
                    <a href="#">97 Ratings</a>
                  </div>
                  <div class="price">$19</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item" data-groups='["software", "development", "photography", "music"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/04.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> IT & software</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">Introduction to robotic process automation (RPA)</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Ricardo Marshall</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>4.2</span>
                    <a href="#">172 Ratings</a>
                  </div>
                  <div class="price">$99</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item senior" data-groups='["photography", "design", "personal", "business"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/05.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> Photography</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">Certificate in camera and photography course</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Mellissa Doe</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>3.4</span>
                    <a href="#">48 Ratings</a>
                  </div>
                  <div class="price">$199</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item " data-groups='["music", "development", "software", "photography"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/06.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> Music</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">Composing music with others online course</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Paul Flavius</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>1.4</span>
                    <a href="#">157 Ratings</a>
                  </div>
                  <div class="price">$149</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item" data-groups='["software", "development", "business", "music"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/02.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> Design</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">UX & web design master course: Strategy, design..</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Joana Williams</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>3.1</span>
                    <a href="#">57 Ratings</a>
                  </div>
                  <div class="price">$49</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item" data-groups='["business", "design", "marketing", "personal"]'>
            <div class="course">
              <div class="course-img">
                <img class="img-fluid" src="images/course/08.jpg" alt="">
                <a href="#" class="course-category"><i class="far fa-bookmark"></i> Business</a>
              </div>
              <div class="course-info">
                <div class="course-title">
                  <a href="#">How to launch a successful startup company</a>
                </div>
                <div class="course-instructor">by
                  <a href="#">Harry Russell</a>
                </div>
                <div class="course-rate-price">
                  <div class="rating">
                    <span>3.4</span>
                    <a href="#">15 Ratings</a>
                  </div>
                  <div class="price">$9</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--=================================
    Course -->

<!--=================================
    Action box -->
<section class="space-ptb bg-overlay-theme-90" data-jarallax='{"speed": 0.5}' style="background-image: url('images/background.png'); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center my-4 position-relative">
        <div class="section-title mb-4">
          <h2 class="text-white">Discover best coach for the best learning</h2>
          <p class="text-white mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
        </div>
        <a class="btn btn-light" href="about-us.php">Get started</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
    Action box -->

<!--=================================
    Testimonial and Brands -->
<!-- <section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-7 text-center">
        <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
          <div class="item">
            <div class="video-image">
              <img class="img-fluid w-100" src="images/categories/09.jpg" alt="">
              <a class="popup-icon popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0">
                <i class="fa fa-play"></i>
              
                <div class="svg-item">
                  <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="48px" viewBox="0 0 1920 48" style="enable-background:new 0 0 1920 48;" xml:space="preserve">
                    <polygon id="XMLID_1_" class="st0" fill="#ffffff" points="1920,48 0,48 0,48 1920,0 " />
                  </svg>
                </div>
             
              </a>
            </div>
            <div class="testimonial-item">
              <div class="testimonial-content">
                <h6 class="text-dark">We were treated like royalty. Needless to say we are extremely satisfied with the results. Thank you for making it painless, pleasant and most of all hassle free! It fits our needs perfectly.</h6>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <p class="mb-0 text-primary fw-bold">Michael Bean</p>
                  <small class="fw-bold">Web Developer</small>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="video-image">
              <img class="img-fluid w-100" src="images/categories/10.jpg" alt="">
              <a class="popup-icon popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0">
                <i class="fa fa-play"></i>
              
                <div class="svg-item">
                  <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="48px" viewBox="0 0 1920 48" style="enable-background:new 0 0 1920 48;" xml:space="preserve">
                    <polygon id="XMLID_2_" class="st0" fill="#ffffff" points="1920,48 0,48 0,48 1920,0 " />
                  </svg>
                </div>
                
              </a>
            </div>
            <div class="testimonial-item">
              <div class="testimonial-content">
                <h6 class="text-dark">I have gotten at least 50 times the value from Guruma. I will let my mum know about this, she could really make use of Guruma! Wow what great service, I love it! Guruma is the real deal!</h6>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <p class="mb-0 text-primary fw-bold">Mariquilla V.</p>
                  <small class="fw-bold">Production Manager</small>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="video-image">
              <img class="img-fluid w-100" src="images/categories/11.jpg" alt="">
              <a class="popup-icon popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0">
                <i class="fa fa-play"></i>
                 
                <div class="svg-item">
                  <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="48px" viewBox="0 0 1920 48" style="enable-background:new 0 0 1920 48;" xml:space="preserve">
                    <polygon id="XMLID_3_" class="st0" fill="#ffffff" points="1920,48 0,48 0,48 1920,0 " />
                  </svg>
                </div>
             
              </a>
            </div>
            <div class="testimonial-item">
              <div class="testimonial-content">
                <h6 class="text-dark">We've seen amazing results already. Since I invested in Guruma I made over 100,000 dollars profits. It's the perfect solution for our business. I was amazed at the quality of Guruma.</h6>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <p class="mb-0 text-primary fw-bold">Fern W.</p>
                  <small class="fw-bold">Vetrov Systems Development</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-5 align-self-center ps-0 ps-lg-5 mt-5 mt-lg-0">
        <div class="ps-3 ps-lg-4">
          <div class="section-title">
            <h2 class="mb-4 mb-lg-5">Trusted by more than 10,000 companies in 140 countries.</h2>
          </div>
          <a href="#" class="btn btn-primary">More our customers</a>
          <hr class="my-5">
          <h5 class="text-primary mt-md-4 mt-lg-5 mb-3">Need to train your team?</h5>
          <div class="row">
            <div class="col-lg-6 col-sm-3 col-6 mb-3 mb-sm-0"><img class="img-fluid grayscale pt-4 w-75" src="images/award-logo/01.svg" alt=""></div>
            <div class="col-lg-6 col-sm-3 col-6 mb-3 mb-sm-0"><img class="img-fluid grayscale pt-4 w-75" src="images/award-logo/05.svg" alt=""></div>
            <div class="col-lg-6 col-sm-3 col-6 "><img class="img-fluid grayscale pt-4 pt-lg-5 w-75" src="images/award-logo/03.svg" alt=""></div>
            <div class="col-lg-6 col-sm-3 col-6 "><img class="img-fluid grayscale pt-4 pt-lg-5 w-75" src="images/award-logo/04.svg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--=================================
          Testimonial and Brands -->






<!--=================================
    Students -->
<section class="space-ptb bg-overlay-light-97" style="background-image: url('images/bg/08.png');">
  <div class="container">
    <div class="row justify-content-center position-relative">
      <div class="col-md-8">
        <div class="section-title text-center">
          <h2>Meet our coach</h2>
          <p>Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.</p>
        </div>
      </div>
    </div>
    <div class="owl-carousel teachers-shadow" data-nav-arrow="false" data-nav-dots="true" data-items="3" data-lg-items="2" data-md-items="2" data-sm-items="2" data-space="30" data-autoheight="true">
      <div class="item">
        <div class="teachers-style-02">
              <img class="img-fluid" src="{{asset('images/coach/alex_trukan.jpg')}}" alt="">
              <div class="content ">
                <h6 class="name"><a href="{{url('/coach-details')}}">Alex Trukan</a></h6>
                <span>Polish, English, Russian</span>
                <p>Nottingham Forest FC coach and coach-educator for the English Football Association - The FA from 2013-2020. </p>
                <!--<div class="social-icon border-top pt-3">-->
                <!--  <ul>-->
                <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-google"></i></a></li>-->
                <!--  </ul>-->
                <!--</div>-->
              </div>
            </div>
      </div>
      <div class="item">
         <div class="teachers-style-02">
              <img class="img-fluid" src="images/coach/mariusz_rumak.jpg" alt="">
              <div class="content ">
                <h6 class="name"><a href="{{url('/coach-details')}}">Mariusz Rumak</a></h6>
                <span>Polish, English</span>
                <p>Has been coaching children, youth and seniors for almost 20 years. He won the gold and silver medals of the Polish Junior....</p>
                <!--<div class="social-icon border-top pt-3">-->
                <!--  <ul>-->
                <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-google"></i></a></li>-->
                <!--  </ul>-->
                <!--</div>-->
              </div>
            </div>
      </div>
      <div class="item">
        <div class="teachers-style-02">
              <img class="img-fluid" src="images/coach/aleksander_kowalczyk.jpg" alt="" style="height: 243px;">
              <div class="content ">
                
                <h6 class="name"><a href="{{url('/coach-details')}}">Aleksander Kowalczyk</a></h6>
                <span>DSpanish, English</span>
                <p>UEFA Pro coach (course completed at the Spanish federation). Currently coach of the Sestao River B team.</p>
                <!--<div class="social-icon border-top pt-3">-->
                <!--  <ul>-->
                <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-google"></i></a></li>-->
                <!--  </ul>-->
                <!--</div>-->
              </div>
            </div>
      </div>
      <div class="item">
        <div class="teachers-style-02">
              <img class="img-fluid" src="images/coach/marek_zub.jpg" alt="">
              <div class="content ">
                <h6 class="name"><a href="{{url('/coach-details')}}">Marek Zub</a></h6>
                <span>Law</span>
                <p>A coach with a UEFA Pro licence. Recently a coach of Spartaks Jurmala. Former coach of, among others, Żalgiris Vilnius,</p>
                <!--<div class="social-icon border-top pt-3">-->
                <!--  <ul>-->
                <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-google"></i></a></li>-->
                <!--  </ul>-->
                <!--</div>-->
              </div>
            </div>
      </div>
      <div class="item">
        <div class="teachers-style-02">
              <img class="img-fluid" src="images/coach/Patrick_van_Leeuwen.png" alt="" style="height: 243px;">
              <div class="content ">
                <h6 class="name"><a href="{{url('/coach-details')}}">Patrick Van Leeuwen.png</a></h6>
                <span>Law</span>
                <p>A forword-thinking and diversely experienced professional who has established a track record of achievements throughout elite academy</p>
                <!--<div class="social-icon border-top pt-3">-->
                <!--  <ul>-->
                <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                <!--    <li><a href="#"><i class="fab fa-google"></i></a></li>-->
                <!--  </ul>-->
                <!--</div>-->
              </div>
            </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
    Students -->


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
              <h3 class="mb-0 mt-0 text-white">Become a Coach On I'm Football Coach</h3>
            </div>
            <p class="mb-4 text-white lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <a class="btn btn-outline-primary" href="#">Start teaching today</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-primary rounded-sm p-3 p-sm-4 p-xl-5">
          <div class="m-2">
            <div class="d-flex align-items-center mb-3">
              <i class="flaticon-book-1 fa-4x text-white me-4"></i>
              <h3 class="mb-0 mt-0 text-white"> I'm Football Coach for business & Community</h3>
            </div>
            <p class="mb-4 text-white lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <a class="btn btn-light" href="#">Get  I'm Football Coach for business</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
          Feature info -->



<!--=================================
          News -->
<!-- <section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 col-sm-10">
        <div class="section-title text-center">
          <h2>News, Tips & Articles</h2>
          <p>The best way is to develop and follow a plan. Start with your goals in mind and then work. backwards to develop the plan. What steps are required to get you to the goals.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="blog-post-style-02 mb-4 mb-md-0">
          <div class="blog-post-img">
            <img class="img-fluid" src="images/blog/9.jpg" alt="">
          </div>
          <div class="blog-post-info">
            <div class="blog-post-category">
              <a href="#">Education,</a>
              <a href="#">Course</a>
            </div>
            <h5 class="blog-post-title"><a href="#">You can expand students access to learning</a></h5>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="blog-post-style-02">
              <div class="blog-post-img">
                <img class="img-fluid" src="images/blog/10.jpg" alt="">
              </div>
              <div class="blog-post-info">
                <div class="blog-post-category">
                  <a href="#">Study,</a>
                  <a href="#">Learning</a>
                </div>
                <h5 class="blog-post-title"><a href="#">The greatest choice of courses</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-0 mt-md-1">
            <div class="blog-post-style-02">
              <div class="blog-post-img">
                <img class="img-fluid" src="images/blog/11.jpg" alt="">
              </div>
              <div class="blog-post-info">
                <div class="blog-post-category">
                  <a href="#">Leadership,</a>
                  <a href="#">University</a>
                </div>
                <h5 class="blog-post-title"><a href="#">12 great free online courses</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->



<!--=================================
          News -->



<!--=================================
          footer -->
<x-frontend.premium.coach.coachfooter />