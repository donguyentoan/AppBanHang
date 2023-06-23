<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home.index', ['products' => $products]);
        
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('home.create')->with('categories', $categories);
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required'
        ]);

        
        //upload image
        $file = $request->file('photo');
        $fileName = time(). $file->getClientOriginalName();
        $path = 'productsphotos';
        $file->move($path, $fileName);
        
        
        $product = new Product($request->all());
        $product->photo = $fileName;
        $product->save();
        $product->categories()->attach($request->input('categories'));
        
        //Product::create($request->all())->categories()->attach($request->input('categories'));
        return redirect()->route('products.index')
                         ->with('success', 'Added successfully');
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
       return view('home.edit' , ["product" => $product , "categories" => $categories]);
    }

    
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            //'photo' => 'required',
            'quantity' => 'required'
        ]);

        //if (co file) $request->hasFile('photo')
        //upload image
        //check if file photo exists and delete old photo
        if ($request->hasFile('photo')) {
            //xoa anh cu
            $oldPhoto = $product->photo;
            if ($oldPhoto != null) {
                unlink('productsphotos/'.$oldPhoto);
            }
            //upload anh moi
            $file = $request->file('photo');
            $fileName = time(). $file->getClientOriginalName();
            $path = 'productsphotos';
            $file->move($path, $fileName);
            $product->photo = $fileName;
        }
        else {
            $product->photo = $product->photo;
        }

        

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        //$product->photo = $request->photo;
        $product->quantity = $request->quantity;

        

        $product->save();
        $product->categories()->sync($request->input('categories'));

        return redirect()->route('products.index')
                         ->with('success', 'Updated successfully');
    }

    
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->categories()->detach();
        Product::destroy($product->id);
        return redirect()->route('products.index')
                         ->with('success', 'Delete successfully');
    }
}
