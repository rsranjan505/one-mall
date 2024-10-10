<div class="container new-arrivals">

    <hr class="mb-5 mt-8">

    <div class="heading heading-center mb-3">
        <h2 class="title">EXPLORE YOUR INTEREST </h2><!-- End .title -->

        <ul class="nav nav-pills justify-content-center owl-carousel mb-5 owl-simple text-category" data-toggle="owl" data-owl-options='{
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
            <li class="nav-item bg-black">
                <a class="nav-link category-tab active" id="arrivals-all-link" data-toggle="tab" href="#arrivals-all-tab" role="tab" aria-controls="arrivals-all-tab" aria-selected="true">All</a>
            </li>

            @if (isset($categories))
                @foreach ($categories->where('parent_id', null) as $category)
                    <li class="nav-item">
                        <a class="nav-link category-tab" id="arrivals-{{$category->name}}-link" data-toggle="tab" href="#arrivals-{{$category->name}}-tab" role="tab" aria-controls="arrivals-{{$category->name}}-tab" aria-selected="false">{{ ucfirst($category->name)}}</a>
                    </li>
                @endforeach
            @endif

        </ul>
    </div>

    <div class="tab-content tab-content-carousel">
        @if (isset($categories))
            <div class="tab-pane p-0 fade show active" id="arrivals-all-tab" role="tabpanel" aria-labelledby="arrivals-all-link">
                <div class="row">
                    @if (isset($products) && count($products) > 0)
                        @foreach ($products as $product)
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <figure class="product-media">
                                        {{ $product->is_latest ? '<span class="product-label label-hot">Hot</span>' : ''}}
                                        <a href="{{ route('market.product-deatils', ['product_id' => $product->id])}}">
                                            <img src="{{ $product->image ? $product->image->url : ''}}" style="height: 224px;" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="javascript:void(0)" onclick="addTocart('{{ $product->id}}')" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a  href="javascript:void(0)">{{ $product->subCategory ? ucfirst($product->subCategory->name) : ucfirst($product->Category->name) }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{ route('market.product-deatils', ['product_id' => $product->id])}}">{{ ucfirst($product->name)}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">&#8377; {{ $product->sale_price ? $product->sale_price : $product->price }}</span>
                                            <span class="old-price"> {{ ($product->price == $product->sale_price) || $product->sale_price == null ? '' : 'Was '.'₹ '.$product->price }}</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div>

                                        {{-- <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            @foreach ($categories->where('parent_id', null) as $category)
                <div class="tab-pane p-0 fade" id="arrivals-{{$category->name}}-tab" role="tabpanel" aria-labelledby="arrivals-{{$category->name}}-link">
                    <div class="row">
                        @if (isset($products) && count($products) > 0)
                            @foreach ($products->where('category', $category->id) as $product)
                                <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <figure class="product-media">
                                            {{ $product->is_latest ? '<span class="product-label label-hot">Hot</span>' : ''}}
                                            {{-- <span class="product-label label-new">New</span> --}}
                                            <a href="{{ route('market.product-deatils', ['product_id' => $product->id])}}">
                                                <img src="{{ $product->image ? $product->image->url : ''}}"  style="height: 224px;" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div>

                                            <div class="product-action">
                                                <a href="javascript:void(0)" onclick="addTocart('{{ $product->id}}')" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div>
                                        </figure>
                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a  href="javascript:void(0)">{{ $product->subCategory ? ucfirst($product->subCategory->name) : ucfirst($product->Category->name) }}</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="{{ route('market.product-deatils', ['product_id' => $product->id])}}">{{ ucfirst($product->name)}}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">&#8377; {{ $product->sale_price ? $product->sale_price : $product->price }}</span>
                                                <span class="old-price"> {{ ($product->price == $product->sale_price) || $product->sale_price == null ? '' : 'Was '.'₹ '.$product->price }}</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 12 Reviews )</span>
                                            </div>

                                            {{-- <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="mb-3"></div>
    <div class="text-center">
        <a href="{{ route('market.shop') }}" class="btn btn-viewMore">
            <span>VIEW MORE PRODUCTS</span>
            <i class="icon-long-arrow-right"></i>
        </a>
    </div>
    <hr class="mb-3 mt-5">
</div>
