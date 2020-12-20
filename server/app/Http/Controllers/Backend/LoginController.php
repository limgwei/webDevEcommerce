<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke()
    {
        
    }

    public function loginForm(){
        return view('admin.login');
    }

    public function login(Request $request){
       $admin = Admin::where('username',$request->username)->where('password',$request->password)->get();
       if($admin->isEmpty()){
           $error = "Invalid username or password";
        return view('admin.login',['error'=>$error]);
       }

       session(['admin' => 'auth']);
       return redirect()->route('user.index');
    }

    public function logout(Request $request){

        $request->session()->forget('admin');
        return view('admin.login');
     }
}
