<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected OrderService $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index(OrderDataTable $dataTable)
    {
        if(request()->ajax()){
            return $dataTable->render('admin.pages.orders.list');
        }

        return $dataTable->render('admin.pages.orders.list');

    }

    public function show(Order $order)
    {
        $order = $this->orderService->getOrderById($order->id);
        return ok($order);
    }

    public function changeStatus($orderid, $status)
    {
        $order = Order::find($orderid);
        $order->status = $status;
        $order->save();

        return ok($order);
    }
}
