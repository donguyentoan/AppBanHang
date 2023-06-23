<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    public function index()
    {


      
        
        $order = new Order();
       
        $user = session('user');
       $cart = Session::get('carts');

      

        
        $order->customer_id = $user->id;
        $order->order_date = date('Y-m-d');

        foreach($cart as $sp)
         {
          
            $total = $sp['price'] * $sp['quantity'];
         $order->total_amount += $total;
          
         }
        

         $order->save();


        


        

         

         foreach($cart as $sp)
         {
            $orderDetail = new OrderDetail(); 
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $sp['id'];
            $orderDetail->quantity = $sp['quantity'];
            $orderDetail->save();

         }




       
        




    
        
    
        //  foreach($product as $sp)
        //  {
          
        //     $order->user_id = $user->id;
        //     $order->order_number = $sp['name'];
        //     $order->save();
          
        //  }
        

         return view('checkout_ss');
       
        //
    }
}
