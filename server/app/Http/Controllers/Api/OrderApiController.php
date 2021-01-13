<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderItemResource;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
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
    public function index($token)
    {
        //
        //new ItemManagementResource(ItemManagement::with(['sub_category', 'category', 'merchant'])->get());
        
        $user = User::where('remember_token',$token)->first();
        $id = $user->id;
        $orders = Order::where('user_id',$id)->get();
        foreach($orders as $order){
           
            $order->updated_date = date('Y-m-d',strtotime($order->updated_at));
        }
        return new OrderResource($orders);
    }
    /**
     * Store a newly created order in storage

     * @param  \Illuminate\Http\Request  $request
     * @bodyParam  price  double required
     * @bodyParam  address string required
     * @bodyParam delivery_charge double required
     * @bodyParam comment string
     * @bodyParam orderItems object[] required
     * for orderItems object require product_id,oorder_name,current_price,quanitty,cartId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$token)
    {    
        
        
        $user = User::where('remember_token',$token)->first();
        $id = $user->id;
        $request->merge(["user_id"=>$id]);
        $request->merge(["status"=>1]);
        $order = Order::create($request->all());

        foreach($request->orderItems as $orderItem){
           
            $orderItem['order_id'] = $order->id;
            OrderItem::create($orderItem);
            
            Cart::where('id',$orderItem['cartId'])->delete();

            $product = Product::where('id',$orderItem['product_id'])->first();
            $product->quantity = $product->quantity - $orderItem['quantity'];
            $product->save();

            $carts = Cart::where('product_id',$orderItem['product_id'])->get();
            foreach($carts as $cart){
                if($cart->quantity > $product->quantity){
                    $cart->quantity = $product->quantity;
                    $cart->save();
                }
            }
            
        }

        return response(200);
           
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
    public function getOrderItems($id)
    {   
            $order = Order::where('id',$id)->first();
            $items = (OrderItem::where('order_id', $id)->get());
            
            foreach($items as $item){
                $item->receipt = strtotime($item->updated_at)+$id;
                $item->updated_date = date('Y-m-d',strtotime($item->updated_at));
                $item->address = $order->address;
            }
     
            return $items;
       
            return new OrderItemResource($items);
        
    }



    public function stripePost(Request $request)
    {   
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount,
                "currency" => "myr",
                "source" => $request->stripeToken,
                "description" => "Furniture Price" 
        ]);
  
        Session::flash('success', 'Payment successful!');
        

        
        return back();
    }

    public function getStripeKey(){
        return env('STRIPE_KEY', 'pk_test_51I7Ps9JjzffrEIKdmsKl2bWO60jfWWX2PJigQ8sQvrebjjeN1zYPp9aS1wCjkDO97CH0dxcoFwImfqBnICE0c9TF0041T2sCK6');
    }

    public function getStripeSecret(){
        return env('STRIPE_SECRET', 'sk_test_51I7Ps9JjzffrEIKdaPF6jcawJ4vJsAvNVYVNtZjp2EqzxmJy00YyxjBn6gb0DnyFFCxWSqYFwECYzEo6yURuZuEh00aOn35m3V');
    }
}
