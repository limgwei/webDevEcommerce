<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Category;
use App\Models\Product;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
/**
 * 
 *
 * 
 */
class BannerController extends Controller
{
    use MediaUploadingTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        $products = Product::all();
        
        $banners = Banner::with(['media','category','product'])->get();
        return view('banner.index',compact('banners','categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = Category::all();

        $products = Product::all();
        return view('banner.create',compact('categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = Banner::create($request->all());


        $file = $request->file('image');
        $imageCount = count($request->file('image'));
    
         for($i = 0;$i<$imageCount;$i++){
              $banner->addMedia($file[$i])->toMediaCollection('image');
              
         }
    

        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $categories = Category::all();

        $products = Product::all();
        
        $banner = Banner::with(['media','category','product'])->where('id',$id)->first();
        return view('banner.show',compact('banner','categories','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $categories = Category::all();

        $products = Product::all();

        $banner = Banner::with(['media','category','product'])->where('id',$id)->first();
        
        return view('banner.edit', compact('products', 'categories', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $banner->update(array($request->all()));
      
       
        $file = $request->file('image');
        

        if ($banner->image) {
            foreach ($banner->image as $media) { 
                    $media->delete();  
            }
        }

        if(!$file==null){
            $imageCount = count($request->file('image'));
            for($i = 0;$i<$imageCount;$i++){
                $banner->addMedia($file[$i])->toMediaCollection('image');
           }
        }

         

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::where('id',$id)->delete();
    }

    public function storeCKEditorImages(Request $request)
    {
        

        $model         = new Banner();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        
    }
}
