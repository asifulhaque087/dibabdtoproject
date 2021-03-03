@extends('frontend_two.layouts.app')

@section('content')



@php
$num_todays_deal = count(filter_products(\App\Product::where('published', 1)->where('todays_deal', 1 ))->get());
$featured_categories = \App\Category::where('featured', 1)->get();
@endphp





<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
  <!-- ========================================== SECTION – HERO ========================================= -->

  <div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
      @php $slider_images = json_decode(get_setting('home_slider_images'), true); @endphp
      @foreach ($slider_images as $key => $value)
      <div class="item" style="background-image:  url('{{ uploaded_asset($slider_images[$key]) }}'); ">
        <div class="container-fluid">
          <div class="caption bg-color vertical-center text-left">
            <div class="slider-header fadeInDown-1" style="opacity: 0; top: -15px;">Top Brands</div>
            <div class="big-text fadeInDown-1" style="opacity: 0; top: -15px;"> New Collections </div>
            <div class="excerpt fadeInDown-2 hidden-xs" style="opacity: 0; top: -15px;"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
            <div class="button-holder fadeInDown-3" style="opacity: 0; top: -15px;"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
          </div>
          <!-- /.caption -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.item -->
      @endforeach
    </div>
  </div>

  <!-- ========================================= SECTION – HERO : END ========================================= -->

  <!-- ============================================== INFO BOXES ============================================== -->
  <div class="info-boxes wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="info-boxes-inner">
      <div class="row">
        <div class="col-md-6 col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">money back</h4>
              </div>
            </div>
            <h6 class="text">30 Days Money Back Guarantee</h6>
          </div>
        </div>
        <!-- .col -->

        <div class="hidden-md col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">free shipping</h4>
              </div>
            </div>
            <h6 class="text">Shipping on orders over $99</h6>
          </div>
        </div>
        <!-- .col -->

        <div class="col-md-6 col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">Special Sale</h4>
              </div>
            </div>
            <h6 class="text">Extra $5 off on all items </h6>
          </div>
        </div>
        <!-- .col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.info-boxes-inner -->

  </div>
  <!-- /.info-boxes -->
  <!-- ============================================== INFO BOXES : END ============================================== -->
  <!-- ============================================== SCROLL TABS ============================================== -->
  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="more-info-tab clearfix ">
      <h3 class="new-product-title pull-left">New Products</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
        <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
        <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
        <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
      </ul>
      <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">
      <div class="tab-pane in active" id="all">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer">
              <div class="owl-wrapper" style="width: 2484px; left: 0px; display: block;">
                <div class="owl-item" style="width: 207px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p1.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-23" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-23" style="display: none;"></button>
                            <div id="rateit-range-23" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-23" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="" data-original-title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="" data-original-title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="" data-original-title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 207px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p2.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-24" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-24" style="display: none;"></button>
                            <div id="rateit-range-24" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-24" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 207px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p4.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-25" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-25" style="display: none;"></button>
                            <div id="rateit-range-25" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-25" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 207px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p3.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-26" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-26" style="display: none;"></button>
                            <div id="rateit-range-26" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-26" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 207px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p30.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-27" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-27" style="display: none;"></button>
                            <div id="rateit-range-27" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-27" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 207px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p29.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-28" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-28" style="display: none;"></button>
                            <div id="rateit-range-28" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-28" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->
            <div class="owl-controls clickable">
              <div class="owl-buttons">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
              </div>
            </div>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->

      <div class="tab-pane" id="smartphone">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" style="opacity: 0; display: block;">
            <div class="owl-wrapper-outer">
              <div class="owl-wrapper" style="width: 300px; left: 0px; display: block;">
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p5.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-29" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-29" style="display: none;"></button>
                            <div id="rateit-range-29" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-29" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p6.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-30" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-30" style="display: none;"></button>
                            <div id="rateit-range-30" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-30" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p7.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-31" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-31" style="display: none;"></button>
                            <div id="rateit-range-31" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-31" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p8.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-32" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-32" style="display: none;"></button>
                            <div id="rateit-range-32" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-32" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p9.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-33" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-33" style="display: none;"></button>
                            <div id="rateit-range-33" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-33" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p10.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-34" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-34" style="display: none;"></button>
                            <div id="rateit-range-34" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-34" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->
            <div class="owl-controls clickable">
              <div class="owl-buttons">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
              </div>
            </div>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->

      <div class="tab-pane" id="laptop">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" style="opacity: 0; display: block;">
            <div class="owl-wrapper-outer">
              <div class="owl-wrapper" style="width: 300px; left: 0px; display: block;">
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p11.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-35" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-35" style="display: none;"></button>
                            <div id="rateit-range-35" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-35" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p12.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-36" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-36" style="display: none;"></button>
                            <div id="rateit-range-36" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-36" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p13.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-37" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-37" style="display: none;"></button>
                            <div id="rateit-range-37" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-37" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p14.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-38" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-38" style="display: none;"></button>
                            <div id="rateit-range-38" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-38" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p15.jpg" alt="image"></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-39" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-39" style="display: none;"></button>
                            <div id="rateit-range-39" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-39" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p16.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-40" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-40" style="display: none;"></button>
                            <div id="rateit-range-40" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-40" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->
            <div class="owl-controls clickable">
              <div class="owl-buttons">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
              </div>
            </div>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->

      <div class="tab-pane" id="apple">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" style="opacity: 0; display: block;">
            <div class="owl-wrapper-outer">
              <div class="owl-wrapper" style="width: 300px; left: 0px; display: block;">
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p18.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-41" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-41" style="display: none;"></button>
                            <div id="rateit-range-41" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-41" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p18.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-42" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-42" style="display: none;"></button>
                            <div id="rateit-range-42" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-42" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p17.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-43" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-43" style="display: none;"></button>
                            <div id="rateit-range-43" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-43" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p16.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-44" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-44" style="display: none;"></button>
                            <div id="rateit-range-44" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-44" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p13.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-45" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-45" style="display: none;"></button>
                            <div id="rateit-range-45" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-45" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
                <div class="owl-item" style="width: 25px;">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p14.jpg" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                          <div class="rating rateit-small rateit"><button id="rateit-reset-46" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-46" style="display: none;"></button>
                            <div id="rateit-range-46" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-46" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                              <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                              <div class="rateit-hover" style="height:14px"></div>
                            </div>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->


            <!-- /.item -->
            <div class="owl-controls clickable">
              <div class="owl-buttons">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
              </div>
            </div>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->

    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.scroll-tabs -->
  <!-- ============================================== SCROLL TABS : END ============================================== -->
  <!-- ============================================== WIDE PRODUCTS ============================================== -->
  <div class="wide-banners wow fadeInUp outer-bottom-xs animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="row">
      <div class="col-md-7 col-sm-7">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt=""> </div>
        </div>
        <!-- /.wide-banner -->
      </div>
      <!-- /.col -->
      <div class="col-md-5 col-sm-5">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt=""> </div>
        </div>
        <!-- /.wide-banner -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.wide-banners -->

  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section featured-product wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <h3 class="section-title">Featured products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs" style="opacity: 1; display: block;">
      <div class="owl-wrapper-outer">
        <div class="owl-wrapper" style="width: 2484px; left: 0px; display: block;">
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p5.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-47" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-47" style="display: none;"></button>
                      <div id="rateit-range-47" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-47" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p6.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-48" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-48" style="display: none;"></button>
                      <div id="rateit-range-48" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-48" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p7.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-49" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-49" style="display: none;"></button>
                      <div id="rateit-range-49" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-49" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p8.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-50" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-50" style="display: none;"></button>
                      <div id="rateit-range-50" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-50" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p9.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-51" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-51" style="display: none;"></button>
                      <div id="rateit-range-51" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-51" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p10.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-52" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-52" style="display: none;"></button>
                      <div id="rateit-range-52" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-52" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->
      <div class="owl-controls clickable">
        <div class="owl-buttons">
          <div class="owl-prev"></div>
          <div class="owl-next"></div>
        </div>
      </div>
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
  <!-- ============================================== WIDE PRODUCTS ============================================== -->
  <div class="wide-banners wow fadeInUp outer-bottom-xs animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="row">
      <div class="col-md-12">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner.jpg" alt=""> </div>
          <div class="strip strip-text">
            <div class="strip-inner">
              <h2 class="text-right">New Mens Fashion<br>
                <span class="shopping-needs">Save up to 40% off</span>
              </h2>
            </div>
          </div>
          <div class="new-label">
            <div class="text">NEW</div>
          </div>
          <!-- /.new-label -->
        </div>
        <!-- /.wide-banner -->
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->
  </div>
  <!-- /.wide-banners -->
  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
  <!-- ============================================== BEST SELLER ============================================== -->

  <div class="best-deal wow fadeInUp outer-bottom-xs animated" style="visibility: visible; animation-name: fadeInUp;">
    <h3 class="section-title">Best seller</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer">
          <div class="owl-wrapper" style="width: 2152px; left: 0px; display: block;">
            <div class="owl-item" style="width: 269px;">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p20.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-53" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-53" style="display: none;"></button>
                              <div id="rateit-range-53" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-53" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p21.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-54" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-54" style="display: none;"></button>
                              <div id="rateit-range-54" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-54" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item" style="width: 269px;">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p22.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-55" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-55" style="display: none;"></button>
                              <div id="rateit-range-55" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-55" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p23.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-56" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-56" style="display: none;"></button>
                              <div id="rateit-range-56" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-56" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item" style="width: 269px;">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p24.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-57" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-57" style="display: none;"></button>
                              <div id="rateit-range-57" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-57" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p25.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-58" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-58" style="display: none;"></button>
                              <div id="rateit-range-58" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-58" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item" style="width: 269px;">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p26.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-59" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-59" style="display: none;"></button>
                              <div id="rateit-range-59" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-59" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p27.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-60" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-60" style="display: none;"></button>
                              <div id="rateit-range-60" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-60" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                <div class="rateit-hover" style="height:14px"></div>
                              </div>
                            </div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="owl-controls clickable">
          <div class="owl-buttons">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sidebar-widget-body -->
  </div>
  <!-- /.sidebar-widget -->
  <!-- ============================================== BEST SELLER : END ============================================== -->

  <!-- ============================================== BLOG SLIDER ============================================== -->
  <section class="section latest-blog outer-bottom-vs wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <h3 class="section-title">latest form blog</h3>
    <div class="blog-slider-container outer-top-xs">
      <div class="owl-carousel blog-slider custom-carousel owl-theme" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer">
          <div class="owl-wrapper" style="width: 4140px; left: 0px; display: block;">
            <div class="owl-item" style="width: 414px;">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post1.jpg" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->

                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                    <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                    <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <a href="#" class="lnk btn btn-primary">Read more</a>
                  </div>
                  <!-- /.blog-post-info -->

                </div>
                <!-- /.blog-post -->
              </div>
            </div>
            <div class="owl-item" style="width: 414px;">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post2.jpg" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->

                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                    <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <a href="#" class="lnk btn btn-primary">Read more</a>
                  </div>
                  <!-- /.blog-post-info -->

                </div>
                <!-- /.blog-post -->
              </div>
            </div>
            <div class="owl-item" style="width: 414px;">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post1.jpg" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->

                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    <a href="#" class="lnk btn btn-primary">Read more</a>
                  </div>
                  <!-- /.blog-post-info -->

                </div>
                <!-- /.blog-post -->
              </div>
            </div>
            <div class="owl-item" style="width: 414px;">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post2.jpg" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->

                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    <a href="#" class="lnk btn btn-primary">Read more</a>
                  </div>
                  <!-- /.blog-post-info -->

                </div>
                <!-- /.blog-post -->
              </div>
            </div>
            <div class="owl-item" style="width: 414px;">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post1.jpg" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->

                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                    <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    <a href="#" class="lnk btn btn-primary">Read more</a>
                  </div>
                  <!-- /.blog-post-info -->

                </div>
                <!-- /.blog-post -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.item -->


        <!-- /.item -->

        <!-- /.item -->


        <!-- /.item -->


        <!-- /.item -->


        <!-- /.item -->

        <div class="owl-controls clickable">
          <div class="owl-buttons">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
          </div>
        </div>
      </div>
      <!-- /.owl-carousel -->
    </div>
    <!-- /.blog-slider-container -->
  </section>
  <!-- /.section -->
  <!-- ============================================== BLOG SLIDER : END ============================================== -->

  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section wow fadeInUp new-arriavls animated" style="visibility: visible; animation-name: fadeInUp;">
    <h3 class="section-title">New Arrivals</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs" style="opacity: 1; display: block;">
      <div class="owl-wrapper-outer">
        <div class="owl-wrapper" style="width: 2484px; left: 0px; display: block;">
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p19.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-61" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-61" style="display: none;"></button>
                      <div id="rateit-range-61" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-61" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p28.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-62" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-62" style="display: none;"></button>
                      <div id="rateit-range-62" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-62" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p30.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-63" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-63" style="display: none;"></button>
                      <div id="rateit-range-63" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-63" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p1.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-64" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-64" style="display: none;"></button>
                      <div id="rateit-range-64" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-64" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p2.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-65" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-65" style="display: none;"></button>
                      <div id="rateit-range-65" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-65" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
          <div class="owl-item" style="width: 207px;">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img src="assets/images/products/p3.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small rateit"><button id="rateit-reset-66" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-66" style="display: none;"></button>
                      <div id="rateit-range-66" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-66" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                        <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                        <div class="rateit-hover" style="height:14px"></div>
                      </div>
                    </div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->


      <!-- /.item -->
      <div class="owl-controls clickable">
        <div class="owl-buttons">
          <div class="owl-prev"></div>
          <div class="owl-next"></div>
        </div>
      </div>
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

</div>

@endsection