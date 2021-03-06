@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <main class="main">
        @include('layouts.slider')

        <div class="pt-3 pb-3">
            <div class="container">
                <div class="banner-group">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="banner banner-overlay banner-lg">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-9/banners/banner-1.jpg') }}"
                                        alt="Banner">
                                </a>

                                <div class="banner-content banner-content-bottom">
                                    <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4>
                                    <!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Waterproof</a></h3>
                                    <!-- End .banner-title -->
                                    <div class="banner-text text-white"><a href="#">from $19.00</a></div>
                                    <!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-sm-6 col-lg-4 order-lg-last">
                            <div class="banner banner-overlay banner-lg">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-9/banners/banner-4.jpg') }}"
                                        alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle text-white"><a href="#">On Sale</a></h4>
                                    <!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Women's<br>Sportswear</a></h3>
                                    <!-- End .banner-title -->
                                    <div class="banner-text text-white"><a href="#">from $39.00</a></div>
                                    <!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-sm-6 col-lg-12">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/demos/demo-9/banners/banner-2.jpg') }}"
                                                alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a>
                                            </h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Accessories<br>and
                                                    Shoes</a></h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 col-lg-12 -->

                                <div class="col-sm-6 col-lg-12">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/demos/demo-9/banners/banner-3.jpg') }}"
                                                alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a>
                                            </h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Spring 2019</a></h3>
                                            <!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 col-lg-12 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .banner-group -->

                <div class="owl-carousel mt-4 mb-3 owl-simple" data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": false,
                                "margin": 30,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "420": {
                                        "items":3
                                    },
                                    "600": {
                                        "items":4
                                    },
                                    "900": {
                                        "items":5
                                    },
                                    "1024": {
                                        "items":6
                                    }
                                }
                            }'>
                    <a href="#" class="brand">
                        <img src="assets/images/brands/1.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/2.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/3.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/4.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/5.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/6.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/7.png" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .bg-lighter -->

        <div class="bg-lighter pt-6">
            <div class="container">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Trending Now</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="trending-women-link" data-toggle="tab"
                                    href="#trending-women-tab" role="tab" aria-controls="trending-women-tab"
                                    aria-selected="true">Women's Clothing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trending-men-link" data-toggle="tab" href="#trending-men-tab"
                                    role="tab" aria-controls="trending-men-tab" aria-selected="false">Men's Clothing</a>
                            </li>
                        </ul>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trending-women-tab" role="tabpanel"
                        aria-labelledby="trending-women-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":4,
                                                "dots": false
                                            }
                                        }
                                    }'>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-9/products/product-1-1.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image"
                                            class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Denim jacket</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-9/products/product-2-1.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-9/products/product-2-2.jpg" alt="Product image"
                                            class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Sandals</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $24.99
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-9/products/product-3-1.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-9/products/product-3-2.jpg" alt="Product image"
                                            class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Printed sweatshirt</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $7.99</span>
                                        <span class="old-price">Was $12.99</span>
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 3 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-9/products/product-4-1.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-9/products/product-4-2.jpg" alt="Product image"
                                            class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Linen-blend paper bag
                                            trousers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $17.99
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="assets/images/demos/demo-9/products/product-4-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-4-2-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-9/products/product-1-1.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-9/products/product-1-2.jpg" alt="Product image"
                                            class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Denim jacket</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="assets/images/demos/demo-9/products/product-1-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-1-2-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="assets/images/demos/demo-9/products/product-1-3-thumb.jpg"
                                                alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel"
                        aria-labelledby="trending-men-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":4,
                                                "dots": false
                                            }
                                        }
                                    }'>

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->
        </div>

        <div class="container featured mt-4 pb-2">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Featured Footwear</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="featured-women-link" data-toggle="tab"
                                href="#featured-women-tab" role="tab" aria-controls="featured-women-tab"
                                aria-selected="true">Women's Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="featured-men-link" data-toggle="tab" href="#featured-men-tab"
                                role="tab" aria-controls="featured-men-tab" aria-selected="false">Men's Shoes</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="banner banner-overlay product-banner">
                        <a href="#">
                            <img src="assets/images/demos/demo-9/banners/banner-5.jpg" alt="banner image">
                        </a>
                        <div class="banner-content">
                            <div class="banner-top">
                                <div class="banner-title text-white text-center">
                                    <i class="la la-star-o"></i>
                                    <h3 class="text-white">Our Experts<br>Recommend</h3>
                                </div>
                            </div>
                            <div class="banner-bottom">
                                <div class="product-cat">
                                    <h4 class="text-white">Sale</h4>
                                </div>
                                <div class="product-price">
                                    <h4 class="text-white">$29.99</h4>
                                </div>
                                <div class="product-txt">
                                    <p class="text-white">Wedge-heel sandals</p>
                                </div>
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div>
                        </div>
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel"
                            aria-labelledby="featured-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                            "nav": false,
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":3,
                                                    "nav": true,
                                                    "dots": false
                                                }
                                            }
                                        }'>
                                <div class="product product-7">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">30% off</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-5-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-5-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Trainers</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $19.99</span>
                                            <span class="old-price">Was $29.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-6-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-6-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Sandals</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $12.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-7-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-7-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Loafers</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $9.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">30% off</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-5-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-5-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Trainers</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $19.99</span>
                                            <span class="old-price">Was $29.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel"
                            aria-labelledby="featured-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                            "nav": false,
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":3,
                                                    "dots": false
                                                }
                                            }
                                        }'>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-3 mb-4">
        </div><!-- End .container -->

        <div class="container pb-2">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Bags & Accessories</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="bags-women-link" data-toggle="tab" href="#bags-women-tab"
                                role="tab" aria-controls="bags-women-tab" aria-selected="true">Women's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bags-men-link" data-toggle="tab" href="#bags-men-tab" role="tab"
                                aria-controls="bags-men-tab" aria-selected="false">Men's</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="banner banner-overlay product-banner">
                        <a href="#">
                            <img src="assets/images/demos/demo-9/banners/banner-6.jpg" alt="banner image">
                        </a>
                        <div class="banner-content">
                            <div class="banner-top">
                                <div class="banner-title text-white text-center">
                                    <i class="la la-star-o"></i>
                                    <h3 class="text-white">Our Experts<br>Recommend</h3>
                                </div>
                            </div>
                            <div class="banner-bottom">
                                <div class="product-cat">
                                    <h4 class="text-white">Sale</h4>
                                </div>
                                <div class="product-price">
                                    <h4 class="text-white">$129.99</h4>
                                </div>
                                <div class="product-txt">
                                    <p class="text-white">Cross Body Bag</p>
                                </div>
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div>
                        </div>
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="bags-women-tab" role="tabpanel"
                            aria-labelledby="bags-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                            "nav": false,
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true,
                                                    "dots": false
                                                }
                                            }
                                        }'>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-8-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-8-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Small shoulder bag</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $14.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-9-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-9-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Loafers</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $9.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 1 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-9/products/product-10-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-9/products/product-10-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                    wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Small bucket bag</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $14.99
                                        </div><!-- End .product-price -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="assets/images/demos/demo-9/products/product-10-thumb.jpg"
                                                    alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/demos/demo-9/products/product-10-2-thumb.jpg"
                                                    alt="product desc">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="bags-men-tab" role="tabpanel" aria-labelledby="bags-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                data-toggle="owl" data-owl-options='{
                                            "nav": false,
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":4,
                                                    "nav": true,
                                                    "dots": false
                                                }
                                            }
                                        }'>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div>
            </div>
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-3 mt-xl-1 mb-0">
        </div><!-- End .container -->

        <div class="cta pt-4 pt-lg-6 pb-5 pb-lg-7 mb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <div class="cta-heading text-center">
                            <h3 class="cta-title">Sign Up for updates from Molla</h3><!-- End .cta-title -->
                            <p class="cta-desc">and receive <span class="font-weight-normal">$20
                                    coupon</span> for first shopping</p><!-- End .cta-desc -->
                        </div><!-- End .text-center -->

                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Address"
                                    aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" title="Sing up"><i
                                            class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->

        <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": false,
                        "items": 6,
                        "margin": 0,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "360": {
                                "items":2
                            },
                            "600": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            },
                            "1500": {
                                "items":6
                            }
                        }
                    }'>
            <div class="instagram-feed">
                <img src="assets/images/demos/demo-9/instagram/1.jpg" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>466</a>
                    <a href="#"><i class="icon-comments"></i>65</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="assets/images/demos/demo-9/instagram/2.jpg" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>39</a>
                    <a href="#"><i class="icon-comments"></i>78</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="assets/images/demos/demo-9/instagram/3.jpg" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>691</a>
                    <a href="#"><i class="icon-comments"></i>87</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="assets/images/demos/demo-9/instagram/4.jpg" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>508</a>
                    <a href="#"><i class="icon-comments"></i>124</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="assets/images/demos/demo-9/instagram/5.jpg" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>433</a>
                    <a href="#"><i class="icon-comments"></i>27</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->

            <div class="instagram-feed">
                <img src="assets/images/demos/demo-9/instagram/6.jpg" alt="img">

                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>122</a>
                    <a href="#"><i class="icon-comments"></i>55</a>
                </div><!-- End .instagram-feed-content -->
            </div><!-- End .instagram-feed -->
        </div><!-- End .owl-carousel -->
    </main><!-- End .main -->
@endsection
