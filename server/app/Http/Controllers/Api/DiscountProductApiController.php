<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiscountProductResource;
use App\Models\DiscountProduct;
use Illuminate\Http\Request;

/**
 * @group Discount Product
 *
 * APIs for manage discount product
 */
class DiscountProductApiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //new ItemManagementResource(ItemManagement::with(['sub_category', 'category', 'merchant'])->get());
        return new DiscountProductResource(DiscountProduct::with(['product','type'])->get());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $discountProduct = DiscountProduct::create($request->all());
        return $discountProduct;
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return new DiscountProductResource(DiscountProduct::with(['product','type'])->where('id',$id)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $discountProduct = DiscountProduct::where('id',$id)->update($request->all());
        return $discountProduct;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DiscountProduct::where('id',$id)->delete();
    }
}
