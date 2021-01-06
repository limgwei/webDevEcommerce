<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderItemResource;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * @group Order
 *
 * APIs for manage order
 */
class OrderApiController extends Controller
{
     /**
     * Display a listing of the order
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //new ItemManagementResource(ItemManagement::with(['sub_category', 'category', 'merchant'])->get());
        $id = Auth::user()->id;
        return new OrderResource(Order::where('user_id',$id)->get());
    }
    /**
     * Store a newly created order in storage

     * @param  \Illuminate\Http\Request  $request
     * @bodyParam  price  double required
     * @bodyParam  address string required
     * @bodyParam delivery_charge double required
     * @bodyParam comment string
     * @bodyParam orderItems object[] required
     * for orderItems object require order_name,current_price,quanitty
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $id = Auth::user()->id;
        $request->merge(["user_id"=>$id]);
        $request->merge(["status"=>1]);
        $order = Order::create($request->all());

        foreach($request->orderItems as $orderItem){
            $orderItem['order_id'] = $order->id;
            OrderItem::create($orderItem);
        }
        return $order;
           
    }

    /**
     * Display the specified order
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        return new OrderResource(Order::with(['user'])->where('id',$id)->get());
    }

    /**
     * Update the specified order
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @bodyParam status int required
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $order = Order::where('id',$id)->update($request->all());
        return $order;
    }   

 /**
     * display order items
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam  order_id  int
     * @return \Illuminate\Http\Response
     */
    public function getOrderItems(Request $request)
    {   
        $id = Auth::user()->id;
        if($id){
            $items = new OrderItemResource(OrderItem::where('order_id', $request->order_id)->get());
            return $items;
        }
    }
}
