<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
/**
 * @group Users
 *
 * APIs for manage user
 */
class UserApiController extends Controller
{   

    /**
     * Display the specified user info.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        return new UserResource(User::where('id',$id)->get());
    }

   

     /**
     * Update the image
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam image file[]
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request,$token){
        $file = $request->file('image');
        
        $user = User::where('remember_token',$token)->first();
        if ($user->image) {
            foreach ($user->image as $media) { 
                    $media->delete();  
            }
        }
  
            $user->addMedia($file)->toMediaCollection('image');
          
       

       return $user;
       
    }   

    
     /**
     * Update the information
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $token)
    {   
        
        $user = User::where('remember_token',$token)->first();
        if($request->password){
            $user->fill([
                'password'=>Hash::make($request->password)
            ])->save(); 
        }
        else{
            $user->update($request->all());  
        }
        
    
    }

    public function storeCKEditorImages(Request $request)
    {
        

        $model         = new User();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        
    }
}
