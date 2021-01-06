<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products_sub_id = Product::where('sub_category_id','<>',0)->get();
       
        $sub_id = array();

        foreach($products_sub_id as $product_sub_id){
           
            if(!in_array($product_sub_id->sub_category_id,$sub_id)){
               
                array_push($sub_id,$product_sub_id->sub_category_id);
            }
            
        }
        
        $parent_subs = SubCategory::where('id','<>',0);
        
        
        foreach($sub_id as $sub){
           $parent_subs = $parent_subs->where('id','<>',$sub);
        }
        $parent_subs = $parent_subs->get();

        $categories = Category::all();
        $subcategories = SubCategory::with(['category','parent'])->get();
        return view('subcategory.index',compact('subcategories','parent_subs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products_sub_id = Product::where('sub_category_id','<>',0)->get();
       
        $sub_id = array();

        foreach($products_sub_id as $product_sub_id){
           
            if(!in_array($product_sub_id->sub_category_id,$sub_id)){
               
                array_push($sub_id,$product_sub_id->sub_category_id);
            }
            
        }
            $categories = Category::all();
      
        
            //$parent_subs = SubCategory::where('id','<>',$sub_id?$sub_id:0)->get();
            $parent_subs = SubCategory::where('id','<>',0);
        
        
            foreach($sub_id as $sub){
               $parent_subs = $parent_subs->where('id','<>',$sub);
            }
            $parent_subs = $parent_subs->get();

            return view('subcategory.create',compact('parent_subs','categories'));
        
        
       
     
    }

    /**
     * Store subcategory
     * category_id and parent_id only pick 1
     * @bodyParam image file[]
     * @bodyParam name string required
     * @bodyParam category_id
     * @bodyParam parent_id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategory::create($request->all());

        return redirect()->route('subcategory.index');
         //return redirect()->route('subcategory.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products_sub_id = Product::where('sub_category_id','<>',0)->get();
       
        $sub_id = array();

        foreach($products_sub_id as $product_sub_id){
           
            if(!in_array($product_sub_id->sub_category_id,$sub_id)){
               
                array_push($sub_id,$product_sub_id->sub_category_id);
            }
            
        }

        $parent_subs = SubCategory::where('id','<>',0);
        
        
        foreach($sub_id as $sub){
           $parent_subs = $parent_subs->where('id','<>',$sub);
        }
        $parent_subs = $parent_subs->get();
        
        $subcategories = SubCategory::with(['category','parent'])->where('id',$id)->first();

        $categories = Category::all();
        return view('subcategory.show',compact('subcategories','parent_subs','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products_sub_id = Product::where('sub_category_id','<>',0)->get();
       
        $sub_id = array();

        foreach($products_sub_id as $product_sub_id){
           
            if(!in_array($product_sub_id->sub_category_id,$sub_id)){
               
                array_push($sub_id,$product_sub_id->sub_category_id);
            }
            
        }

        $parent_subs = SubCategory::where('id','<>',0);
        
        
        foreach($sub_id as $sub){
           $parent_subs = $parent_subs->where('id','<>',$sub);
        }
        $parent_subs = $parent_subs->get();
        
        $subcategory = SubCategory::with(['category','parent'])->where('id',$id)->first();

        $categories = Category::all();
        return view('subcategory.edit',compact('subcategory','parent_subs','categories'));
    }

    /**
     * Update the specified resource in storage.
     * Update subcategory in storage.
     * category_id and parent_id only pick 1
     * @bodyParam image file[]
     * @bodyParam name string required
     * @bodyParam category_id
     * @bodyParam parent_id
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $subcategory->update($request->all);
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('sub_category_id',$id)->where('is_enable',1)->get();
        $subcategory=SubCategory::where('parent_id',$id)->where('is_enable',1)->get();

        if($product->isEmpty() && $subcategory->isEmpty()){
           
            $subcategory = SubCategory::find($id);
            $subcategory->is_enable = 0;
             $subcategory->save();
            return redirect()->route('subcategory.index');
        }
      
            $error = "You have to delete subcategory or product related before delete this subcategory.";
            return redirect()->route('subcategory.index',['error'=>$error]);
        
    }
}
