<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        return view('marketplace.pages.shop');
    }
}
