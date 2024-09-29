@extends('marketplace.layout.base')

@section('content')

<div class="page-header text-center" style="background-image: url('marketplace/assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Checkout<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('market.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="checkout">
        <div class="container">
            <div class="checkout-discount">
                <form action="#" onsubmit="return false;" method="POST" >
                    @csrf
                    <input type="text" class="form-control" required id="checkout-discount-input">
                    <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
                </form>
            </div><!-- End .checkout-discount -->
            <form id="checkout-form" action="{{ route('market.cart.checkout') }}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>First Name *</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" required placeholder="First name">
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Last Name *</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" required placeholder="Last name">
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Company Name (Optional)</label>
                            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company name (optional)">

                            <label>Country *</label>
                            <input type="text" class="form-control" id="country" name="country" required>

                            <label>Street address *</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="House number and Street name" required>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Town / City *</label>
                                    <input type="text" id="city" name="city" class="form-control" required placeholder="City name">
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>State / County *</label>
                                    <input type="text" id="state" name="state" class="form-control" required placeholder="State name">
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Postcode *</label>
                                    <input type="text" id="postcode" name="postcode" class="form-control" required placeholder="Postcode">
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Phone *</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required placeholder="Phone Number">
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Email address *</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="Email address">

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkout_create_acc" name="checkout_create_acc">
                                <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                            </div>

                            {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkout-diff-address">
                                <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
                            </div> --}}

                            <label>Order notes (optional)</label>
                            <textarea class="form-control" id="order_notes" name="order_notes" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @if (isset($carts))
                                        @foreach ($carts as $item)
                                            <tr>
                                                <td><a href="#">{{ $item->product->name }}</a></td>
                                                <td>&#8377;{{ $item->product->sale_price * $item->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    @php
                                        $total = 0;
                                        $shipping_amt = 0;
                                        $net_total = 0;
                                        if (isset($carts) && count($carts) > 0) {
                                            foreach ($carts as $key => $cart) {
                                                $total += $cart->product->sale_price * $cart->quantity;
                                                $shipping_amt = $cart->shipping ? $cart->shipping->charges : 0;
                                            }
                                        }

                                        $net_total = $total + $shipping_amt;
                                    @endphp
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>&#8377;{{ $total }}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr>
                                        <td>Shipping:</td>
                                        <td>{{ $shipping_amt != 0 ? '₹'.$shipping_amt : 'Free shipping'}}</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>&#8377;{{ $net_total }}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <div class="accordion-summary" id="accordion-payment">
                                <input type="hidden" id="payment_mode" name="payment_mode" value="bank_transfer">
                                <div class="card">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            <a role="button" onclick="setpaymentMethod(this)" data-title="bank_transfer" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                Direct bank transfer
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->

                                <div class="card">
                                    <div class="card-header" id="heading-2">
                                        <h2 class="card-title">
                                            <a class="collapsed" data-title="check" role="button" onclick="setpaymentMethod(this)" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                Check payments
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->

                                <div class="card">
                                    <div class="card-header" id="heading-3">
                                        <h2 class="card-title">
                                            <a class="collapsed" data-title="cod" role="button" onclick="setpaymentMethod(this)" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                Cash on delivery
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                        <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->

                                <div class="card">
                                    <div class="card-header" id="heading-4">
                                        <h2 class="card-title">
                                            <a class="collapsed" data-title="paypal" role="button" onclick="setpaymentMethod(this)" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                PayPal <small class="float-right paypal-link">What is PayPal?</small>
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->

                                <div class="card">
                                    <div class="card-header" id="heading-5">
                                        <h2 class="card-title">
                                            <a class="collapsed" data-title="stripe" role="button" onclick="setpaymentMethod(this)" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                Credit Card (Stripe)
                                                <img src="marketplace/assets/images/payments-summary.png" alt="payments cards">
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                        <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->
                            </div><!-- End .accordion -->

                            <button type="button" onclick="submitCheckout()" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text">Place Order</span>
                                <span class="btn-hover-text">Proceed to Checkout</span>
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div>

<script>

    setpaymentMethod = (el) => {
        var payment_mode = $(el).data('title');

        console.log(payment_mode);
        if(payment_mode == 'cod'){
            $('#payment_mode').val('cod');
        }else{
            $('#payment_mode').val(payment_mode);
        }
    }




</script>
@endsection
