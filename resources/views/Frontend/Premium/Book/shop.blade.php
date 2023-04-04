<x-frontend.premium.bookheader />

    <!--=================================
    Inner Header -->
    <section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
            <h1 class="breadcrumb-title mb-0 text-white">Shop</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
              <li class="breadcrumb-item"><a href="{{url('book')}}"><i class="fas fa-home me-1"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>Shop</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Inner Header -->

    <!--=================================
    Product -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-xl-4 order-2 order-md-1 mt-5 mt-md-0">
            <div class="shop-sidebar">
              <div class="widgets">
                <div class="widget">
                  <h6 class="widget-title">Search by</h6>
                  <div class="widget-content">
                    <form class="fill-form">
                      <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="button" class="btn btn-primary">Search</button>
                    </form>
                  </div>
                </div>
                <div class="widget">
                  <h6 class="widget-title">Filter by price</h6>
                  <div class="widget-content">
                    <div class="mb-3">
                      <div class="collapse show" id="price">
                        <div class="property-price-slider">
                          <input type="text" id="property-price-slider" name="example_name" value="" />
                        </div>
                      </div>
                    </div>
                    <div class="price-filter">
                      <div class="price_label">
                        Price: <span class="from">$10 — $382</span>
                      </div>
                      <a class="" href="#"><i class="fas fa-filter"></i>Filter</a>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h6 class="widget-title">Categories</h6>
                  <div class="widget-content">
                    <div class="custom-control form-check custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Entrepreneurship Fundamentals</label>
                      <span>(2)</span>
                    </div>
                    <div class="custom-control form-check custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label" for="customCheck3">Product Management</label>
                      <span>(1)</span>
                    </div>
                    <div class="custom-control form-check custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                      <label class="custom-control-label" for="customCheck4">Business Process Management</label>
                      <span>(2)</span>
                    </div>
                    <div class="custom-control form-check custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck5">
                      <label class="custom-control-label" for="customCheck5">Database Management</label>
                      <span>(3)</span>
                    </div>
                    <div class="custom-control form-check custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck6">
                      <label class="custom-control-label" for="customCheck6">Robotic Process Automation</label>
                      <span>(1)</span>
                    </div>
                    <div class="custom-control form-check custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck7">
                      <label class="custom-control-label" for="customCheck7">Instructional Design</label>
                      <span>(1)</span>
                    </div>
                  </div>
                </div>
                <div class="widget widget-Categories">
                  <h6 class="widget-title">Book details</h6>
                  <div class="widget-content">
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="checkbox1">
                      <label class="custom-control-label" for="checkbox1">Authored By</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="checkbox2">
                      <label class="custom-control-label" for="checkbox2">Edition</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="checkbox3">
                      <label class="custom-control-label" for="checkbox3">Number of Pages</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="checkbox4">
                      <label class="custom-control-label" for="checkbox4">Edited by</label>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h6 class="widget-title">Follow on</h6>
                  <div class="widget-content">
                    <div class="social-icon-round">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="widget widget-tag">
                  <h6 class="widget-title">Tags</h6>
                  <div class="widget-content">
                    <ul class="list list-unstyled mb-0">
                      <li><a href="#">Design</a></li>
                      <li><a href="#">Development   </a></li>
                      <li><a href="#">Marketing</a></li>
                      <li><a href="#">Photography</a></li>
                      <li><a href="#">Music</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-md-7  order-1 order-md-1">
            <!-- <h6 class="mb-4">Product filters</h6> -->
            <!-- <div class="row">
              <div class="col-lg-4">
                <input type="search" id="shop-filter-search" class="search-field mb-3" placeholder="Search products…" value="" name="s">
              </div>
              <div class="col-lg-4">
                <div class="mb-3 select-border">
                  <select class="form-control basic-select">
                    <option value="1" selected="selected">Development</option>
                    <option value="3">Design</option>
                    <option value="4">Marketing</option>
                    <option value="2">IT & software</option>
                    <option value="2">Photography</option>
                    <option value="2">Music</option>
                    <option value="2">Personal Development</option>
                    <option value="2">Business</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3 select-border">
                  <select class="form-control basic-select">
                    <option value="1" selected="selected">Any rating</option>
                    <option value="2">5 Star</option>
                    <option value="3">4 Star</option>
                    <option value="4">3 Star</option>
                    <option value="5">2 Star</option>
                    <option value="6">1 Star</option>
                  </select>
                </div>
              </div>
            </div> -->
            <div class="row my-2 align-items-center">
              <div class="col-lg-8">
                <p>Showing all 2 results</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-3 select-border">
                  <select class="form-control basic-select">
                    <option value="1" selected="selected">Default sorting</option>
                    <option value="2">Sort by popularity</option>
                    <option value="3">Sort by average rating</option>
                    <option value="4">Sort by latest</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/01.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Landscape Visitors Book - 122 Pages, A Design, A4</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$24.99</del> <ins>$12.49</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/02.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Leather Visitors Notebook True-Ally A4 Faux</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$20.00</del> <ins>$15.00</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/03.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Hard Bound Notebook with Elastic Band-A5 Size</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$21.99</del> <ins>$17.49</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/04.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Classmate Soft Cover 6 Subject Spiral Binding Notebook</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$24.99</del> <ins>$12.49</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/05.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Decision Planner pad, 22 X 14.3 cm, 100 Pages, 90 GSM Paper</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <ins>$25.49</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/06.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Papergrid Notebook - (19 cm x 15.5 cm), Unruled, 156 Pages</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$27.00</del> <ins>$20.00</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/07.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">A3 Artist Sketch Book 50 Sheets 100 Pages 120GSM, Craft Cover</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$25.99</del> <ins>$10.49</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/08.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Exercise Notebook, Single Ruled - (18cm X 24cm), 250 Pages, Pack of 3</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$30.00</del> <ins>$25.00</ins>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid mx-auto" src="images/shop/09.jpg" alt="">
                    <div class="product-overlay">
                      <div class="add-to-cart">
                        <a href="cart.php">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-title">
                      <a href="{{ url('/book-details') }}">Cotton Watercolour Stitched Bound Journal Cold Pressed, 200 GSM A4-30 Sheets</a>
                    </div>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="product-price">
                      <del>$32.00</del> <ins>$25.00</ins>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center mt-4 mt-md-5">
                <nav>
                  <ul class="pagination justify-content-center mb-0">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <span class="page-link">
                        1
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!--=================================
    Product -->

<x-frontend.premium.bookfooter />
