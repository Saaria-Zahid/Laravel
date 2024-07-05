<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\cart;
use App\Models\category;
use App\Models\order;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        return view('admin.index');

    }


    public function home(){

        $category = category::all();
        $products = product::all();
        $count = 0; // Default cart count


        return view('home.index',compact('products','category','count'));

    }



    public function login_home(){
        $category = category::all();
        $products = Product::all();
        $count = 0; // Default cart count

        if (Auth::check()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        }

        return view('home.index', compact('products','category', 'count'));


    }



     public function product_detail($id){
        $count = 0; // Default cart count
        if (Auth::check()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        }

        $product_data = product::find($id);
        return view('home.single_product',compact('product_data','count'));

    }

    public function add_cart($id){
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;

        $data = new cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;

        $data->save();

        return redirect()->back();

    }

    public function mycart(){


        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
            $cart =  Cart::where('user_id',$userid)->get();
        }

        $card_item = [];
        foreach($cart as $item){
        $productId = $item->product_id;
        if(isset($card_item[$productId])){
            $card_item[$productId]->quantity++;
        } else{
            $item->quantity=1;
            $card_item[$productId] = $item;
         }
        }

        return view('home.mycart',compact('count','card_item'));
    }

    public function remove_cart($id){
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function checkout(){
        $count = 0; // Default cart count

        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
            $cart =  Cart::where('user_id',$userid)->get();
        }

        $card_item = [];
        foreach($cart as $item){
        $productId = $item->product_id;
        if(isset($card_item[$productId])){
            $card_item[$productId]->quantity++;
        } else{
            $item->quantity=1;
            $card_item[$productId] = $item;
         }
        }

        return view('home.checkout',compact('count','card_item'));
    }

    public function confirm_order(Request $request){

        $firstname = $request->firstname;
        $lastname  = $request->lastname ;
        $address   = $request->address  ;
        $address2  = $request->address2 ;
        $phone     = $request->phone    ;
        $email     = $request->email    ;
        $country   = $request->country  ;
        $city      = $request->city     ;
        $state     = $request->state    ;
        $zip       = $request->zip      ;

        $user = Auth::user();
        $userid = $user->id;
        $cart =  Cart::where('user_id',$userid)->get();


        foreach($cart as $carts){
            $order = new order;
            $order->firstname = $firstname;
            $order->lastname = $lastname ;
            $order->address  = $address  ;
            $order->address2 = $address2 ;
            $order->phone  = $phone ;
            $order->email = $email ;
            $order->country  = $country  ;
            $order->city  = $city ;
            $order->state  = $state ;
            $order->zip  = $zip  ;
            $order->user_id  = $userid   ;
            $order->product_id = $carts->product_id  ;
            $order->save();
        }

        $cart_remove = cart::where('user_id', $userid)->get();
        foreach($cart_remove as $remove){
            $data = cart::find($remove->id);
            $data->delete();
        }

        return redirect()->back();

    }



}


