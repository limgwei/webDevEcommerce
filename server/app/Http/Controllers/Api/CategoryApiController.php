<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
/**
 * @group Category
 *
 * APIs for manage category
 */
class CategoryApiController extends Controller
{
    /**
     * 
     * Display all category
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CategoryResource(Category::all());
    }

    /**
     * Display the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CategoryResource(Category::where('id',$id)->get());
    }

}
