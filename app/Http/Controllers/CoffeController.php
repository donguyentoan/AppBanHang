<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CoffeController extends Controller
{


    public function index(Request $request)
    {


            $name = $request->input('key');



            $products = Product::where('name', 'like', '%' . $name . '%')->simplepaginate(4);


        return view('/coffees' , ['products' => $products]);
    }








}
