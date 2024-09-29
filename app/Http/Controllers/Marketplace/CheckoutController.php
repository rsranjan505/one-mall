<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use App\Services\CheckoutService;
use Illuminate\Http\Request;

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

        dd($request->all());

        // $carts = $this->checkoutservice->checkout($request->all());

        return view('marketplace.pages.checkout',compact('carts'));
    }
}
