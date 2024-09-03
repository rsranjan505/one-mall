<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {

        $categories = Category::latest()->get();

        if(request()->ajax()){
            return $dataTable->render('admin.pages.products.category',compact('categories'));
        }

        return $dataTable->render('admin.pages.products.category',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
        ],[
            'name.required' => 'Category name is required',
            'file.image' => 'image should be in jpeg,jpg,png format',
            'file.max' => 'image should be less than 1MB',
        ]);


        $category = new Category();

        $category = $category->create($request->all());
        if($category->id){
            if($request->file !=null){
                $image = $this->fileUpload($request->file,$category);
                // $image['model_id']= $category->id;
                $image['image_type']='cover_image';

                $category->image()->create($image);
            }

            return ok($category,'Category created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $category = Category::with('parent')->find($category->id);
        return ok($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
        ],[
            'name.required' => 'Category name is required',
            'file.image' => 'image should be in jpeg,jpg,png format',
            'file.max' => 'image should be less than 1MB',
        ]);

        $category = Category::findOrFail($category->id);
        $category->update($request->all());

        if($category->id){
            if($request->file !=null){
                if(File::exists(public_path($category->image->filepath))){
                    File::delete(public_path($category->image->filepath));
                    $category->image->delete();
                }
                $image = $this->fileUpload($request->file,$category);
                $image['image_type']='cover_image';
                $category->image()->create($image);
            }

            return ok($category,'Category updated Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category = Category::findOrFail($category->id);
        if($category){
            if(File::exists(public_path($category->image->filepath))){
                File::delete(public_path($category->image->filepath));
                $category->image->delete();
            }
            $category->delete();
            return ok($category,'Category Deleted successfully');
        }
    }

    public function changeStatus($id)
    {
        $category = Category::findOrFail($id);
        if($category){
            $category->update(['is_active' => $category->is_active == 1 ? 0 : 1]);
            return ok($category,'Category status changed successfully');
        }
    }
}
