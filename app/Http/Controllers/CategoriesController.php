<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index' , ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('categories.create');
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
           
        ]);

        
        //upload image
    
        
        $categories = new Category($request->all());
      
        $categories->save();
      
        
        //Product::create($request->all())->categories()->attach($request->input('categories'));
        return redirect()->route('categories.index')
                         ->with('success', 'Added successfully');
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
       
       return view('categories.edit' , ["categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
     {
    $categories = Category::find($id);

        $request->validate([
            'name' => 'required',
            
        ]);

        $categories->name = $request->name;
  
        $categories->save();
      
        return redirect()->route('categories.index')
                         ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
       
        Category::destroy($categories->id);
        return redirect()->route('categories.index')
                         ->with('success', 'Delete successfully');
    }
}
