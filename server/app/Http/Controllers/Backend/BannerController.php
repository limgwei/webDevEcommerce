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
        $categories = Category::all()->pluck('name', 'id');

        $product = Product::all()->pluck('name', 'id');
        
        $banner = Banner::with(['media','category','product'])->get();
        return view('banner.index',compact('banner','categories','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = Category::all()->pluck('name', 'id');

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


        $banner->addMedia(storage_path('tmp/uploads/' . $request->input('image')))->toMediaCollection('image');
    

        if ($media = $request->input('ck-media', false)) {
        Media::whereIn('id', $media)->update(['model_id' => $banner->id]);
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


        $categories = Category::all()->pluck('name', 'id');

        $product = Product::all()->pluck('name', 'id');
        
        $banner = Banner::with(['media','category','product'])->where('id',$id)->get();
        
        return view('banner.show',compact('banner','categories','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $categories = Category::all()->pluck('name', 'id');

        $products = Product::all()->pluck('name', 'id');

        $banner = Banner::with(['media','category','product'])->where('id',$id)->get();
        
        return view('banner.edit', compact('products', 'categories', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::where('id',$id)->update($request->all());
        $banner->update($request->all());

        if (count($banner->image) > 0) {
            foreach ($banner->image as $media) {
                if (!in_array($media->file_name, $request->input('image', []))) {
                    $media->delete();
                }
            }
        }

        $media = $banner->image->pluck('file_name')->toArray();

        foreach ($request->input('image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $banner->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('image');
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
