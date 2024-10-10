@foreach ($products as $product)
    <div class="col-6 col-md-4 col-lg-4">
        <div class="product product-7 text-center">
            <figure class="product-media">
                {{ $product->is_latest ? '<span class="product-label label-hot">Hot</span>' : ''}}
                {{-- <span class="product-label label-new">New</span> --}}
                <a href="{{ route('market.product-deatils', ['product_id' => $product->id])}}">
                    @if (isset($product->image) )
                        <img src="{{ $product->image->url }}" alt="Product image" class="product-image" height="335px">
                        {{-- <img src="{{ asset('marketplace/assets/images/products/product-5.jpg')}}" alt="Product image" class="product-image"> --}}
                    @else

                    @endif

                </a>
                {{-- <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                </div><!-- End .product-action-vertical --> --}}

                <div class="product-action">
                    <a href="javascript:void(0)" onclick="addTocart('{{ $product->id}}')" class="btn-product btn-cart"><span>add to cart</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->
            <div class="product-body">
                <div class="product-cat">
                    <a href="#">{{ ucfirst($product->subCategory->name)}}</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="javascript:void(0)">{{ ucfirst($product->name)}}</a></h3>
                <div class="product-price">
                    &#8377;{{ ucfirst($product->sale_price ? $product->sale_price : $product->price)}}
                </div>
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 20%;"></div>
                    </div>
                    <span class="ratings-text">( 2 Reviews )</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
