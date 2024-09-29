<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\CheckoutService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    protected CheckoutService $checkoutservice;
    public function __construct(CheckoutService $checkoutservice)
    {
        $this->checkoutservice = $checkoutservice;
    }
    /**
     * Show the checkout page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $carts = $this->checkoutservice->getCart();
        return view('marketplace.pages.checkout',compact('carts'));
    }

    public function checkout(Request $request)
    {
        $carts = $this->checkoutservice->getCart();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postcode' => 'required',
        ]);

        $request->merge([
            'user_id' => Auth::check() ? auth()->user()->id : 1,
            'carts' => $carts,
            // 'order_number' => 'ORDER-' . rand(1000,9999),
            'order_number' => 'ORDER-' . str_pad((Order::count() + 1), 4, '0', STR_PAD_LEFT),
            'shipping_charge_id' => $carts[0]->shipping_id ? $carts[0]->shipping_id : 1,    // selected shipping charge id for index id 0 in cart
            'total_amount' => $carts->sum('order_price') + $carts[0]->shipping->price
        ]);

        $order = Order::create($request->except('carts'));
        foreach ($carts as $cart) {
            $order->order_items()->create([
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'order_price' => $cart->order_price
            ]);
        }

        if($order){
            return ok($order,'Order created successfully');
        }
    }
}
