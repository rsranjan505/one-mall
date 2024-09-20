<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductDetails($product_id)
    {
        return Product::where('id', $product_id)->with('category_list','subCategory_list','attribute_value','attribute_value.attribute','image')->first();
    }




    public function setOutOfStock(Product $product)
    {
        $out_of_stock = 1 == $product->out_of_stock ? 0 : 1;
        $updated = Product::where('id', $product->id)->update(['out_of_stock' => $out_of_stock]);
        if($updated){
            return true;
        }
        return false;
    }

    public function updateProduct(Request $request, Product $product)
    {
        $product = $product->update($request->all());
        if($product){
            return true;
        }
        return false;
    }

    public function deleteProduct($product_id)
    {
        $deleted = Product::where('id', $product_id)->delete();
        if($deleted){
            return true;
        }
        return false;
    }

}
