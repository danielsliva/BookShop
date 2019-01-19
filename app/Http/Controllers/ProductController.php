<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = product::all();
        return view('shop.index', ['products' => $products]);
    }
}
