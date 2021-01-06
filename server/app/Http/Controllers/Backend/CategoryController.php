<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store category
     * @bodyParam image file[]
     * @bodyParam name string required
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());


    

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $category = Category::where('id',$id)->first();
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        
        return view('category.edit', compact( 'category'));
    }

    /**
     * Update the specified resource in storage.
     * @bodyParam image file[]
     * @bodyParam name string required
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {      
        $category->update(array($request->all()));
       return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $banner = Banner::where('category_id',$id)->get();
        $subcategory=SubCategory::where('category_id',$id)->where('is_enable',1)->get();;

        if($subcategory->isEmpty()){
            $banner->delete();
            $category = Category::find($id);
            $category->is_enable = 0;
             $category->save();
        
            return redirect()->route('category.index');
        }
        else{
            $error = "You have to delete banners or subcategory related before delete this category.";
            return redirect()->route('category.index',['error'=>$error]);
        }
        
    }
}
