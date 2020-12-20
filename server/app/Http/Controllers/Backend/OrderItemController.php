<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'order_id',
        // 'order_name',
        // 'quantity',
        // 'current_price'
        $orders = Order::all();
        
        $orderItems = OrderItem::with(['order'])->get();
        return view('orderItem.index',compact('orderItems','orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::all();
        
        $orderItem = OrderItem::with(['order'])->where('id',$id)->first();
        return view('orderItem.show',compact('orderItem','orders'));
    }


}
