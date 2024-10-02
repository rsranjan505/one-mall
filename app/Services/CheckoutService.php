<?php

namespace App\Services;

class CheckoutService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function clearCart()
    {
        $carts = $this->getCart();

        foreach ($carts as $cart) {
            $cart->delete();
        }
    }
}
