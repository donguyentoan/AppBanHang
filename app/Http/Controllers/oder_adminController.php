<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class oder_adminController extends Controller
{
    public function index()
    {
       $order = Order::all();
       $user = User::all();

        return view('oder.index' , ['oder' => $order , "user" => $user] );
        //
    }
}
