@extends('marketplace.layout.base')

@section('content')

<div class="page-header text-center" style="background-image: url('marketplace/assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('market.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="cart">
        <div class="container">
            @if (count($carts) > 0)
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($carts) > 0)
                                    @foreach ($carts as $item)
                                        <tr id="product-{{$item->id}}">
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <a href="{{ route('market.product-deatils', ['product_id' => $item->product_id]) }}">
                                                            <img src="{{$item->product->image->url}}" alt="Product image">
                                                            {{-- <img src="marketplace/assets/images/products/table/product-1.jpg" alt="Product image"> --}}
                                                        </a>
                                                    </figure>

                                                    <h3 class="product-title">
                                                        <a href="{{ route('market.product-deatils', ['product_id' => $item->product_id]) }}">{{$item->product->name}}</a>
                                                    </h3><!-- End .product-title -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td id="item_price-{{$item->id}}" class="price-col">&#8377;{{$item->product->sale_price}}</td>
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" onchange="updateQuantity(this,'cart')" id="cart_quantity-{{$item->id}}" name="quantity" class="form-control" value="{{$item->quantity}}" min="1" max="10" step="1" data-decimals="0" required>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <td id="item_total-{{$item->id}}" class="total-col">&#8377; {{$item->product->sale_price * $item->quantity}}</td>
                                            <td class="remove-col"><button class="btn-remove" onclick="removeCartItem('{{$item->id}}')"><i class="icon-close"></i></button></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table><!-- End .table table-wishlist -->

                        <div class="cart-bottom">
                            <div class="cart-discount">
                                <form action="#" onsubmit="return false;">
                                    <div class="input-group">
                                        <input type="text" class="form-control text-uppercase" id="coupon_code" required placeholder="coupon code" value="{{ $carts[0]->coupan ? $carts[0]->coupan->code : '' }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary-2" onclick="applyCoupon()" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                        <span id="error-coupon_code" class="text-danger input-error"></span>
                                    </div><!-- End .input-group -->
                                </form>
                            </div><!-- End .cart-discount -->

                            <a href="javascript:void(0)" onclick="applyCoupon()" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table id="cart_summary" class="table table-summary">
                                <tbody>
                                    @php
                                        $carts = isset($carts) ? $carts : [];
                                        $total = 0;
                                        $shipping_id = 0;
                                        $shipping_amt = 0;
                                        foreach ($carts as $key => $cart) {
                                            $total += $cart->product->sale_price * $cart->quantity;
                                            $shipping_id = $cart->shipping_id;
                                            $shipping_amt = $cart->shipping ? $cart->shipping->charges : 0;
                                        }

                                        $coupan = $carts[0]->coupan;
                                        $coupan_amount = 0;
                                        if (isset($coupan)) {
                                            $coupan_amount = $coupan->type == 'percentage' ? $total * $coupan->value / 100 : $coupan->value;
                                            $total -= $coupan_amount ;
                                        }
                                    @endphp

                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td id="subtotal">&#8377;{{$total}}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>Shipping:</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    @if ($shippings->count() > 0)
                                        @foreach ($shippings as $item)
                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" onchange="selectShipping('{{$item->id}}')" id="{{Str::slug($item->shipping_type)}}" value="{{ $item->id}}" name="shipping" class="custom-control-input" {{$item->id == $shipping_id ? 'checked' : ''}}>
                                                        <label class="custom-control-label" for="{{Str::slug($item->shipping_type)}}">{{$item->shipping_type}}</label>
                                                    </div>
                                                </td>
                                                <td id="shipping_charges-{{$item->id}}">&#8377;{{$item->charges}}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    <tr id="tr_coupan_code_apply" class="summary-shipping {{ isset($coupan) ? '' : 'd-none' }}">
                                        <td>Apply Coupan:<br><span id="coupan_code_apply" class="text-success text-uppercase"> {{ isset($coupan) ? $coupan->code : '' }}</span></td>
                                        <td>&nbsp;<span id="coupan_value_discount" class="text-success">(-) &#8377;{{$coupan_amount}} </span></td>
                                    </tr>

                                    {{-- <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                            </div>
                                        </td>
                                        <td>$0.00</td>
                                    </tr> --}}


                                    {{-- <tr class="summary-shipping-estimate">
                                        <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                        <td>&nbsp;</td>
                                    </tr> --}}

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td id="total">&#8377;{{$total + $shipping_amt}}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="{{ route('market.checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="{{ route('market.home')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-danger text-center">
                            <strong>Sorry!</strong> No item found in your cart.
                            <a href="{{ route('market.home')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                        </div>
                    </div>
                </div>
            @endif


        </div><!-- End .container -->
    </div><!-- End .cart -->
</div>

<script>


    function selectShipping(shipping_id) {
        var shipping_charges = $('#shipping_charges-'+shipping_id).text();
        var charge_amt = shipping_charges.replace('₹','')
        var exiting_total = $('#subtotal').text();
        var total_amt = exiting_total.replace('₹','')

        var grand_total = parseFloat(total_amt) + parseFloat(charge_amt);
        $('#total').text('₹'+grand_total);

    }


    function removeCartItem(cart_id) {

        var charge_amt = 0;
        var shipping_id = '';
        var is_radio_clicked = $('input[type=radio]:checked').length > 0 ? true : false;
        if(is_radio_clicked){
            var shipping_id = $('input[name="shipping"]:checked').val();
            var shipping_charges = $('#shipping_charges-'+shipping_id).text();
            charge_amt = shipping_charges.replace('₹','')
        }

        $.ajax({
            type: "POST",
            url: "{{ route('market.cart.remove') }}",
            data: {
                _token: "{{ csrf_token() }}",
                cart_id: cart_id
            },
            success: function (response) {
                console.log(response);
                var all_cart_items = response.data.all_items;
                var total = 0;
                all_cart_items.forEach(element => {
                    total += element.product.sale_price * element.quantity;
                })

                var total = total + parseFloat(charge_amt);
                $('#subtotal').text('₹'+total);
                $('#total').text('₹'+total);
                $('.cart-count').text(response.data.all_items.length);
                $('#product-'+cart_id).remove();

                if(response.data.all_items.length == 0){
                    window.location.href = "{{ route('market.cart') }}";
                }
            }
        });
    }


</script>
@endsection
