<?php

namespace App\Services;

use App\Models\User;

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

    public function create_customer($first_name, $last_name, $email, $mobile, $user_type)
    {
        $customer = new User();

        $customer = $customer->create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'mobile' => $mobile,
            'user_type' => $user_type,
            'password' => bcrypt($mobile),
        ]);

        // if($customer) {
        //     return $customer;
        // }
    }
}
