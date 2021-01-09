<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
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
        
        return new ProductResource(Product::with(['sub_category'])->get());
    }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('id',$id)->get());
    }

     /**
     * Search by name
     *
     * @param  String  $name
     * @return \Illuminate\Http\Response
     */
    public function serach_name($name)
    {
        return new ProductResource(Product::with(['sub_category'])->where('name','LIKE',"%$name")->get());
    }

    /**
     * Display by subcategory
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('sub_category_id',$id)->get());
    }

     /**
     * Display latest product
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function product_latest()
    {
        return new ProductResource(Product::with(['sub_category'])->orderByDesc('created_at')->get());
    }

     /**
     * Display product order by name A-Z
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_name()
    {
        return new ProductResource(Product::with(['sub_category'])->orderBy('name')->get());
    }

     /**
     * Display product order by name Z-A
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_nameD()
    {
        return new ProductResource(Product::with(['sub_category'])->orderByDesc('name')->get());
    }

     /**
     * Display product order by price Low-High
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_price()
    {
        return new ProductResource(Product::with(['sub_category'])->orderBy('price')->get());
    }

     /**
     * Display product order by price High-Low
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_priceD()
    {
        return new ProductResource(Product::with(['sub_category'])->orderByDesc('price')->get());
    }

     /**
     * Display by subcategory and order by latest
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub_product_latest($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('sub_category_id',$id)->orderByDesc('created_at')->get());
    }

     /**
     * Display by subcategory and order by name A-Z
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub_order_by_name($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('sub_category_id',$id)->orderBy('name')->get());
    }

     /**
     * Display by subcategory and order by name Z-A
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub_order_by_nameD($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('sub_category_id',$id)->orderByDesc('name')->get());
    }

     /**
     * Display by subcategory and order by price Low-High
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub_order_by_price($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('sub_category_id',$id)->orderBy('price')->get());
    }

     /**
     * Display by subcategory and order by price High-Low
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub_order_by_priceD($id)
    {
        return new ProductResource(Product::with(['sub_category'])->where('sub_category_id',$id)->orderByDesc('price')->get());
    }


  

  


   
}
