<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DiscountProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class DiscountProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $products = Product::all();
        $discountProducts = DiscountProduct::with(['product'])->get();
        return view('discountProduct.index',compact('discountProducts','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('discountProduct.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $products = Product::all();
        
        $discountProduct = DiscountProduct::with(['product'])->where('id',$id)->first();
        return view('discountProduct.show',compact('discountProduct','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::all();

        $discountProduct = DiscountProduct::with(['product'])->where('id',$id)->first();
        
        return view('discountProduct.edit', compact('products', 'discountProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,DiscountProduct $discountProduct)
    {
        $discountProduct->update(array($request->all()));
        return redirect()->route('discountProduct.index');
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
