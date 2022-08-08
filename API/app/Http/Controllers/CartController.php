<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function get_User($id){
       $cart = Cart::where('user_id', $id)->first();

       return response()->json(['cart'=>$cart,'statu'=>200]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_product(Request $request)
    {
        $product=new Cart();
        $product->user_id=$request->user_id;
        $product->product_id=$request->product_id;
        $product->product_quantity=$request->product_quantity;
        $product->product_price=$request->product_price;
        $product->save();
        $cart=Cart::where('user_id',$request->user_id)->first();
        return response()->json(['message'=>'Success Add to Cart','Cart'=>$cart,'state'=>200]);
    }

    public function update_cart($id,Request $request){

        $updateCart = Cart::where('product_id' , $id)->first();
        $updateCart->product_quantity  = $request->product_quantity;
        $updateCart->product_price=$request->product_price;
        $updateCart->update();
        $cart=Cart::where('user_id',$id)->get();
        return response()->json(['message'=>'Success Update  Cart','Cart'=>$cart,'state'=>200]);

    }
    public function delete_product_cart($id , Request $request)
    {

        $deleteCart = Cart::find($id);

        $deleteCart->delete();

        $cart = Cart::where('user_id',$request->user_id)->get();
        return response()->json(['message'=>'Success  Delete product from Cart','Cart'=>$cart,'state'=>200]);

    }

    public function delete_cart($user_id )
    {
         Cart::where('user_id',$user_id)->delete();





        return response()->json(['message'=>'Success Delete  Cart','state'=>200]);

    }





}
