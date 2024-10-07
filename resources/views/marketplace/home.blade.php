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
                                <span class="text-primary"> &#8377; 999<sup>,99</sup></span>
                            </span>
                        </h1><!-- End .intro-title -->

                        <a href="{{ route('market.shop' )}}" class="btn btn-outline-primary-2">
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
                                <sup class="font-weight-light line-through">&#8377; 89,99</sup>
                                <span class="text-primary">&#8377; 29<sup>,99</sup></span>
                            </span>
                        </h1><!-- End .intro-title -->

                        <a href="{{ route('market.shop' )}}" class="btn btn-outline-primary-2">
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
                                <sup class="font-weight-light line-through">&#8377; 240,00</sup>
                                <span class="text-primary">&#8377; 180<sup>,99</sup></span>
                            </span>
                        </h1><!-- End .intro-title -->

                        <a href="{{ route('market.shop' )}}" class="btn btn-outline-primary-2">
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


<div class="mb-4"></div>

<div class="mb-2"></div>
<div class="container">
    <h2 class="title text-center mb-2">Explore Popular Categories</h2>

    <ul class="nav nav-tabs justify-content-center owl-carousel mb-5 owl-simple img-category" data-toggle="owl" data-owl-options='{
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
        }' >

        @if (isset($categories))
            @foreach ($categories->where('parent_id', null) as $category)
                <li class="nav-item">
                    <a href="{{ route('market.shop', ['category' => $category->slug])}}" class="cat-block">
                        <figure>
                            <span>
                                {{-- <img src="marketplace/assets/images/demos/demo-13/cats/1.jpg" alt="Category image"> --}}
                                <img src="{{ $category->image ? $category->image->url : 'marketplace/assets/images/demos/demo-13/cats/1.jpg'}}" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">{{ ucfirst($category->name) }}</h3><!-- End .cat-block-title -->
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</div>

<div class="mb-3 "></div>

<div class="mb-3"></div>

<div class="mb-3 bg-black"></div>


@include('marketplace.components.explore-interest', ['products' => $products])

@endsection
