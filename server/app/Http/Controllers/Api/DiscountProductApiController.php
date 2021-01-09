<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiscountProductResource;
use App\Http\Resources\ProductResource;
use App\Models\DiscountProduct;
use App\Models\Product;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * @group Discount Product
 *
 * APIs for manage discount product
 */
class DiscountProductApiController extends Controller
{
     /**
     * Display a list of discount Product
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(['product'])->where([
            ['start_date','>=',$now],
            ['end_date','<=',$now]
        ])->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);
    }

     /**
     * Display the specified discount product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(['product'])->where([
            ['id',$id],
            ['start_date','>=',$now],
            ['end_date','<=',$now]
            ])->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);
    }

     /**
     * Display by subcategory
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sub($id)
    {   
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(
            ['product'=>function($query) use ($id){
               $query->select('*')->where('sub_category_id',$id); 
            }]
            )
            ->where([
                ['start_date','>=',$now],
                ['end_date','<=',$now]
                ])
                ->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);       
    }

     /**
     * Display latest product
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function product_latest()
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(
            ['product'=>function($query){
               $query->select('*')->orderByDesc('created_at'); 
            }]
            )->where([
                ['start_date','>=',$now],
                ['end_date','<=',$now]
                ])
                ->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts); 
    }

     /**
     * Display product order by name A-Z
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_name()
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(
            ['product'=>function($query){
               $query->select('*')->orderBy('name'); 
            }]
            )->where([
                ['start_date','>=',$now],
                ['end_date','<=',$now]
                ])
                ->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);
    }

     /**
     * Display product order by name Z-A
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_nameD()
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(
            ['product'=>function($query){
               $query->select('*')->orderByDesc('name'); 
            }]
            )->where([
                ['start_date','>=',$now],
                ['end_date','<=',$now]
                ])
                ->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);
    }

     /**
     * Display product order by price Low-High
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_price()
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(
            ['product'=>function($query){
               $query->select('*')->orderBy('price'); 
            }]
            )->where([
                ['start_date','>=',$now],
                ['end_date','<=',$now]
                ])
                ->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);
    }

     /**
     * Display product order by price High-Low
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function order_by_priceD()
    {
        $now = Carbon::now()->toDateString('Y-m-d');
        $discountProducts = DiscountProduct::with(
            ['product'=>function($query){
               $query->select('*')->orderByDesc('price'); 
            }]
            )->where([
                ['start_date','>=',$now],
                ['end_date','<=',$now]
                ])
                ->get();

        foreach($discountProducts as $discountProduct){
            $discountProduct->product->current_price = $discountProduct->product->price - $discountProduct->value;
        }


        return new DiscountProductResource($discountProducts);
    }

    //  /**
    //  * Display by subcategory and order by latest
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sub_product_latest($id)
    // {
    //     $now = Carbon::now()->toDateString('Y-m-d');
    //     return new DiscountProductResource(DiscountProduct::with(
    //         ['product'=>function($query) use ($id){
    //            $query->select('*')->where('sub_category_id',$id)->orderBy('created_at'); 
    //         }]
    //         )->where([
    //             ['start_date','>=',$now],
    //             ['end_date','<=',$now]
    //             ])
    //             ->get());
    // }

    //  /**
    //  * Display by subcategory and order by name A-Z
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sub_order_by_name($id)
    // {
    //     $now = Carbon::now()->toDateString('Y-m-d');
    //     return new DiscountProductResource(DiscountProduct::with(
    //         ['product'=>function($query) use ($id){
    //            $query->select('*')->where('sub_category_id',$id)->orderBy('name'); 
    //         }]
    //         )
    //         ->where([
    //             ['start_date','>=',$now],
    //             ['end_date','<=',$now]
    //             ])
    //             ->get());
    // }

    //  /**
    //  * Display by subcategory and order by name Z-A
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sub_order_by_nameD($id)
    // {
    //     $now = Carbon::now()->toDateString('Y-m-d');
    //     return new DiscountProductResource(DiscountProduct::with(
    //         ['product'=>function($query) use ($id){
    //            $query->select('*')->where('sub_category_id',$id)->orderByDesc('name'); 
    //         }]
    //         )->where([
    //             ['start_date','>=',$now],
    //             ['end_date','<=',$now]
    //             ])
    //             ->get());
    // }

    //  /**
    //  * Display by subcategory and order by price Low-High
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sub_order_by_price($id)
    // {
    //     $now = Carbon::now()->toDateString('Y-m-d');
    //     return new DiscountProductResource(DiscountProduct::with(
    //         ['product'=>function($query) use ($id){
    //            $query->select('*')->where('sub_category_id',$id)->orderBy('price'); 
    //         }]
    //         )->where([
    //             ['start_date','>=',$now],
    //             ['end_date','<=',$now]
    //             ])
    //             ->get());
    // }

    //  /**
    //  * Display by subcategory and order by price High-Low
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sub_order_by_priceD($id)
    // {
    //     $now = Carbon::now()->toDateString('Y-m-d');
    //     return new DiscountProductResource(DiscountProduct::with(
    //         ['product'=>function($query) use ($id){
    //            $query->select('*')->where('sub_category_id',$id)->orderByDesc('price'); 
    //         }]
    //         )->where([
    //             ['start_date','>=',$now],
    //             ['end_date','<=',$now]
    //             ])
    //             ->get());
    // }

}
