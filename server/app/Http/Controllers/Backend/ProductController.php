<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\DiscountProduct;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $subcategories_with_parent = SubCategory::where('parent_id','<>',0)->get();
       
        $parent_id = array();

        foreach($subcategories_with_parent as $subcategory_with_parent){
           
            if(!in_array($subcategory_with_parent->parent_id,$parent_id)){
               
                array_push($parent_id,$subcategory_with_parent->parent_id);
            }
            
        }

        $subcategories = SubCategory::where('id','<>',0);
        foreach($parent_id as $parent){
           $subcategories = $subcategories->where('id','<>',$parent);
        }
        $subcategories = $subcategories->get();
        
        $products = Product::with(['media','sub_category'])->get();
        return view('product.index',compact('subcategories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $subcategories_with_parent = SubCategory::where('parent_id','<>',0)->get();
       
        $parent_id = array();
        //return $subcategories_with_parent;
        foreach($subcategories_with_parent as $subcategory_with_parent){
           
            if(!in_array($subcategory_with_parent->parent_id,$parent_id)){
               
                array_push($parent_id,$subcategory_with_parent->parent_id);
            }
            
        }

        $subcategories = SubCategory::where('id','<>',0);
        foreach($parent_id as $parent){
           $subcategories = $subcategories->where('id','<>',$parent);
        }
        $subcategories = $subcategories->get();
       
        
        

        return view('product.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        $file = $request->file('image');
        $imageCount = count($request->file('image'));
        
         for($i = 0;$i<$imageCount;$i++){
              $product->addMedia($file[$i])->toMediaCollection('image');
              
         }
         return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategories_with_parent = SubCategory::where('parent_id','<>',0)->get();
       
        $parent_id = array();

        foreach($subcategories_with_parent as $subcategory_with_parent){
           
            if(!in_array($subcategory_with_parent->parent_id,$parent_id)){
               
                array_push($parent_id,$subcategory_with_parent->parent_id);
            }
            
        }

        $subcategories = SubCategory::where('id','<>',0);
        foreach($parent_id as $parent){
           $subcategories = $subcategories->where('id','<>',$parent);
        }
        $subcategories = $subcategories->get();
        
        $product = Product::with(['media','sub_category'])->where('id',$id)->first();
        return view('product.show',compact('product','subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategories_with_parent = SubCategory::where('parent_id','<>',0)->get();
       
        $parent_id = array();

        foreach($subcategories_with_parent as $subcategory_with_parent){
           
            if(!in_array($subcategory_with_parent->parent_id,$parent_id)){
               
                array_push($parent_id,$subcategory_with_parent->parent_id);
            }
            
        }

        $subcategories = SubCategory::where('id','<>',0);
        foreach($parent_id as $parent){
           $subcategories = $subcategories->where('id','<>',$parent);
        }
        $subcategories = $subcategories->get();
        

       

        $product = Product::with(['media','sub_category'])->where('id',$id)->first();
        
        return view('product.edit', compact('product', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all);
        

       
        $file = $request->file('image');
        $imageCount = count($request->file('image'));

        if ($product->image) {
            foreach ($product->image as $media) { 
                    $media->delete();  
            }
        }

        for($i = 0;$i<$imageCount;$i++){
            
            $product->addMedia($file[$i])->toMediaCollection('image');
   
       }

       return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $banner = Banner::where('product_id',$id)->get();
        $discountProduct=DiscountProduct::where('product_id',$id)->get();
        
        if($banner->isEmpty() && $discountProduct->isEmpty()){
            $product = Product::find($id);
                $product->is_enable = 0;
                 $product->save();

            return redirect()->route('product.index');
        }
        else{
            $error = "You have to delete banners or discount product related before delete this product.";
            return redirect()->route('product.index',['error'=>$error]);
        }
        
      
    }

    public function storeCKEditorImages(Request $request)
    {
        

        $model         = new Product();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        
    }
}
