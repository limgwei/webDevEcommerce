<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Resources\SubCategoryResource;
use App\Models\SubCategory;

/**
 * @group SubCategory
 *
 * APIs for manage SubCategory
 */

class SubCategoryApiController extends Controller
{
    /**
     * Display a listing of the subcategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = new SubCategoryResource(SubCategory::with(['category','parent'])->get());

        for($i=0;$i<$subCategories->count();$i++){

            $sub = new SubCategoryResource(SubCategory::with(['category','parent'])->where('parent_id',$subCategories[$i]['id'])->get());
            if($sub->isNotEmpty()){
                $subCategories[$i]['got_sub'] = true;
            }
            else{
                $subCategories[$i]['got_sub'] = false;
            }
        }
    
        return $subCategories;
    }

    /**
     * Display the specified subcategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $subCategories = new SubCategoryResource(SubCategory::with(['category','parent'])->where('id',$id)->get());

        for($i=0;$i<$subCategories->count();$i++){

            $sub = new SubCategoryResource(SubCategory::with(['category','parent'])->where('parent_id',$subCategories[$i]['id'])->get());
            if($sub->isNotEmpty()){
                $subCategories[$i]['got_sub'] = true;
            }
            else{
                $subCategories[$i]['got_sub'] = false;
            }
        }

        return $subCategories;
    }

    /**
     * Display the subcategory under a category 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filter_by_category($id){

        $subCategories = new SubCategoryResource(SubCategory::with(['category','parent'])->where('category_id',$id)->get());

        for($i=0;$i<$subCategories->count();$i++){

            $sub = new SubCategoryResource(SubCategory::with(['category','parent'])->where('parent_id',$subCategories[$i]['id'])->get());
            if($sub->isNotEmpty()){
                $subCategories[$i]['got_sub'] = true;
            }
            else{
                $subCategories[$i]['got_sub'] = false;
            }
        }
        
        return $subCategories;
    }

    /**
     * Display the subcategory under a subcategory
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filter_by_subcategory($id){

            $subCategories = new SubCategoryResource(SubCategory::with(['parent'])->where('parent_id',$id)->get());

            for($i=0;$i<$subCategories->count();$i++){

                $sub = new SubCategoryResource(SubCategory::with(['category','parent'])->where('parent_id',$subCategories[$i]['id'])->get());
                if($sub->isNotEmpty()){
                    $subCategories[$i]['got_sub'] = true;
                }
                else{
                    $subCategories[$i]['got_sub'] = false;
                }
            }

        return $subCategories;

    }


}
