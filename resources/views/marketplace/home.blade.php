@extends('marketplace.layout.base')

@section('content')

<div class="intro-slider-container">
    <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
            "nav": false,
            "responsive": {
                "992": {
                    "nav": true
                }
            }
        }'>
        <div class="intro-slide" style="background-image: url(marketplace/assets/images/demos/demo-13/slider/slide-1.png);">
            <div class="container intro-content">
                <div class="row">
                    <div class="col-auto offset-lg-3 intro-col">
                        <h3 class="intro-subtitle">Trade-In Offer</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">MacBook Air <br>Latest Model
                            <span>
                                <sup class="font-weight-light">from</sup>
                                <span class="text-primary">$999<sup>,99</sup></span>
                            </span>
                        </h1><!-- End .intro-title -->

                        <a href="category.html" class="btn btn-outline-primary-2">
                            <span>Shop Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .col-auto offset-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->

        <div class="intro-slide" style="background-image: url(marketplace/assets/images/demos/demo-13/slider/slide-2.jpg);">
            <div class="container intro-content">
                <div class="row">
                    <div class="col-auto offset-lg-3 intro-col">
                        <h3 class="intro-subtitle">Trevel & Outdoor</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">Original Outdoor <br>Beanbag
                            <span>
                                <sup class="font-weight-light line-through">$89,99</sup>
                                <span class="text-primary">$29<sup>,99</sup></span>
                            </span>
                        </h1><!-- End .intro-title -->

                        <a href="category.html" class="btn btn-outline-primary-2">
                            <span>Shop Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .col-auto offset-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->

        <div class="intro-slide" style="background-image: url(marketplace/assets/images/demos/demo-13/slider/slide-3.jpg);">
            <div class="container intro-content">
                <div class="row">
                    <div class="col-auto offset-lg-3 intro-col">
                        <h3 class="intro-subtitle">Fashion Promotions</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">Tan Suede <br>Biker Jacket
                            <span>
                                <sup class="font-weight-light line-through">$240,00</sup>
                                <span class="text-primary">$180<sup>,99</sup></span>
                            </span>
                        </h1><!-- End .intro-title -->

                        <a href="category.html" class="btn btn-outline-primary-2">
                            <span>Shop Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .col-auto offset-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->
    </div><!-- End .owl-carousel owl-simple -->

    <span class="slider-loader"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->

