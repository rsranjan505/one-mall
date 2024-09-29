<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected CartService $cartservice;

    public function __construct(CartService $cartservice)
    {
        $this->cartservice = $cartservice;
    }
    public function index()
    {
        $carts= $this->cartservice->getCart();
        $shippings = $this->cartservice->getShipping();
        return view('marketplace.pages.cart',compact('carts','shippings'));
    }

    public function addtocart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric|min:1'
        ]);

        if(Auth::check()){
            $cart = Cart::where('product_id', $request->product_id)->where('user_id', auth()->user()->id)->first();
            if($cart){
                $cart->quantity = $cart->quantity + $request->quantity;
                if(isset($request->qty_flag) && $request->qty_flag == true){
                    $cart->quantity = $request->quantity;
                }
                $cart->save();

            }
            else{
                $cart = new Cart();
                $cart->product_id = $request->product_id;
                $cart->quantity = $request->quantity;
                $cart->session_id = session()->getId();
                $cart->user_id = Auth::check() ? auth()->user()->id : null;
                $cart->save();

            }
        }
        else{
            $cart = Cart::where('product_id', $request->product_id)->where('session_id', session()->getId())->first();
            if($cart){
                if(isset($request->qty_flag) && $request->qty_flag == true){
                    $cart->quantity = $request->quantity;
                }
                $cart->save();

            }
            else{
                $cart = new Cart();
                $cart->product_id = $request->product_id;
                $cart->quantity = $request->quantity;
                $cart->session_id = session()->getId();
                $cart->user_id = Auth::check() ? auth()->user()->id : null;
                $cart->save();

            }
        }

        $cart->cart_count = $cart->where('session_id', session()->getId())->count();

        if($cart){
            return ok($cart,'Added to cart');
        }
        return bad($cart,'something went wrong');
    }

    public function updateQuantity(Request $request)
    {

        $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        if(Auth::check()){
            $cart = Cart::where(['id' => $request->cart_id,'user_id' => auth()->user()->id])->first();
            if($cart){
                $cart->quantity = $request->quantity;
                $cart->shipping_id = $request->shipping_id;
                $cart->save();
            }
        }
        else{
            $cart = Cart::where(['id' => $request->cart_id,'session_id' => session()->getId()])->first();
            if($cart){
                $cart->quantity = $request->quantity;
                $cart->shipping_id = $request->shipping_id;
                $cart->save();

            }
        }
        $cart->all_items = $this->cartservice->getCart();
        // $cart->with('product','product.images');
        return ok($cart,'Quantity updated successfully');
    }

    public function removeCartItem(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id'
        ]);
        if(Auth::check()){
            $cart = Cart::where(['id' => $request->cart_id,'user_id' => auth()->user()->id])->first();
            if($cart){
                $cart->delete();
            }
        }
        else{
            $cart = Cart::where(['id' => $request->cart_id,'session_id' => session()->getId()])->first();
            if($cart){
                $cart->delete();
            }
        }
        $cart->all_items = $this->cartservice->getCart();

        return ok($cart,'Cart item removed successfully');
    }
}
