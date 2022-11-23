<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

    public function register(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        Auth::login($user);

        return redirect('home');

    }

    public  function userlogin(Request $request){

        $is_user= User::where('email',$request->email)->first();


        if($is_user){
            if (Hash::check($request->password,$is_user->password)) {
                Auth::login($is_user);
               return  redirect()->back()->with('success','successfully login');
            }
        }
        return redirect()->back()->with('error','email or password is incorrect');


    }

    public  function userLogout(){
        Auth::logout();
        return redirect('home');
    }




}