{{-- <div class="icon-boxes-container bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-rocket"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                        <p>Orders $50 or more</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-rotate-left"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                        <p>Within 30 days</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-info-circle"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                        <p>When you sign up</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-life-ring"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                        <p>24/7 amazing services</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div> --}}

<div class="mb-4"></div>

<div class="mb-2"></div>
<div class="container">
    <h2 class="title text-center mb-2">Explore Popular Categories</h2><!-- End .title -->

    <div class="cat-blocks-container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="marketplace/assets/images/demos/demo-13/cats/1.jpg" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="marketplace/assets/images/demos/demo-13/cats/2.jpg" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Lighting</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="marketplace/assets/images/demos/demo-13/cats/3.jpg" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="marketplace/assets/images/demos/demo-13/cats/4.jpg" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="marketplace/assets/images/demos/demo-13/cats/5.jpg" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Cooking</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="category.html" class="cat-block">
                    <figure>
                        <span>
                            <img src="marketplace/assets/images/demos/demo-13/cats/6.jpg" alt="Category image">
                        </span>
                    </figure>

                    <h3 class="cat-block-title">Furniture</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->
        </div><!-- End .row -->
    </div><!-- End .cat-blocks-container -->
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="banner banner-overlay">
                <a href="#">
                    <img src="marketplace/assets/images/demos/demo-13/banners/banner-1.jpg" alt="Banner">
                </a>

                <div class="banner-content">
                    <h4 class="banner-subtitle text-white"><a href="#">Weekend Sale</a></h4><!-- End .banner-subtitle -->
                    <h3 class="banner-title text-white"><a href="#">Lighting <br>& Accessories <br><span>25% off</span></a></h3><!-- End .banner-title -->
                    <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-lg-3 -->

        <div class="col-sm-6 col-lg-3 order-lg-last">
            <div class="banner banner-overlay">
                <a href="#">
                    <img src="marketplace/assets/images/demos/demo-13/banners/banner-3.jpg" alt="Banner">
                </a>

                <div class="banner-content">
                    <h4 class="banner-subtitle text-white"><a href="#">Smart Offer</a></h4><!-- End .banner-subtitle -->
                    <h3 class="banner-title text-white"><a href="#">Anniversary <br>Special <br><span>15% off</span></a></h3><!-- End .banner-title -->
                    <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-lg-3 -->

        <div class="col-lg-6">
            <div class="banner banner-overlay">
                <a href="#">
                    <img src="marketplace/assets/images/demos/demo-13/banners/banner-2.jpg" alt="Banner">
                </a>

                <div class="banner-content">
                    <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                    <h3 class="banner-title text-white"><a href="#">Clothes Trending <br>Spring Collection 2019 <br><span>from $12,99</span></a></h3><!-- End .banner-title -->
                    <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-lg-6 -->
    </div><!-- End .row -->
</div>

<div class="mb-3 "></div><!-- End .mb-3 -->

<div class="bg-light pt-3 pb-5">
    <div class="container">
        <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
                <h2 class="title">Hot Deals Products</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist" >
                    <li class="nav-item">
                        <a class="nav-link active" id="hot-all-link" data-toggle="tab" href="#hot-all-tab" role="tab" aria-controls="hot-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hot-elec-link" data-toggle="tab" href="#hot-elec-tab" role="tab" aria-controls="hot-elec-tab" aria-selected="false">Electronics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hot-furn-link" data-toggle="tab" href="#hot-furn-tab" role="tab" aria-controls="hot-furn-tab" aria-selected="false">Furniture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hot-clot-link" data-toggle="tab" href="#hot-clot-tab" role="tab" aria-controls="hot-clot-tab" aria-selected="false">Clothes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hot-acc-link" data-toggle="tab" href="#hot-acc-tab" role="tab" aria-controls="hot-acc-tab" aria-selected="false">Accessories</a>
                    </li>
                </ul>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="hot-all-tab" role="tabpanel" aria-labelledby="hot-all-link">
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
                            "1280": {
                                "items":4,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Butler Stool Ladder</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$251.99</span>
                                <span class="old-price">Was $290.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$179.99</span>
                                <span class="old-price">Was $199.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$3.050.00</span>
                                <span class="old-price">Was $3.200.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Tan suede biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$240.00</span>
                                <span class="old-price">Was $310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$1699.99</span>
                                <span class="old-price">Was $1999.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Appliances</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Neato Robotics</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $399.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="hot-elec-tab" role="tabpanel" aria-labelledby="hot-elec-link">
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
                            "1280": {
                                "items":4,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Tan suede biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$240.00</span>
                                <span class="old-price">Was $310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Butler Stool Ladder</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$251.99</span>
                                <span class="old-price">Was $290.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$179.99</span>
                                <span class="old-price">Was $199.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$3.050.00</span>
                                <span class="old-price">Was $3.200.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$1699.99</span>
                                <span class="old-price">Was $1999.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="hot-furn-tab" role="tabpanel" aria-labelledby="hot-furn-link">
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
                            "1280": {
                                "items":4,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$3.050.00</span>
                                <span class="old-price">Was $3.200.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$1699.99</span>
                                <span class="old-price">Was $1999.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Appliances</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Neato Robotics</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $399.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Tan suede biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$240.00</span>
                                <span class="old-price">Was $310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Butler Stool Ladder</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$251.99</span>
                                <span class="old-price">Was $290.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$179.99</span>
                                <span class="old-price">Was $199.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="hot-clot-tab" role="tabpanel" aria-labelledby="hot-clot-link">
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
                            "1280": {
                                "items":4,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Butler Stool Ladder</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$251.99</span>
                                <span class="old-price">Was $290.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$3.050.00</span>
                                <span class="old-price">Was $3.200.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Tan suede biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$240.00</span>
                                <span class="old-price">Was $310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$179.99</span>
                                <span class="old-price">Was $199.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="hot-acc-tab" role="tabpanel" aria-labelledby="hot-acc-link">
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
                            "1280": {
                                "items":4,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Appliances</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Neato Robotics</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $399.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Butler Stool Ladder</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$251.99</span>
                                <span class="old-price">Was $290.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$1699.99</span>
                                <span class="old-price">Was $1999.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Furniture</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$3.050.00</span>
                                <span class="old-price">Was $3.200.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Tan suede biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$240.00</span>
                                <span class="old-price">Was $310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->
</div><!-- End .bg-light pt-5 pb-5 -->

<div class="mb-3"></div><!-- End .mb-3 -->

<div class="mb-3 bg-black"></div><!-- End .mb-3 -->

<div class="mb-3"></div><!-- End .mb-3 -->

<div class="container new-arrivals">

    <hr class="mb-5 mt-8">

    <div class="heading heading-center mb-3">
        <h2 class="title">EXPLORE YOUR INTEREST </h2><!-- End .title -->

        <ul class="nav nav-pills justify-content-center owl-carousel mb-5 owl-simple" data-toggle="owl" data-owl-options='{
            "nav": false,
            "dots": true,
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
                    "items":8
                },
                "1280": {
                    "items":8,
                    "nav": true,
                    "dots": false
                }
            }
        }'>
            <li class="nav-item">
                <a class="nav-link category-tab active" id="arrivals-all-link" data-toggle="tab" href="#arrivals-all-tab" role="tab" aria-controls="arrivals-all-tab" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-women-link" data-toggle="tab" href="#arrivals-women-tab" role="tab" aria-controls="arrivals-women-tab" aria-selected="false">Women</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-men-link" data-toggle="tab" href="#arrivals-men-tab" role="tab" aria-controls="arrivals-men-tab" aria-selected="false">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-shoes-link" data-toggle="tab" href="#arrivals-shoes-tab" role="tab" aria-controls="arrivals-shoes-tab" aria-selected="false">Shoes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link category-tab" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
            </li>


        </ul>
    </div><!-- End .heading -->

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="arrivals-all-tab" role="tabpanel" aria-labelledby="arrivals-all-link">
            <div class="row">
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-11.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tables</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Block Side Table/Trolley</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $229.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div>
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-14.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div>
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-15.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div>
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-16.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div>
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-17.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div>
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-3/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-sale">Sale</span> --}}
                            <a href="{{ route('market.product-deatils')}}">
                                <img src="marketplace/assets/images/demos/demo-13/products/product-7.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('market.product-deatils')}}">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
            </div>
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="arrivals-women-tab" role="tabpanel" aria-labelledby="arrivals-women-link">
            <div class="row">
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-2.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Jackets & Vests</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">The North Face Fanorak 2.0</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$76.99</span>
                                <span class="old-price">Was $109.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-6.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Tops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Alphaskin Sport Bra</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$34.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #d64042;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
            </div>
        </div><!-- .End .tab-pane -->

        <div class="tab-pane p-0 fade" id="arrivals-men-tab" role="tabpanel" aria-labelledby="arrivals-men-link">
            <div class="row">
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-7.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Jackets & Vests</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Watertight Jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$76.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
            </div>
        </div><!-- .End .tab-pane -->

        <div class="tab-pane p-0 fade" id="arrivals-shoes-tab" role="tabpanel" aria-labelledby="arrivals-shoes-link">
            <div class="row">
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">UA Spawn Low</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$77.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #34529d;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Ignite Limitless Leather</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$52.66</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-8.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Y-3 by Yohji Yamamoto</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$239.99</span>
                                <span class="old-price">Was $400.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-10.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">On Cloudflyer</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$127.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
            </div>
        </div><!-- .End .tab-pane -->

        <div class="tab-pane p-0 fade" id="arrivals-acc-tab" role="tabpanel" aria-labelledby="arrivals-acc-link">
            <div class="row">
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-3.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Bags</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Osprey Talia</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$67.50</span>
                                <span class="old-price">Was $150.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-5.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Accessories</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Small Sleeping Bag</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$299.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>
                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="marketplace/assets/images/demos/demo-21/newArrivals/product-9.jpg" alt="Product image" class="product-image">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Bags</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Marmot Empire Daypack</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$59.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                            </div><!-- End .product-action -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>

            </div>
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->

    <div class="mb-3"></div>
    <div class="text-center">
        <a href="category.html" class="btn btn-viewMore">
            <span>VIEW MORE PRODUCTS</span>
            <i class="icon-long-arrow-right"></i>
        </a>
    </div>
    <hr class="mb-3 mt-5">
</div>
{{-- <div class="cta cta-horizontal cta-horizontal-box bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2xl-5col">
                <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
                <p class="cta-desc text-white">Subcribe to get information about products and coupons</p><!-- End .cta-desc -->
            </div><!-- End .col-lg-5 -->

            <div class="col-3xl-5col">
                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                        </div><!-- .End .input-group-append -->
                    </div><!-- .End .input-group -->
                </form>
            </div><!-- End .col-lg-7 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div> --}}


@endsection
