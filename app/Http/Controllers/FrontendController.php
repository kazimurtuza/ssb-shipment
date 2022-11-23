<?php

namespace App\Http\Controllers;

use App\Models\product_type;
use App\Models\shipment_pickup_info;
use App\Models\stander_product_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $is_user_login=Auth::check();

        $product_type = product_type::where('status', 1)->get();
        $stander_product_category = stander_product_category::where('status', 1)->where('product_type', 'stander')->get();
        $mattress = stander_product_category::where('status', 1)->where('product_type', 'mattress')->get();
        $pickup_time_list=shipment_pickup_info::where('status',0)->get();

//        return view('frontend.index')->with(compact('product_type', 'stander_product_category', 'mattress','pickup_time_list','is_user_login'));
        return view('frontend.home1')->with(compact('product_type', 'stander_product_category', 'mattress','pickup_time_list','is_user_login'));

}
}
