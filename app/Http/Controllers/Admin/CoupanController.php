<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CoupanDataTable;
use App\Http\Controllers\Controller;
use App\Models\Coupan;
use App\Services\CartService;
use Illuminate\Http\Request;

class CoupanController extends Controller
{
    protected CartService $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(CoupanDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.products.coupans');
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
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);
        $coupan = new Coupan();

        $coupan = $coupan->create($request->all());
        if($coupan->id){

            return ok($coupan,'Coupan created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coupan = Coupan::find($id);
        return ok($coupan);
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
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);

        $coupan = new Coupan();

        $coupan = $coupan->create($request->all());
        if($coupan->id){

            return ok($coupan,'Coupan created Successfully');
        }
        return bad('Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupan = Coupan::findOrFail($id);
        if($coupan){
            $coupan->delete();
            return ok($coupan,'coupan Deleted successfully');
        }
        return bad('Something went wrong');
    }

    public function changeStatus($id)
    {
        $coupan = Coupan::findOrFail($id);
        if($coupan){
            $coupan->update(['is_active' => $coupan->is_active == 1 ? 0 : 1]);
            return ok($coupan,'coupan status changed successfully');
        }
        return bad('Something went wrong');
    }

    public function checkcoupan(Request $request)
    {
        $code = $request->coupan_code;
        $coupan = Coupan::where('code', $code)->first();

        if($coupan){
            if($coupan->is_active == 1 && $coupan->from_date <= date('Y-m-d H:i:s') && $coupan->to_date >= date('Y-m-d H:i:s')){
                $carts = $this->cartService->getCart();
                foreach ($carts as $cart) {
                    $cart->coupan_id = $coupan->id;
                    $cart->save();
                }
                return ok($coupan,'Valid coupon code');
            }
        }
        return ok('','Invalid coupon code');
    }
}
