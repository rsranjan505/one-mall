<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.products.list-product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attributes = Attribute::where('is_active',1)->get();
        $categories = Category::with('children','parent')->where('is_active',1)->get();

        return view('admin.pages.products.add-product',compact('attributes','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category' => 'required',
            'sub_category' => 'required',
            // 'product_images' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
        ],[
            'name.required' => 'Product name is required',
            'short_description.required' => 'Short description is required',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'sale_price.required' => 'Sale price is required',
            'category.required' => 'Category is required',
            'sub_category.required' => 'Sub category is required',
            // 'product_images.image' => 'image should be in jpeg,jpg,png format',
            // 'product_images.max' => 'image should be less than 1MB',
        ]);
        $data = $request->except(['_token','product_images','attribute_id','attribute_value']);

        $attributes = $request->attribute_id;

        $product_images = $request->product_images;

        $files = File::files(storage_path('tmp/uploads/'));


        $data['slug'] = Str::slug($request->name);

        $product = new Product();

        $product = $product->create($data);
        if($product->id){
            foreach ($attributes as $key => $attribute) {
                if($attribute != null){
                    $attributeVaLue = new AttributeValue();
                    $attributeVaLue->product_id = $product->id;
                    $attributeVaLue->attribute_id = $request->attribute_id[$key];
                    $attributeVaLue->value = $request->attribute_value[$key];
                    $attributeVaLue->save();
                }
            }

            if($request->product_images !=null){
                foreach ($files as $i_img => $file) {
                    if(in_array($file->getFilename(), $product_images)){
                        $uploadedimage = $this->convertSplFileInfoToUploadedFile($file);  //convert SplFileInfo to UploadedFile
                        $image = $this->fileUpload($uploadedimage,$product,'local',$i_img);
                        $image['image_type']='product_image';
                        $product->image()->create($image);

                        File::delete($file);
                    }
                }
            }

            return ok($product,'product created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = $this->productService->getProductDetails($product->id);
        return ok($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if($request->has('details')){

            $request->validate([
                'name' => 'required',
                'short_description' => 'required',
                'description' => 'required',
            ],[
                'name.required' => 'Product name is required',
                'short_description.required' => 'Short description is required',
                'description.required' => 'Description is required',
            ]);
        }
        elseif($request->has('stocks')){

            $request->validate([
                'price' => 'required|numeric',
                'sale_price' => 'required|numeric',
                'category' => 'required',
                'sub_category' => 'required',
            ],[

                'price.required' => 'Price is required',
                'category.required' => 'Category is required',
                'sub_category.required' => 'Sub category is required',

            ]);
        }
        elseif($request->has('variants')){

        }
        else{

        }


        // $product = $this->productService->getProductDetails($product->id);
        $update_status = $this->productService->updateProduct($request,$product);
        if($update_status){
            return ok($product,'Product updated Successfully');
        }
        return bad('Something went wrong');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function setOutOfStock(int $productId)
    {
        $product = $this->productService->getProductDetails($productId);
        if($this->productService->setOutOfStock($product)){
            return ok($product,'Product updated Successfully');
        }
        return bad('Something went wrong');
    }
}


