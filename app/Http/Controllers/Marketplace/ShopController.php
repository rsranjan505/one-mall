<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\CartService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected ProductService $productService;
    protected CartService $cartService;

    public function __construct(ProductService $productService, CartService $cartService)
    {
        $this->productService = $productService;
        $this->cartService = $cartService;
    }
    public function index($category_slug = null)
    {
        // dd($category_slug);
        $carts = $this->cartService->getCart();
        if (request()->ajax()) {
            $sub_category = request('sub_categories');
            if($sub_category != null) {
                if( $category_slug == null){
                    $products = $this->productService->getProductsByCategory($sub_category); // for category
                }
                else{
                    $products = $this->productService->getProductsBySubCategory($sub_category); // for sub category
                }
            }
            else
            {
                $category = Category::where('slug', $category_slug)->first();
                $products = $this->productService->getProductsByCategory($category);

            }

            return view('marketplace.components.shop-products',compact('products','carts'))->render();
        }
        else
        {
            if($category_slug == null) {
                $products = $this->productService->getAllProducts();
            }
            else
            {
                $category = Category::where('slug', $category_slug)->first();
                $products = $this->productService->getProductsByCategory($category);
            }
            return view('marketplace.pages.shop',compact('products','carts'));
        }

    }
}
