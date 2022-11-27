<?php

namespace App\Http\Controllers;

use App\Mail\customerMail;
use App\Mail\customerMailo;
use App\Models\driver;
use App\Models\DropShipment;
use App\Models\product_type;
use App\Models\shipment;
use App\Models\shipment_detail;
use App\Models\shipment_pickup_info;
use App\Models\shipping_info;
use App\Models\stander_product_category;
use App\Models\stripe_payment;
use App\Models\User;
use App\Models\UserSavedPaymentMethod;
use Carbon\Carbon;
use Faker\ORM\Spot\ColumnTypeGuesser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe;

class ShipmentController extends Controller
{
    public function shipment()
    {
        $today= date('Y-m-d',strtotime(Carbon::now())) ;
        $product_type = product_type::where('status', 1)->get();
        $stander_product_category = stander_product_category::where('status', 1)
            ->where('product_type', 'stander')->get();
        $mattress = stander_product_category::where('status', 1)
            ->where('product_type', 'mattress')->get();

        $pickup_time_list = shipment_pickup_info::where('status', 0)
            ->where('pickup_date','>=',$today)
            ->get();
        $pickup_time_count=$pickup_time_list->count();

        $drop_of = DropShipment::where('status', 0)->get();

        $last_shipping_data =shipping_info::where('status',0)->orderBy('shipping_date','DESC')->get()->first()->shipping_date;
        $last_shipping=  date('Y-m-d', strtotime('-1 day', strtotime($last_shipping_data)));
        $user_stripe_list = UserSavedPaymentMethod::where('user_id', Auth::id())->get();

        $total_card=$user_stripe_list->count();

        return view('frontend.shipment_create')->with(compact('product_type', 'stander_product_category', 'mattress', 'pickup_time_list', 'drop_of', 'user_stripe_list','total_card','last_shipping','pickup_time_count'));
    }

    public function shipment_price_calculator()
    {
        $product_type = product_type::where('status', 1)->get();
        $stander_product_category = stander_product_category::where('status', 1)->where('product_type', 'stander')->get();
        $mattress = stander_product_category::where('status', 1)->where('product_type', 'mattress')->get();
        return view('shipment.shipment_price_calculator')->with(compact('product_type', 'stander_product_category', 'mattress'));
    }

