<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Models\Banner;
use Illuminate\Http\Request;
/**
 * @group Banner
 *
 * APIs for manage banners
 */
class BannerApiController extends Controller
{
    /**
     * Display Banner and link to category or product.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BannerResource(Banner::with(['category','product'])->get());
    }

    /**
     * Store new banner
     * @bodyParam image file[]
     * @bodyParam name string required
     * @bodyParam category_id int
     * @bodyParam product_id int
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
        return $banner;
    } //backend funciton

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new BannerResource(Banner::with(['product','category'])->where('id',$id)->get());
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

        
        $file = $request->file('image');
        $imageCount = count($request->file('image'));

        if ($banner->image) {
            foreach ($banner->image as $media) { 
                    $media->delete();  
            }
        }

        for($i = 0;$i<$imageCount;$i++){   
            $banner->addMedia($file[$i])->toMediaCollection('image');
       }

        return $banner;
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
}
