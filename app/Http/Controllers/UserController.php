<?php

namespace App\Http\Controllers;

use App\Models\shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){

       $user_id= Auth::user()->id;
      $shipmentInfo=  shipment::where('user_id',$user_id)->get();
        return view('user.user_profile')->with(compact('shipmentInfo'));
    }

    public function paymentReport(){
        $user_id= Auth::user()->id;
        $shipmentInfo=  shipment::with('payment')->where('user_id',$user_id)->get();


        return view('user.payment_report')->with(compact('shipmentInfo'));
    }
}


