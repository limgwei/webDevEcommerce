<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Resources\UserResource;
use App\Models\User;
/**
 * @group User
 *
 * APIs for manage user
 */
class UserApiController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UserResource(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        $file = $request->file('image');
        $imageCount = count($request->file('image'));
        
         for($i = 0;$i<$imageCount;$i++){
              $user->addMedia($file[$i])->toMediaCollection('image');
              
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
        return new UserResource(User::where('id',$id)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $user = User::where('id',$id)->update($request->all);
        

       
        $file = $request->file('image');
        $imageCount = count($request->file('image'));

        if ($user->image) {
            foreach ($user->image as $media) { 
                    $media->delete();  
            }
        }

        for($i = 0;$i<$imageCount;$i++){
            
            $user->addMedia($file[$i])->toMediaCollection('image');
   
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
        User::where('id',$id)->delete();
    }
}
