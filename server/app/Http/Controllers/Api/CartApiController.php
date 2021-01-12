<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Resources\CartResource;
use App\Models\DiscountProduct;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * @group Cart
 *
 * APIs for manage cart
 */

class CartApiController extends Controller
{
   
    /**
     * Display a listing of the Cart products where user
     *
     * @return \Illuminate\Http\Response
     */
    public function index($token)
    {  
        $user = User::where('remember_token',$token)->first();
        
        $id = $user->id;
        $carts = Cart::with(['product'])->where('user_id',$id)->get();
        
        $date = Carbon::now()->format('Y-m-d');
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();

        foreach($discountProducts as $discountProduct){
            
            foreach($carts as $cart){
                if($cart->product_id==$discountProduct->product_id){
                    $cart->product->price = $cart->product->price - $discountProduct->value;
                }
            }
         }

        return new CartResource($carts);
    }
    /**
     * Store a newly created cart in storage.
     * @bodyParam  product_id int  
     *  @bodyParam  quantity int 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$token)
    {
        //$request->request->add(['variable', 'value']);
        $user = User::where('remember_token',$token)->first();
        $id = $user->id;
        
        $request->merge(["user_id"=>$id]);
        $cart = Cart::where('user_id',$id)->where('product_id',$request->product_id)->first();
        if($cart){
          
            $cart->quantity += $request->quantity;
            $product = Product::where('id',$request->product_id)->first();
            if($product->quantity<$cart->quantity){
                $cart->quantity = $product->quantity;
            }
            $cart->save();
        }
        else{
            $cart = Cart::create($request->all());
        }    
        return $cart;
           
    }

    /**
     * Update the specified cart items
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   int  $id
     *  @bodyParam  quantity int 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$token)
    {
        $user = User::where('remember_token',$token)->first();
        $user_id = $user->id;
        $request->merge(["user_id"=>$user_id]);
        
        $cart = Cart::where('id',$id)->update($request->all());
        return $cart;
    }

    /**
     * Remove the specified product from cart
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::where('id',$id)->delete();
        return 'success';
    }

}
