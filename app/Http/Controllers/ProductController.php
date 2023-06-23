<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        $product_4 = Product::limit(4)->get();
        return view('detailProduct' , ['product' => $product , "product4" => $product_4]);
    }
}
