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
        
        $orders = Order::with(['user'])->get();
        
        return view('order.index',compact('orders','users'));
    }
    
    public function getOrderItems($id)
    {
            $order = Order::with(['user'])->where('id',$id)->first();
            $items = OrderItem::where('order_id', $id)->get();

            $order->receipt = strtotime($order->updated_at)+$id;
            $order->updated_date = date('Y-m-d',strtotime($order->updated_at));     
            

            return view('order.items',compact('items','order'));
        
    }

}
