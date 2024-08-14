<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        return view('marketplace.pages.checkout');
    }
}
