<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderItemResource;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::all();
        
        $orders = Order::with(['users'])->get();
        return view('order.index',compact('orders','users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        
        $order = Order::with(['users'])->where('id',$id)->first();
        return view('order.show',compact('order','users'));
    }

    
    public function getOrderItems($id)
    {

            $items = OrderItem::where('order_id', $id)->get();
            return view('order.items',compact('items'));
        
    }

}
