<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.pages.permissions.list',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.permissions.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $permission = new Permission();

        $permission = $permission->create($request->all());
        if($permission->id){

            return ok($permission,'permission created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $permission = Permission::find($id);
        return ok($permission);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$id.',id',
        ]);


        $permission = new Permission();

        $permission = $permission->create($request->all());
        if($permission->id){

            return ok($permission,'permission created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);
        if($permission){
            $permission->delete();
            return ok($permission,'permission Deleted successfully');
        }
        return bad('Something went wrong');
    }
}
