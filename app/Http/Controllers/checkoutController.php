<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    
public function index()
{
    
return view('checkout');

  
}

    
public function close()
{

    
    session()->forget('cart');
    session()->forget('user');
    $products = Product::limit(8)->get();
    return view('index' , ["products" => $products ] );

  
}

}
