<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        $subCategory = SubCategory::create($request->all());

        $file = $request->file('image');
        $imageCount = count($request->file('image'));
        
         for($i = 0;$i<$imageCount;$i++){
              $subCategory->addMedia($file[$i])->toMediaCollection('image');
              
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::where('id',$id)->update($request->all);
        

       
        $file = $request->file('image');
        $imageCount = count($request->file('image'));

        if ($subCategory->image) {
            foreach ($subCategory->image as $media) { 
                    $media->delete();  
            }
        }

        for($i = 0;$i<$imageCount;$i++){
            
            $subCategory->addMedia($file[$i])->toMediaCollection('image');
   
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
