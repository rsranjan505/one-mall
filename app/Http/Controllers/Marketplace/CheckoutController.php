<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
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
        if (count($carts) == 0) {
            return redirect()->route('market.home');
        }
        return view('marketplace.pages.checkout',compact('carts'));
    }

    public function checkout(Request $request)
    {
        $carts = $this->checkoutservice->getCart();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postcode' => 'required',
        ],[
            'email.unique' => 'This email is already taken. Please try another one.'
        ]);

        $shipping_cost = $carts[0]->shipping ? $carts[0]->shipping->price : 0;

        $total = $carts->sum('order_price');
        $coupan = $carts[0]->coupan;
        $coupan_amount = 0;
        if (isset($coupan)) {
            $coupan_amount = $coupan->type == 'percentage' ? $total * $coupan->value / 100 : $coupan->value;
        }
        $request->merge([
            'user_id' => Auth::check() ? (auth()->user()->user_type == 'customer' ? auth()->user()->id : null) : null,
            'carts' => $carts,
            // 'order_number' => 'ORDER-' . rand(1000,9999),
            'order_number' => 'ORDER-' . str_pad((Order::count() + 1), 4, '0', STR_PAD_LEFT),
            'shipping_charge_id' => $carts[0]->shipping_id ? $carts[0]->shipping_id : 1,    // selected shipping charge id for index id 0 in cart
            'total_amount' => $total + $shipping_cost,
            'is_coupan_applied' => $carts[0]->coupan_id != null ? 1 : 0,
            'coupan_id' => $carts[0]->coupan_id != null ? $carts[0]->coupan_id : null,
            'payable_amount' => $total + $shipping_cost - $coupan_amount,
        ]);

        $order = Order::create($request->except('carts'));
        foreach ($carts as $cart) {
            $order->order_items()->create([
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'order_price' => $cart->order_price
            ]);
        }

        $this->checkoutservice->clearCart();

        if($request->checkout_create_acc == 1)
        {
            $order->is_accounted = 1;
            $order->save();

            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $mobile = $request->phone;
            $user_type = 'customer';

            $this->checkoutservice->create_customer($first_name, $last_name, $email, $mobile, $user_type);
        }

        if($order){
            return ok($order,'Order created successfully');
        }
    }

}
