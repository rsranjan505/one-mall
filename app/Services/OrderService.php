<?php

namespace App\Services;

use App\Models\Order;

class OrderService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllOrders()
    {
        return Order::with('order_items','user','order_items.product')->latest();
    }

    /**
     * Get all orders for the order id
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getOrderById($order_id)
    {
        return Order::find( $order_id)->with('order_items','user')->get();
    }
}
