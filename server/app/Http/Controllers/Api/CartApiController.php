<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Resources\CartResource;
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
    public function index()
    {
        $id = Auth::user()->id;
        
        return new CartResource(Cart::with(['product'])->where('user_id',$id)->get());
    }
    /**
     * Store a newly created cart in storage.
     * @bodyParam  product_id int  
     *  @bodyParam  quantity int 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->request->add(['variable', 'value']);
        $id = Auth::user()->id;
        $request->merge(["user_id"=>$id]);
        $cart = Cart::create($request->all());
        return $cart;
           
    }

    /**
     * Display the specified cart items.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Auth::user()->id;
        return new CartResource(Cart::with(['user','product'])->where('id',$id)->where('user_id',$id)->get());
    }

    /**
     * Update the specified cart items
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   int  $id
     *  @bodyParam  quantity int 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
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
    }
}
