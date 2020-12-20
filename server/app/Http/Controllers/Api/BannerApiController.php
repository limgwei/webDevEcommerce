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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new BannerResource(Banner::with(['product','category'])->where('id',$id)->get());
    }

    

}
