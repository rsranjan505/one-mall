<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AttributeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AttributeDataTable $dataTable)
    {
        if(request()->ajax()){
            return $dataTable->render('admin.pages.products.attribute');
        }
        return $dataTable->render('admin.pages.products.attribute');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:attributes,name',
            'type' => 'required',
            'attribute_type' => 'required',
        ],[
            'name.required' => 'Name is required',
            'type.required' => 'Field type is required',
            'attribute_type.required' => 'Attribute type is required',
        ]);

        $attribute = new Attribute();
        $attribute = $attribute->create($request->all());
        if($attribute->id){
            return ok($attribute,'attribute created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        $attribute = Attribute::find($attribute->id);
        return ok($attribute);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute)
    {
        $request->validate([
            'name' => 'required|unique:attributes,name,'.$attribute->id.',id',
            'type' => 'required',
            'attribute_type' => 'required',
        ],[
            'name.required' => 'Name is required',
            'type.required' => 'Field type is required',
            'attribute_type.required' => 'Attribute type is required',
        ]);

        $attribute = Attribute::findOrFail($attribute->id);
        $attribute->update($request->all());

        if($attribute->id){
            return ok($attribute,'Attribute updated Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        $attribute = Attribute::findOrFail($attribute->id);
        if($attribute){
            $attribute->delete();
            return ok($attribute,'Attribute Deleted successfully');
        }
    }

    public function changeStatus($id)
    {
        $attribute = Attribute::findOrFail($id);
        if($attribute){
            $attribute->update(['is_active' => $attribute->is_active == 1 ? 0 : 1]);
            return ok($attribute,'Attribute status changed successfully');
        }
    }
}
