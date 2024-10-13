<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CustomerDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CustomerDataTable $dataTable)
    {
        if(request()->ajax()){
            return $dataTable->render('admin.pages.customers.list');
        }
        return $dataTable->render('admin.pages.customers.list');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = User::findOrFail($id);
        if($customer){
            $customer->delete();
            return ok($customer,'Customer Deleted successfully');
        }
        return bad('Something went wrong');
    }

    public function changeStatus($id)
    {
        $customer = User::findOrFail($id);
        if($customer){
            $customer->update(['is_active' => $customer->is_active == 1 ? 0 : 1]);
            return ok($customer,'Customer status changed successfully');
        }
        return bad('Something went wrong');
    }
}