    public function charity_shipment()
    {
        $today= date('Y-m-d',strtotime(Carbon::now())) ;
        $product_type = product_type::where('status', 1)->get();
        $stander_product_category = stander_product_category::where('status', 1)->where('product_type', 'stander')->get();
        $mattress = stander_product_category::where('status', 1)->where('product_type', 'mattress')->get();
        $pickup_time_list = shipment_pickup_info::where('status', 0)->where('pickup_date','>=',$today)
            ->get();
        $drop_of = DropShipment::where('status', 0)->get();

        $pickup_time_count=$pickup_time_list->count();

        $last_shipping_data =shipping_info::where('status',0)->orderBy('shipping_date','DESC')->get()->first()->shipping_date;


        $last_shipping=  date('Y-m-d', strtotime('-1 day', strtotime($last_shipping_data)));


        //        return view('shipment.charity_shipment')->with(compact('product_type', 'stander_product_category', 'mattress','pickup_time_list'));
        return view('frontend.shipment_donetion')->with(compact('product_type', 'stander_product_category', 'mattress', 'pickup_time_list', 'drop_of','last_shipping','pickup_time_count'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function charityPay(Request $request)
    {

        $shipping_id=0;

        if(isset($request->is_drop_off) && ($request->is_drop_off == '1')) {
            $date_list=shipping_info::where('status',0)->orderBy('shipping_date','ASC')->select('shipping_date','id')->get();
            foreach ($date_list as $itemdata) {
                if(strtotime($request->drop_off_date)<= strtotime($itemdata->shipping_date)){
                    $shipping_id=$itemdata->id;
                }
            }

        } else {
            $pickup_info = shipment_pickup_info::with('shipping')->where('pickup_date', $request->pickup_time)->get()->first();

            $shipping_id=$pickup_info->shipping->id;
        }
        if($shipping_id==0){
            return redirect()->back()->with('error','NO shipping container available For this drop off');
        }



        $shipment = new shipment();
        $shipment->user_id = Auth::user()->id;
        $shipment->stripe_payment_id = 0;
        $shipment->shipping_id = $shipping_id;
        $shipment->shipment_no = 1000;
        $shipment->from_address = $request->sender_address;
        $shipment->total_item = sizeof($request->product_category);
        $shipment->stripe_payment_id = 0;
        $shipment->phone = $request->sender_phone;
        $shipment->sender_name = $request->sender_name;
        $shipment->sender_mail = $request->sender_email;

        $shipment->to_address = $request->receiver_address;
        $shipment->receiver_name = $request->receiver_name;
        $shipment->receiver_phone = $request->receiver_phone;
        $shipment->receiver_email = $request->receiver_email;

        $shipment->distance = $request->distance;
        $shipment->for_charity = 1;

        if ($request->is_drop_off) {
            $shipment->drop_off_id = $request->drop_off_id;
            $shipment->is_drop_off = $request->is_drop_off;
            $shipment->drop_off_address = $request->drop_off_id==1?'Renton, WA -  Saturdays':'Lynnwood, WA -  Sundays';
            $shipment->pickup_time = $request->drop_off_date;
        } else {
            $shipment->pickup_time = $request->pickup_time;
        }

        $shipment->from_lat = $request->from_lat;
        $shipment->from_lng = $request->from_lng;
        $shipment->total_bill = 0;
        $shipment->payment_status = 2;
        $shipment->save();


        $custom_box_index = 0;
        $weight_index = 0;
        $tv_size_index = 0;
        $standar_type_id_index = 0;
        $mattress_category_id = 0;
        $unit_price = 0;
        $weight_pound = 0;
        $shipment_total_price = 0;
        $shipmentTotalPrice = 0;


        foreach ($request->product_category as $key => $category_id) {
            if ($category_id == 1 || $category_id == 2 || $category_id == 5) {

                if ($category_id == 1) {
                    //standard product
                    $product_info = stander_product_category::find($request->standar_type[$standar_type_id_index]);
                    $l = $product_info->length;
                    $w = $request->weidth;
                    $h = $request->height;
                    $weight_pound = $this->poundCalculation($l, $w, $h);
                    $unit_price = $product_info->price;
                } else {
                    //Custom size and other
                    $l = $request->l[$custom_box_index];
                    $w = $request->w[$custom_box_index];
                    $h = $request->h[$custom_box_index];
                    $weight_pound = $this->poundCalculation($l, $w, $h);
                    $unit_price = $this->poundPriceCalculation($weight_pound);
                }

            }

            if ($category_id == 3 || $category_id == 4) {
                //Mattress and tv
                if ($category_id == 3) {
                    //Mattress
                    $product_matt_info = stander_product_category::find($request->mattress_category[$mattress_category_id]);
                    $unit_price = $product_matt_info->price;
                }

                if ($category_id == 4) {
                    //tv
                    $unit_price = $this->tvPrice($request->tv_size[$tv_size_index]);

                }
            }

            $productTypeinfo = product_type::find($category_id);
            $shipment_details = new shipment_detail();
            $shipment_details->shipment_id = $shipment->id;
            $shipment_details->category_id = $category_id;
            $shipment_details->name = $productTypeinfo->name;
            $shipment_details->quantity = $request->qty[$key];


            if ($category_id != 3 && $category_id != 4) {
                $shipment_details->weight = $request->weight[$weight_index];
                $weight_index += 1;
            }

            //Custom size and other
            if ($category_id == 2 || $category_id == 5 || $category_id == 1) {
                $shipment_details->box_length = $l;
                $shipment_details->box_width = $w;
                $shipment_details->box_height = $h;

                if ($category_id == 1) {
                    $shipment_details->sub_category_id = $request->standar_type[$standar_type_id_index];
                    $standar_type_id_index += 1;
                } else {
                    $custom_box_index += 1;
                }

            }
            if ($category_id == 4) {
                //tv
                $shipment_details->size = $request->tv_size[$tv_size_index];
                $tv_size_index += 1;
            }
            if ($category_id == 3) {
                // Mattress
                $product_matt_info = stander_product_category::find($request->mattress_category[$mattress_category_id]);
                $shipment_details->size = $product_matt_info->name;
                $shipment_details->sub_category_id = $request->mattress_category[$mattress_category_id];
                $mattress_category_id += 1;
            }
            $shipment_details->uni_price = $unit_price;
            $shipment_details->total_price = $unit_price * $request->qty[$key];
            $shipment_details->status = 1;
            $shipment_details->save();
            $shipment_total_price += $unit_price * $request->qty[$key];
        }
        if(isset($request->is_drop_off) && ($request->is_drop_off == '0')) {
            $shipment_total_price= $shipment_total_price+20;
        }

        $shipment->shipment_no = 1000 + $shipment->id;
        $shipment->total_bill = $shipment_total_price;
        $shipment->save();

        //        shipment

        \Mail::to($request->sender_email)->send(new customerMail($shipment->id));


//        return redirect()->back()->with('success', 'Thank you for your Donation ');
        return redirect()->back()->with('donation_success', [$shipment_total_price, 'Thank you for your Donation']);

    }


//   calculation function
    function poundCalculation($w, $l, $h)
    {
        return ($w * $l * $h) / 165;
    }

    function tvPrice($inc)
    {
        $tv_price = 0;
        if ($inc <= 60) {
            $tv_price = 200;
        }
        if (($inc > 60) && ($inc <= 65)) {
            $tv_price = 250;
        }
        if (($inc > 65) && ($inc <= 70)) {
            $tv_price = 300;

        }
        if (($inc > 70)) {
            $tv_price = 350;

        }
        return $tv_price;
    }


    function poundPriceCalculation($pound)
    {
        if ($pound < 23) {
            return 50;
        }
        if (($pound >= 23) && ($pound <= 500)) {
            return 2.2 * (0.998) * ($pound - 1);
        }
        if (($pound > 500)) {
            return $pound * 0.81;
        }
    }


// calculation function

    public function shipmentContainer()
    {

        $container_info = shipping_info::get();
        $driver = driver::where('status', 1)->get();

        return view('shipment.shipment_container_info')->with(compact('container_info', 'driver'));
    }

    public function shipmentContainerCreate(Request $request)
    {

        $code_esixt = shipping_info::where('container_no', $request->shipping_code)->get()->first();

        if ($code_esixt) {
            return redirect()->back()->with('error', 'Container Number Already exist');
        }
        $shipping_info = new shipping_info();
        $shipping_info->container_name = $request->container_name;
        $shipping_info->shipping_date = $request->shipping_date;
        $shipping_info->delivery_date = $request->delivery_date;
        $shipping_info->container_no = $request->shipping_code;
        $shipping_info->status = 0;
        $shipping_info->save();

        return redirect()->back()->with('success', 'Shipment Container Successfully Created');

    }

    public function shipmentPayment(Request $request)
    {

//        return $request->is_drop_off;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $shipping_id=0;

        if(isset($request->is_drop_off) && ($request->is_drop_off == '1')) {
            $date_list=shipping_info::where('status',0)->orderBy('shipping_date','ASC')->select('shipping_date','id')->get();
            foreach ($date_list as $itemdata) {
                if(strtotime($request->drop_off_date)<= strtotime($itemdata->shipping_date)){
                    $shipping_id=$itemdata->id;
                }
            }

        } else {
            $pickup_info = shipment_pickup_info::with('shipping')->where('pickup_date', $request->pickup_time)->get()->first();

            $shipping_id=$pickup_info->shipping->id;
        }

        if($shipping_id==0){
            return redirect()->back()->with('error','NO shipping container available For this drop off');
        }




//        $pickup_info = shipment_pickup_info::with('shipping')->where('pickup_date', $request->pickup_time)->get()->first();

        $shipment = new shipment();
        $shipment->user_id = Auth::user()->id;
        $shipment->stripe_payment_id = 0;
        $shipment->shipping_id = $shipping_id;
        $shipment->shipment_no = 1000;
        $shipment->from_address = $request->address;
        $shipment->total_item = sizeof($request->product_category);
        $shipment->stripe_payment_id = 0;
        $shipment->phone = $request->phone;
        $shipment->sender_name = $request->name;
        $shipment->sender_mail = $request->email;
        $shipment->for_charity = 0;

        if ($request->is_drop_off) {
            $shipment->drop_off_id = $request->drop_off_id;
            $shipment->is_drop_off = $request->is_drop_off;
            $shipment->pickup_time = $request->drop_off_date;
            $shipment->drop_off_address = $request->drop_off_id==1?'Renton, WA -  Saturdays':'Lynnwood, WA -  Sundays';
        } else {
            $shipment->pickup_time = $request->pickup_time;
        }


        $shipment->from_lat = $request->from_lat;
        $shipment->from_lng = $request->from_lng;
        $shipment->total_bill = 0;


        $shipment->receiver_name = $request->receiver_name;
        $shipment->receiver_phone = $request->receiver_phone;
        $shipment->receiver_email = $request->receiver_email;
        $shipment->to_address = $request->receiver_address;


        $shipment->distance = $request->distance;

        $shipment->payment_status = 0;
        $shipment->save();

        $custom_box_index = 0;
        $weight_index = 0;
        $tv_size_index = 0;
        $standar_type_id_index = 0;
        $mattress_category_id = 0;
        $unit_price = 0;
        $weight_pound = 0;
        $shipment_total_price = 0;
        $shipmentTotalPrice = 0;


        foreach ($request->product_category as $key => $category_id) {
            if ($category_id == 1 || $category_id == 2 || $category_id == 5) {

                if ($category_id == 1) {
                    //standard product
                    $product_info = stander_product_category::find($request->standar_type[$standar_type_id_index]);
                    $l = $product_info->length;
                    $w = $request->weidth;
                    $h = $request->height;
                    $weight_pound = $this->poundCalculation($l, $w, $h);
                    $unit_price = $product_info->price;
                } else {
                    //Custom size and other
                    $l = $request->l[$custom_box_index];
                    $w = $request->w[$custom_box_index];
                    $h = $request->h[$custom_box_index];
                    $weight_pound = $this->poundCalculation($l, $w, $h);
                    $unit_price = $this->poundPriceCalculation($weight_pound);
                }

            }

            if ($category_id == 3 || $category_id == 4) {
                //Mattress and tv
                if ($category_id == 3) {
                    //Mattress
                    $product_matt_info = stander_product_category::find($request->mattress_category[$mattress_category_id]);
                    $unit_price = $product_matt_info->price;
                }

                if ($category_id == 4) {
                    //tv
                    $unit_price = $this->tvPrice($request->tv_size[$tv_size_index]);

                }
            }

            $productTypeinfo = product_type::find($category_id);
            $shipment_details = new shipment_detail();
            $shipment_details->shipment_id = $shipment->id;
            $shipment_details->category_id = $category_id;
            $shipment_details->name = $productTypeinfo->name;
            $shipment_details->quantity = $request->qty[$key];


            if ($category_id != 3 && $category_id != 4) {
                $shipment_details->weight = $request->weight[$weight_index];
                $weight_index += 1;
            }

            //Custom size and other
            if ($category_id == 2 || $category_id == 5 || $category_id == 1) {
                $shipment_details->box_length = $l;
                $shipment_details->box_width = $w;
                $shipment_details->box_height = $h;

                if ($category_id == 1) {
                    $shipment_details->sub_category_id = $request->standar_type[$standar_type_id_index];
                    $standar_type_id_index += 1;
                } else {
                    $custom_box_index += 1;
                }

            }
            if ($category_id == 4) {
                //tv
                $shipment_details->size = $request->tv_size[$tv_size_index];
                $tv_size_index += 1;
            }
            if ($category_id == 3) {
                // Mattress
                $product_matt_info = stander_product_category::find($request->mattress_category[$mattress_category_id]);
                $shipment_details->size = $product_matt_info->name;
                $shipment_details->sub_category_id = $request->mattress_category[$mattress_category_id];
                $mattress_category_id += 1;
            }
            $shipment_details->uni_price = $unit_price;
            $shipment_details->total_price = $unit_price * $request->qty[$key];
            $shipment_details->status = 1;
            $shipment_details->save();
            $shipment_total_price += $unit_price * $request->qty[$key];
        }

        //shipment
        $shipment_total_price = floatval(number_format($shipment_total_price, 2, '.', ''));

        if(isset($request->is_drop_off) && ($request->is_drop_off == '0')) {
            $shipment_total_price= $shipment_total_price+20;
        }

//     stripe customer


        if ($request->new_card == 1 || (UserSavedPaymentMethod::count()==0) ) {


            if ($request->card_save) {
                $stripe_user = Stripe\Customer::create([
                    "card" => $request->stripeToken,
                    'description' => 'user card token generate'
                ]);


                $stripe_info = Stripe\Charge::create([
                    "amount" => 100 * $shipment_total_price,
                    "currency" => "usd",
                    "customer" => $stripe_user->id,
                    "description" => "shipment payment",
                ]);


                $userdata = new UserSavedPaymentMethod();
                $userdata->user_id = Auth::id();
                $userdata->stripe_user_id = $stripe_user->id;
                $userdata->card_last_for_digit = $stripe_info->payment_method_details->card->last4;
                $userdata->card_name = $stripe_info->payment_method_details->card->brand;
                $userdata->country = $stripe_info->payment_method_details->card->country;
                $userdata->exp_month = $stripe_info->payment_method_details->card->exp_month;
                $userdata->exp_year = $stripe_info->payment_method_details->card->exp_year;
                $userdata->save();
            } else {

                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $stripe_info = Stripe\Charge::create([
                    "amount" => 100 * $shipment_total_price,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "shipment payment",
                ]);

            }

        } else {
            $stripe_info = Stripe\Charge::create([
                "amount" => 100 * $shipment_total_price,
                "currency" => "usd",
                "customer" => $request->stripe_user_id,
                "description" => "shipment payment",
            ]);
        }


        $stripe_pay = new stripe_payment();
        $stripe_pay->stripe_id = $stripe_info->id;
        $stripe_pay->total_amount = $shipment_total_price;
        $stripe_pay->receipt_url = $stripe_info->receipt_url;
        $stripe_pay->date = Carbon::now()->format('d-m-y');
        $stripe_pay->save();


        $shipment->total_bill = $shipment_total_price;
        $shipment->stripe_payment_id = $stripe_pay->id;
        $shipment->shipment_no = 1000 + $shipment->id;
        $shipment->payment_status = 1;
        $shipment->save();


        \Mail::to($request->email)->send(new customerMail($shipment->id));


        return redirect()->back()->with('payment_success', [$shipment_total_price, $stripe_info->payment_method]);

    }

    public function shipment_list(Request $request)
    {


        $start = '2005-1-1';
        $end = '2090-1-1';
        if ($request->daterange) {
            $time = explode("-", $request->daterange);
            $start = date('Y-m-d', strtotime($time[0]));
            $end = date('Y-m-d', strtotime($time[1]));

        }

        $shipment_list = shipment::whereBetween('pickup_time', [$start, $end])->orderBy('shipment_no','DESC')->get();

        return view('shipment.all_shipment')->with(compact('shipment_list'));

    }

    public function shipmentPending(Request $request)
    {

        $start = '2005-1-1';
        $end = '2090-1-1';


        if ($request->daterange) {
            $time = explode("-", $request->daterange);
            $start = date('Y-m-d', strtotime($time[0]));
            $end = date('Y-m-d', strtotime($time[1]));

        }

        $shipment_list = shipment::whereBetween('pickup_time', [$start, $end])
            ->where('status', 0)
            ->get();

        return view('shipment.pending_shipment')->with(compact('shipment_list'));
    }

    public function shipmentPickedup(Request $request)
    {
        $start = '2005-1-1';
        $end = '2090-1-1';

        if ($request->daterange) {
            $time = explode("-", $request->daterange);
            $start = date('Y-m-d', strtotime($time[0]));
            $end = date('Y-m-d', strtotime($time[1]));

        }

        $shipment_list = shipment::whereBetween('pickup_time', [$start, $end])
            ->where('status', 1)
            ->get();

        return view('shipment.pickedup_shipment')->with(compact('shipment_list'));

    }

    public function shipmentshippingList(Request $request)
    {
        $start = '2005-1-1';
        $end = '2090-1-1';
        if ($request->daterange) {
            $time = explode("-", $request->daterange);
            $start = date('Y-m-d', strtotime($time[0]));
            $end = date('Y-m-d', strtotime($time[1]));

        }

        $shipment_list = shipment::whereBetween('pickup_time', [$start, $end])
            ->where('status', 2)
            ->get();

        return view('shipment.shipping_shipment')->with(compact('shipment_list'));

    }

    public function shipmentCompletedList(Request $request)
    {
        $start = '2005-1-1';
        $end = '2090-1-1';

        if ($request->daterange) {
            $time = explode("-", $request->daterange);
            $start = date('Y-m-d', strtotime($time[0]));
            $end = date('Y-m-d', strtotime($time[1]));

        }

        $shipment_list = shipment::whereBetween('pickup_time', [$start, $end])
            ->where('status', 3)
            ->get();

        return view('shipment.completed_shipment')->with(compact('shipment_list'));

    }

    public function shipmentPickupInfo(Request $request)
    {

        $pickup_info = shipment_pickup_info::with('driver')->get();
        $driver = driver::where('status', 1)->get();
        $shipping_info = shipping_info::where('status', 0)->get();

        return view('shipment.shipment_pickup_info')->with(compact('pickup_info', 'driver', 'shipping_info'));

    }

    public function shipmentPickupInfoStore(Request $request)
    {

        $is_no_stay = shipment_pickup_info::where('pickup_code', $request->pick_up_code)->get()->first();

        if ($is_no_stay) {
            return redirect()->back()->with('error', 'Pickup Code already exists ');
        }
        $shipment_info = new shipment_pickup_info();
        $shipment_info->driver_id = $request->driver_id;
        $shipment_info->shipping_id = $request->shipping_id;
        $shipment_info->shipping_code = $request->container_number;
        $shipment_info->pickup_code = $request->pick_up_code;
        $shipment_info->pickup_date = $request->pick_up_date;
        $shipment_info->shipping_date = $request->shipping_date;
        $shipment_info->status = 0;
        $shipment_info->save();

        $shipping_update = shipping_info::find($request->shipping_id);
        $shipping_update->is_use = 1;
        $shipping_update->save();


        return redirect()->back()->with('success', 'Successfully Created Shipment Pick up Date');

    }

    public function payment_info()
    {

        $payment_info = stripe_payment::with('shipmentinfo')
            ->whereHas('shipmentinfo', function ($q) {
                $q->where('stripe_payment_id', '!=', 0);
            })->get();

        return view('shipment.shipment_payment_list')->with(compact('payment_info'));
    }

    public function shipmentStatusChange(Request $request)
    {

        shipping_info::where('id', $request->shipping_id)->update(['status' => $request->status]);

        shipment::where('shipping_id', $request->shipping_id)->update(['status' => $request->status]);

        shipment_pickup_info::where('shipping_id', $request->shipping_id)->update(['status' => $request->status]);

        DropShipment::where('shipping_id', $request->shipping_id)->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'successfully status updated');
    }

    public function productPrint(Request $request)
    {

        $details = shipment_detail::with('standerProduct')->where('shipment_id', $request->shipment_id)->get();

        return view('shipment.product_info_print')->with(compact('details'));
    }


    public function invoice()
    {
        return view('shipment.invoice');
    }

    public function shipmentDetails(Request $request)
    {
        $shipment = shipment::find($request->shipment_id);
        $shipmentDetails = shipment_detail::where('shipment_id', $request->shipment_id)->get();

        return view('shipment._shipment_details')->with(compact('shipment', 'shipmentDetails'))->render();

    }

    public function dropShipment(Request $request)
    {
        $pickup_info = shipment_pickup_info::with('driver')->get();
        $driver = driver::where('status', 1)->get();
        $shipping_info = shipping_info::where('status', 0)->get();
        $drop_off_list = DropShipment::get();


        return view('shipment.drop_shipment_list')->with(compact('pickup_info', 'driver', 'shipping_info', 'drop_off_list'));

    }

    public function shipmentDropStore(Request $request)
    {

        $drop = new DropShipment();
        $drop->shipping_id = $request->shipping_id;
        $drop->container_number = $request->container_number;
        $drop->shipment_drop_date = $request->shipment_drop_date;
        $drop->start_time = $request->start_time;
        $drop->end_time = $request->end_time;
        $drop->shipment_drop_location = $request->drop_location;
        $drop->status = 0;
        $drop->save();

        return redirect()->back()->with('success', 'Successfully Drop of Created');
    }


}
