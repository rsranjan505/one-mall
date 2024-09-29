<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $productservice;

    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function index()
    {
        $carts = $this->productservice->getCart();
        return view('marketplace.pages.product-details',compact('carts'));
    }

    public function productDetails($product_id)
    {
        $product = $this->productservice->getProductDetails($product_id);
        $carts = $this->productservice->getCart();
        return view('marketplace.pages.product-details',compact('product','carts'));
    }
}
