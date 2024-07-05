<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\cart;

use function PHPUnit\Framework\fileExists;

class AdminController extends Controller
{

    public function index(){
        return view('admin.index');
    }

    //Category Backend Start
    public function view_category(){
        return view('admin.category',['category'=>category::get() ]);
    }

    public function add_category(Request $request){
        $category = new category;
        $category->category_name = $request->category;

        $image = $request->image;
        if($image){
            $imageName = time().'.'. $image->getClientOriginalExtension();
            $request->image->move('categories',$imageName);
            $category->category_thumbnail = $imageName;

        }

        $category->save();
        toastr()->timeOut(15000)->closeButton()->addsuccess('Category Successfully Added.');

        return redirect()->back();
    }

    public function delete_category($id){
        $data = category::find($id);
        $data->delete();
        toastr()->timeOut(15000)->closeButton()->addwarning('Category Successfully Deleted.');
        return redirect()->back();
    }

    public function edit_category($id){
        $data = category::find($id);
        return view('admin.edit_category',compact('data'));

    }

    public function update_category(Request $request,$id){
        $data = category::find($id);
        $data->category_name = $request->category;

        $image = $request->image;
        if($image){
            $imageName = time().'.'. $image->getClientOriginalExtension();
            $request->image->move('categories',$imageName);
            $data->category_thumbnail = $imageName;

        }

        $data->save();
        toastr()->timeOut(15000)->closeButton()->addsuccess('Category Successfully Updated!');
        return redirect('/view_category');

    }//Category Backend End

    // Product Backend Start

    public function add_product(){
        $category = category::all();
        return view('admin.add_product', compact('category') );
    }

    public function upload_product(Request $request){
        $data = new product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $image = $request->image;
        if($image){
            $imageName = time().'.'. $image->getClientOriginalExtension();
            $request->image->move('products',$imageName);
            $data->image = $imageName;
        }


        $data->save();

        toastr()->timeOut(15000)->closeButton()->addsuccess('Product Successfully Added.');
        return redirect()->back();
             }

        public function view_product(){
            $product = product::paginate(5);
            return view('admin.view_product',compact('product'));
        }

        public function edit_product($id){
            $product = product::find($id);
            $category = category::all();

            return view('admin.edit_product',compact('product','category'));
        }

        public function update_product(Request $request, $id){
            $data = product::find($id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->quantity = $request->quantity;
            $data->category = $request->category;

            $image = $request->image;
            if($image){
                $imageName = time().'.'. $image->extension();
                $request->image->move('products',$imageName);
                $data->image = $imageName;
            }


            $data->save();

            toastr()->timeOut(15000)->closeButton()->addsuccess('Product Successfully Updated.');
            return redirect()->back();
                 }

                 public function delete_product($id){
                    $data = product::find($id);

                    // Delete cart items that reference the product
                    cart::where('product_id', $id)->delete();

                    $image_path = public_path('products/'. $data->image);

                    if(fileExists($image_path)){
                        unlink($image_path);
                    }

                    $data->delete();

                    toastr()->timeOut(15000)->closeButton()->addwarning('Product Successfully Deleted.');

                    return redirect()->back();
                }

        public function product_search(Request $request){
            $search = $request->search;
            $product = product::where('title','LIKE','%'. $search .'%')->orWhere('category','LIKE','%'. $search .'%')->paginate(1);
            return view('admin.view_product',compact('product'));
        }
}
