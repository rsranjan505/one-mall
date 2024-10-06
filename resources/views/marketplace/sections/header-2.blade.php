<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown">
                    {{-- <a href="#">Usd</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">Eur</a></li>
                            <li><a href="#">Usd</a></li>
                        </ul>
                    </div><!-- End .header-menu --> --}}
                </div><!-- End .header-dropdown -->

                <div class="header-dropdown">
                    {{-- <a href="#">Eng</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div><!-- End .header-menu --> --}}
                </div><!-- End .header-dropdown -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                            <li><a href="{{ route('market.about')}}">About Us</a></li>
                            <li><a href="{{ route('market.contact') }}">Contact Us</a></li>
                            <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                {{-- <a href="{{ route('market.home')}}" class="logo">
                    <h3>Ayurmarts</h3>
                    <img src="marketplace/assets/images/logo.png" alt="Molla Logo" width="105" height="25">
                </a> --}}

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container {{ Route::is('market.home') ? 'active' : ''}}">
                            <a href="{{ route('market.home')}}" class="">Home</a>
                        </li>
                        <li class="megamenu-container {{ Route::is('market.shop.*') ? 'active' : ''}}">
                            <a href="javascript:void(0)" class="sf-with-ul">Category</a>

                            <div class="megamenu demo">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Category Details</div><!-- End .menu-title -->
                                            <ul>
                                                @if (isset($categories) && count($categories) > 0)
                                                    @foreach ($categories->where('parent_id', null) as $item)
                                                        <li><a href="{{ route('market.shop', ['category' => $item->slug])}}">{{ ucfirst($item->name)}}</a></li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="{{ route('market.shop') }}">
                                                <img src="{{ asset('marketplace/assets/images/menu/banner-2.jpg')}}" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New Trends<br><span><strong>spring 2024</strong></span></div><!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-sm -->
                        </li>
                        <li class="{{ Route::is('market.shop') ? 'active' : ''}}">
                            <a href="{{ route('market.shop')}}" class="">Shop</a>
                        </li>
                        <li class="">
                            <a href="{{ route('market.home')}}" class="">  Drop Shipping</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">{{ isset($carts) ? count($carts) : 0}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            @php
                                $carts = isset($carts) ? $carts : [];
                                $total = 0;
                                foreach ($carts as $key => $cart) {
                                    $total += $cart->product->sale_price * $cart->quantity;
                                }
                            @endphp
                            @if (isset($carts))
                                @foreach ($carts as $item)
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="{{ route('market.product-deatils', ['product_id' => $item->product_id])}}">{{ucfirst($item->product->name)}}</a>
                                        </h4>
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{ $item->quantity}}</span>
                                            x &#8377;{{ $item->product->sale_price}}
                                        </span>
                                    </div>
                                    <figure class="product-image-container">
                                        <a href="{{ route('market.product-deatils', ['product_id' => $item->product_id])}}" class="product-image">
                                            <img src="{{ $item->product->image ? $item->product->image->url : 'marketplace/assets/images/products/cart/product-1.jpg' }}" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div>
                                @endforeach
                            @endif

                        </div>

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">&#8377;{{$total}}</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="{{ route('market.cart')}}" class="btn btn-primary">View Cart</a>
                            <a href="{{ route('market.checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header>
