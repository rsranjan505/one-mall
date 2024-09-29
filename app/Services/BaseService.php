<?php

namespace App\Services;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use nadar\quill\Lexer;

class BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    function getCart()
    {
        $carts = Cart::with('product','shipping','product.image');
        $carts = Auth::check() ? $carts->where('user_id', Auth::user()->id) : $carts->where('session_id', session()->getId());
        return $carts->get();

    }

    function quillEditorDeltaToHtml($delta_data)
    {
        $lexer  = new Lexer($delta_data);

        return $lexer->render();
    }

}
