<div class="products mb-3">
    <div class="row justify-content-center">

        {{-- <?php foreach (range(1,12) as $product ){ ?>

        <?php } ?> --}}


        @for ($i = 0; $i < 12; $i++)
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
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
                                <img src="assets/images/demos/demo-9/products/thumb/1-1.jpg" alt="product desc">
                            </a>
                            <a href="#">
                                <img src="assets/images/demos/demo-9/products/thumb/1-2.jpg" alt="product desc">
                            </a>
                            <a href="#">
                                <img src="assets/images/demos/demo-9/products/thumb/1-3.jpg" alt="product desc">
                            </a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
        @endfor


    </div><!-- End .row -->
</div><!-- End .products -->
