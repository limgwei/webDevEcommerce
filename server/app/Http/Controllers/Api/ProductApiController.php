<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Resources\DiscountProductResource;
use App\Models\DiscountProduct;
use Carbon\Carbon;

/**
 * @group Product
 *
 * APIs for manage product
 */
class ProductApiController extends Controller
{
      /**
     * Display all products
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $date = Carbon::now()->format('Y-m-d');
        //return $date;
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
    }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Carbon::now()->format('Y-m-d');
        //return $date;
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->where('id',$id)->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
       
    }

     /**
     * Search by name
     *
     * @param  String  $name
     * @return \Illuminate\Http\Response
     */
    public function serach_name($name)
    {
        $date = Carbon::now()->format('Y-m-d');
        //return $date;
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->where('name','LIKE',"%$name")->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
    }

    /**
     * Display by subcategory
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub($id)
    {
        $date = Carbon::now()->format('Y-m-d');
        //return $date;
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->where('sub_category_id',$id)->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
    }

     /**
     * Display latest product
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function product_latest()
    {
        $date = Carbon::now()->format('Y-m-d');
        //return $date;
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->orderByDesc('created_at')->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);

        
    }

     /**
     * Display product order by name A-Z
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_name()
    {
        $date = Carbon::now()->format('Y-m-d');
        //return $date;
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->orderBy('name')->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
    }

     /**
     * Display product order by name Z-A
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_nameD()
    {
        $date = Carbon::now()->format('Y-m-d');

        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->orderByDesc('name')->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);

     
    }

     /**
     * Display product order by price Low-High
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_price()
    {

        $date = Carbon::now()->format('Y-m-d');
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->orderBy('price')->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
    }

     /**
     * Display product order by price High-Low
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_priceD()
    {
        $date = Carbon::now()->format('Y-m-d');
        $discountProducts = DiscountProduct::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();
        
        $products =  Product::with(['sub_category'])->orderByDesc('price')->get();
        foreach($discountProducts as $discountProduct){
            
           foreach($products as $product){
               if($product->id==$discountProduct->product_id){
                   $product->current_price = $product->price - $discountProduct->value;
               }
           }
        }
        return new ProductResource($products);
    }   
}
