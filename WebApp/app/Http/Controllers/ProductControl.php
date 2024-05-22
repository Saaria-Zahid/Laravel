<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class ProductControl extends Controller
{
  public function index()
 {
    
    return view('products.index', ['products'=>product::get()]);
 }

 public function adminpanel()
 {
    
    return view('products.admin', ['products'=>product::get()]);
 }
 public function create()
 {
    return view('products.add');
 }

 
 public function store(request $request)
 {
    //validation
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image' => 'required|mimes:jpeq,jpg,png,gif|max:10000'
    ]);

    //upload to db
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('products'), $imageName);

    $product = new product;
    $product->image = $imageName;
    $product->name = $request->name;
    $product->price = $request->price;    
    $product->description = $request->description;

    $product->save();
    return back()->withSuccess('Product Have Been Added');
}

public function edit($id){
   //  dd($id);
   $product = Product::where('id', $id)->first();
    return view('products.edit' , ['product' =>  $product]);
}

public function update(Request $request,$id){
   //  dd($request->all());

       //validation
       $request->validate([
         'name' => 'required',
         'description' => 'required',
         'price' => 'required',
         'image' => 'nullable|mimes:jpeq,jpg,png,gif|max:10000'
     ]);
 
     $product = Product::where('id', $id)->first();


if(isset($request->image)){
   $imageName = time().'.'.$request->image->extension();
   $request->image->move(public_path('products'), $imageName);
   $product->image = $imageName;
}
$product->price = $request->price;    

   $product->name = $request->name;
   $product->description = $request->description;

   $product->save();
   return back()->withSuccess('Product Have Been Updated');


}


}
