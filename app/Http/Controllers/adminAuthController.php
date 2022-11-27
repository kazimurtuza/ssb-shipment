<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminAuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function checkLogin(Request $request){


       $is_admin= admin::where('email',$request->email)->first();

       if($is_admin){
           if (Hash::check($request->password,$is_admin->password)) {
               Auth::guard('admin')->login($is_admin);
               return redirect('admin/shipment/list');
           }
       }else{
           return redirect()->back();
       }

       return redirect()->route('admin.login')->with('error','Email or password is invalid');

//        return view('admin.index');

    }

    public function logout(){
        
        Auth::guard('admin')->logout();
        return redirect('/')->with('success','successfully logout');
    }
}
