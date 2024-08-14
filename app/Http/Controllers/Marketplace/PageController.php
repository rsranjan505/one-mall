<?php

namespace App\Http\Controllers\Marketplace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about()
    {
        return view('marketplace.pages.about');
    }

    public function contact()
    {
        return view('marketplace.pages.contact');
    }
}
