<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DiscountProduct;
use App\Models\Product;
use Carbon\Carbon;
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
       
       
        $now = Carbon::now()->add(1,'days')->toDateString('Y-m-d');
        
        $discountProducts = DiscountProduct::with(['product'])->where([
            ['start_date','<=',$now],
            ['end_date','>=',$now]
        ])->get();
   
        
        return view('discountProduct.index',compact('discountProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allProducts = Product::where('id','<>',0)->where('is_enable',1);
   
        $now = Carbon::now()->add(1,'days')->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(['product'])->where([
            ['start_date','<=',$now],
            ['end_date','>=',$now]
        ])->get();
           
        foreach($discountProducts as $discountProduct){
            $allProducts = $allProducts->where('id','<>',$discountProduct->product_id);
        }

        $products = $allProducts->get();

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
        return redirect()->route('discountProduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('is_enable',1)->get();
        
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
        $products = Product::where('is_enable',1)->get();

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
        $discountProduct->update($request->all());
        return redirect()->route('discountProduct.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    public function delete($id)
    {
        DiscountProduct::where('id',$id)->delete();
        return redirect()->route('discountProduct.index');
    }
}
