<?php

namespace App\Http\Controllers\Marketplace\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        return view('marketplace.pages.customer.dashboard');
    }
}
