<?php

namespace App\Services;

use App\Models\Shipping;

class CartService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getShipping()
    {
        $shippings = Shipping::all();
        return $shippings;
    }
}
