<?php

namespace App\Http\Controllers;

use App\Helpers\CommonHelper;
use App\Models\shipment;
use App\Models\shipment_document;
use Carbon\Carbon;
use Illuminate\Http\Request;

class phoneShipmentDriverController extends Controller
{
    public function shipmentPickupList(Request $request){


        $prick_up_date=date('Y-m-d', strtotime($request->date) );
        $shipment_list=shipment::where('pickup_time', $prick_up_date)
            ->orderBy('status', 'ASC')
            ->get();
        $total_pickedup=shipment::where('pickup_time', $prick_up_date)
            ->orderBy('status', 'ASC')
            ->where('status', 1)
            ->count();
        $total_list=shipment::where('pickup_time', $prick_up_date)
            ->orderBy('status', 'ASC')
            ->count();
        return view('phone.driver_shipment_list')->with(compact('shipment_list','total_list','total_pickedup','prick_up_date'));
    }

    public function shipmentPickedup(Request $request){
        $shipment=shipment::find($request->shipment_id);
        $shipment->status=1;
        $shipment->save();
        return redirect()->back();
    }

    public function shipmentDocument(Request $request){

        $shipment_id=$request->shipment_id;

        return view('phone.documents_upload')->with(compact('shipment_id'));
    }

    public function shipmentDocumentStore(Request $request){

        foreach ($request->bill_of_lading as $key => $image) {
            $img = $image;
            $folderPath = CommonHelper::getUploadPath('shipment_documents').'shipment-id-' . $request->shipment_id;
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $uniqid = uniqid();
            $file = $folderPath. '.' . $image_type;
            file_put_contents($file, $image_base64);

            $shipmentDocuments=new shipment_document();
            $shipmentDocuments->shipment_id=$request->shipment_id;
            $shipmentDocuments->image=$file;
            $shipmentDocuments->save();
        }

        return redirect()->back()->with('success','Documents successfully Uploaded');


    }

    public function shipmentPickupMap(Request $request){
        $location=shipment::where('from_lat','!=' ,null)->where('pickup_time',$request->date)->orderBy('distance','ASC')->get();

        $location_arr=[];

        foreach ($location as $list){
            array_push($location_arr,[$list->from_lat,$list->from_lng]);
        }


        return view('phone.map')->with(compact('location','location_arr'));
    }
}
