<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use LengthException;

class OrderController extends Controller
{





    public function addOrder($user_id ,Request $request){

        $cart= Cart::where('user_id',$user_id)->pluck('product_id');

        $totalprice= Cart::where('user_id',$user_id)->pluck('product_price');
           $sum=0;
        foreach($totalprice as $price){
            $sum+=$price;
        }

        $order=new Order();
        $order->order_details=$cart;
        $order->order_location=$request->order_location;
        $order->order_status=$request->order_status;
        $order->order_total=$sum;
        $order->user_id=$user_id;
        $order->save();
        Cart::where('user_id',$user_id)->delete();

        return response()->json(['message'=>'Success Add  Order','state'=>200]);


// return $sum;

    }

    public function getAllOrders(){
        $orders=Order::all();
        return response()->json(['Orders'=>$orders,'state'=>200]);

    }

}
