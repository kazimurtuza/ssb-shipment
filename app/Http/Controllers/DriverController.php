<?php

namespace App\Http\Controllers;

use App\Mail\driverShipmentListMail;
use App\Models\driver;
use App\Models\shipment;
use App\Models\shipment_pickup_info;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DriverController extends Controller
{
    public function index(){
        $driver=driver::where('status',1)->get();
        return view('driver.index')->with(compact('driver'));
    }

    public function create(Request $request){

        $driver=new driver();
        $driver->driver_name=$request->name;
        $driver->mobile=$request->phone;
        $driver->pay_status=0;
        $driver->email=$request->email;
        $driver->save();

        if($driver){
            return redirect()->back()->with('success','Driver Created successfully');
        }else{
            return redirect()->back()->with('success','error');
        }

    }

    /**
     *
     */
    public function pickupListMail(){
        $date=Carbon::now()->format('Y-m-d');


        $shipment_info=shipment_pickup_info::where('pickup_date',$date)->get()->first();

        if($shipment_info){
            $email=driver::find($shipment_info->driver_id)->email;
            Mail::to($email)->send(new driverShipmentListMail());
        }
    }
}
