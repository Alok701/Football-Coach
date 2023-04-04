<x-frontend.premium.bookheader />
    <!--=================================
    Inner Header -->
    <section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
            <h1 class="breadcrumb-title mb-0 text-white">Cart</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ms-auto">
              <li class="breadcrumb-item"><a href="book.php"><i class="fas fa-home me-1"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>Cart</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Inner Header -->

    <!--=================================
    Cart -->
    <section class="space-ptb bg-holder">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="cart-table">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="product-remove">&nbsp;</th>
                      <th class="product-thumbnail">&nbsp;</th>
                      <th class="product-name">Product</th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="product-subtotal">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                      <td class="product-thumbnail"><a href="#"><img src="images/shop/01.jpg" alt=""></a></td>
                      <td class="product-name"><a href="#">Landscape Visitors Book..</a></td>
                      <td class="product-price"><span class="amount">$12.49</span></td>
                      <td class="product-quantity">
                        <form>
                          <div class="form-group">
                            <input type="number" class="form-control" id="number" value="1">
                          </div>
                        </form>
                      </td>
                      <td class="product-subtotal"><span class="subtotal">$12.49</span></td>
                    </tr>
                    <tr>
                      <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                      <td class="product-thumbnail"><a href="#"><img src="images/shop/02.jpg" alt=""></a></td>
                      <td class="product-name"><a href="#">Leather Visitors Notebook.</a></td>
                      <td class="product-price"><span class="amount">$15.00</span></td>
                      <td class="product-quantity">
                        <form>
                          <div class="form-group">
                            <input type="number" class="form-control" id="number2" value="2">
                          </div>
                        </form>
                      </td>
                      <td class="product-subtotal"><span class="subtotal">$15.00</span></td>
                    </tr>
                    <tr>
                      <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                      <td class="product-thumbnail"><a href="#"><img src="images/shop/03.jpg" alt=""></a></td>
                      <td class="product-name"><a href="#">Hard Bound Notebook.</a></td>
                      <td class="product-price"><span class="amount">$17.49</span></td>
                      <td class="product-quantity">
                        <form>
                          <div class="form-group">
                            <input type="number" class="form-control" id="number3" value="3">
                          </div>
                        </form>
                      </td>
                      <td class="product-subtotal"><span class="subtotal">$17.49</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="actions">
                <div class="coupon">
                  <form class="form-inline">
                    <div class="form-group mb-3 mb-sm-0">
                      <input type="text" id="coupon_code" name="coupon_code" class="form-control"  value="" placeholder="Coupon code">
                    </div>
                    <button type="submit" class="btn btn-primary">Apply coupon</button>
                  </form>
                </div>
                <div class="update-cart"> <a class="btn btn-primary" href="#"> Update cart</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cart-totals">
              <h4 class="cart-totals-title">Cart totals</h4>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Subtotal</th>
                      <td><span class="subtotal">$9.82</span></td>
                    </tr>
                    <tr class="shipping">
                      <th>Shipping</th>
                      <td>
                        <form>
                          <div class="mb-3">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio1">Flat rate</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Local pickup</label>
                            </div>
                          </div>
                        </form>
                      </td>
                    </tr>
                    <tr class="order-total">
                      <th>Total</th>
                      <td>
                        <span class="amount">$9.82</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center">
                <a href="checkout.php" class="btn btn-dark checkout-button">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Cart -->

<x-frontend.premium.bookfooter />