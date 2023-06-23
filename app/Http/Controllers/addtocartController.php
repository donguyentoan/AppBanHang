<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class addtocartController extends Controller
{
    

    public function showaddtocart()
    {
       
    
        return view('addtoCart');
    }




    public function addProductToCart($id)
    {
        

        $product = Product::find($id);
        $carts = session()->get('carts', []);

        if(isset($carts[$id])) {
            $carts[$id]['quantity']++;
        } else {
            $carts[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];
        }

        session()->put('carts', $carts);
    
        return view('addtoCart' , ['addto' => $carts] );
      
    }
    // cart = [
    //     4 => [
    //         id : 4
    //         name : fsdfsd
    //         quantity
    //     ]
    //     3 => [

    //     ]
    // ]





    public function deleteProductToCart($id)
    {

        $cart = session('carts');

        if (array_key_exists($id, $cart)) {
            // Xóa sản phẩm khỏi mảng 'cart'
            unset($cart[$id]);
        
            // Lưu lại mảng 'cart' đã xóa vào session
            session(['cart' => $cart]);

            return view('addtoCart');
        
        }
    }


    
}
