<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService extends BaseService
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
        return Product::with('Category','subCategory','attribute_value','attribute_value.attribute','image')->get();
    }

    public function getProductDetails($product_id)
    {
        $product = Product::where('id', $product_id)->with('Category','subCategory','attribute_value','attribute_value.attribute','image','images')->first();
        $attributes = [];

        foreach ($product->attribute_value as $key => $item) {
            if($item->attribute->attribute_type == 'varient'){

                $attributes[$item->attribute->name][] = $item->value;
                // $attributes[$item->attribute->name]['type'] = $item->attribute->type;
            }
        }

        $product->attributes = $attributes;
        $product->short_description_html = $this->quillEditorDeltaToHtml($product->short_description);
        $product->description_html = $this->quillEditorDeltaToHtml($product->description);
        $product->long_description_html = $this->quillEditorDeltaToHtml($product->long_description);

        return $product;

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
