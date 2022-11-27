@extends('frontend.layout.layout')
@section('style_link')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    <link href=" {{asset('frontend/assets')}}/css/step-card.css" rel="stylesheet">
    <link href=" {{asset('frontend/assets')}}/css/preloader.css" rel="stylesheet">
@endsection

@section('main_content')
    {{--preloader--}}
    <div class="preloader-area" style="display: none">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>

        </div>
        <div class="loader-text">Please Wait ...</div>
    </div>
    {{--preloader--}}

    <div class="row d-flex justify-content-center parent-div"
         style="background: #e5eef7;background-image: url('{{ asset('frontend/assets')}}/img/port-img-31/cta-bg.png');">
        <div class="col-xl-12 text-center">
            <div class="apihu-port-section-heading">
                <h2 class="apihu-port-section-title  port-tx">Make your <span class="apihu-port-section-title-color"> Donation</span>
                </h2>
                <br>
            </div>
        </div>


        <div class="col-sm-9  apihu-port-single-service ">

            <div class="row p-0 mairow  card-row-st" style="padding: 40px 20px;
  background: linear-gradient(103deg, #e3edf7, #ffffff);
  -webkit-box-shadow: -6px -6px 10px 0px #f5f9fc, 4px 3px 15px 0px rgb(127 163 199 / 30%);
  box-shadow: -6px -6px 10px 0px #f5f9fc, 4px 3px 15px 0px rgb(127 163 199 / 30%);
  border-radius: 30px;">
                <div class="col-sm-12">
                    <form
                            role="form"
                            action="{{ route('charity.shipment.payment') }}"
                            method="post"
                            id="payment-form">
                        @csrf
                        <div class="row d-flex justify-content-center maincrd-st">
                            <div class="col-sm-10 p-2 step step1">
                                {{--<div class="text-center frtop" style="margin-top: 32px"><a class="sing2">Shipment</a>--}}
                                {{--&nbsp; <a class="loginrg" href="">Create</a>--}}
                                {{--</div>--}}
                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 1-</span> &nbsp;
                                    <span class="sing2">Shipping Info</span> &nbsp;&nbsp;
                                </div>


                                <input type="hidden" class="from_lat" name="from_lat">
                                <input type="hidden" class="from_lng" name="from_lng">
                                <input type="hidden" class="distance" name="distance">
                                <input type="hidden" class="from_place_id" name="from_place_id">

                                <div class="row mt-3">
                                    <div class="col-sm-6">


                                        <div class="form-row m-1 row justify-content-center card-border-style">
                                            <div class="col-sm-11">
                                                <div><strong>Sender Info</strong></div>
                                            </div>
                                            <div class="col-sm-11  mt-2">
                                                <input name="sender_name" value="{{old('sender_name')}}" type="text"
                                                       class="form-control inputstyle sender_name"
                                                       placeholder="Name *">
                                                <span class="text-danger error_span" id="sender_name">This Field is Required</span>
                                            </div>
                                            <div class="col-sm-11 mt-4">
                                                <input name="sender_address" id="autocomplete"
                                                       value="{{old('sender_address')}}"
                                                       type="text"
                                                       class="form-control inputstyle sender_address"
                                                       placeholder="Pickup Address *" autocomplete="off">

                                                <span class="text-danger error_span" id="sender_address">This Field is Required</span>

                                            </div>
                                            <div class="col-sm-11 mt-4">
                                                <input name="sender_email" value="{{old('sender_email')}}" type="text"
                                                       class="form-control inputstyle sender_email"
                                                       placeholder="Mail *">
                                                <span class="text-danger error_span" id="sender_email">This Field is Required </span>
                                            </div>

                                            <div class="col-sm-11 mt-4">
                                                <input name="sender_phone" value="{{old('sender_phone')}}" type="text"
                                                       class="form-control inputstyle sender_phone"
                                                       placeholder="Phone *">
                                                <span class="text-danger error_span" id="sender_phone">This Field is Required </span>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">

                                        <div class="col-sm-12  mt-2 pdr">
                                            <div class="form-row row m-1  justify-content-center card-border-style">
                                                <div class="col-sm-12">
                                                    <div><strong>Receiver Info</strong></div>
                                                </div>
                                                <div class="col-sm-11  mt-2">
                                                    <input readonly name="receiver_name" value="Lantuun Dohio"
                                                           type="text"
                                                           class="form-control inputstyle receiver_name"
                                                           placeholder="Name *">
                                                    <span class="text-danger error_span" id="receiver_name">This Field is Required </span>
                                                </div>
                                                <div class="col-sm-11 mt-4">
                                                    <input readonly name="receiver_address" id="autocomplete2"
                                                           value="10703 Cogswell Pl., Fairfax Station, VA 22039"
                                                           type="text"
                                                           class="form-control inputstyle receiver_address"
                                                           placeholder="Receiver Address *" autocomplete="off">

                                                    <span class="text-danger error_span" id="receiver_address">This Field is Required </span>

                                                </div>

                                                <div class="col-sm-11 mt-4">
                                                    <input readonly name="receiver_email" value="info@lantuundohio.org"
                                                           type="text"
                                                           class="form-control inputstyle"
                                                           placeholder="Mail *">
                                                    <span class="text-danger error_span" id="receiver_customerEmail">This Field is Required</span>
                                                </div>

                                                <div class="col-sm-11 mt-4">
                                                    <input readonly name="receiver_phone" value="1-844-678-0254"
                                                           type="text"
                                                           class="form-control inputstyle"
                                                           placeholder="Phone *">
                                                    <span class="text-danger error_span" id="customerEmail">This Field is Required </span>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-sm-12 text-center submitbtn mt-5 btn-marginn-top">
                                    <span class="btn  topbtn-style" onclick="stepShow('step2')"> Next &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></span>
                                    </div>


                                </div>
                            </div>
                            <div style="display: none" class="col-sm-12 pl-2 step step2 ">

                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 2-</span> &nbsp;
                                    <span class="sing2">Create Item</span></div>

                                <div class="mt-4">
                                    <div class="form-row row justify-content-center g-3">
                                        <div class="col-sm-8 mt-4">
                                            <select title="Select your surfboard" style="" oninput="producttype(this)"
                                                    class="selectpicker form-control itemlist">
                                                <option>Select...</option>
                                                @foreach($product_type as $product_info)
                                                    <option value="{{$product_info->id}}"
                                                            data-thumbnail="images/icon-chrome.png"> {{$product_info->name}} </option>

                                                @endforeach

                                            </select>


                                        </div>

                                        <div class="col-sm-12 mt-4 table-position">

                                            <table class="table table-borderless">
                                                <thead>
                                                <th class="listwidth">List</th>
                                                <th>Size</th>
                                                <th>Quantity</th>
                                                <th>Weight</th>
                                                {{--<th>Price</th>--}}
                                                <th>Action</th>
                                                </thead>
                                                <tbody id="item">
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <br><br><br><br>
                                <div class="col-sm-12 text-center submitbtn mt-5">

                            <span class="btn  topbtn-style2" onclick="stepShow('step1')"><img
                                        class="imgiconnext imgback"
                                        src="{{asset('assets/frontend/images/arrowback.png')}}"
                                        alt=""> &nbsp; Back</span>

                                    <span class="btn btn-info topbtn-style"
                                          onclick="stepShow('step3')"> Next &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></span>
                                </div>


                            </div>

                            {{--<div style="display: none" class="col-sm-10 p-2 step step3">--}}
                            {{--<div class="text-center frtop" style="margin-top: 32px">--}}
                            {{--</div>--}}
                            {{--<div class="text-center frtop" style="margin-top: 32px"><span>Step 3-</span> &nbsp;--}}
                            {{--<span class="sing2">Set Pickup Time</span></div>--}}
                            {{--<div class="row mt-4 justify-content-center">--}}
                            {{--<div class="col-sm-6">--}}
                            {{--<strong>Pickup Schedule </strong>--}}
                            {{--<br> <br>--}}
                            {{--@foreach($pickup_time_list as $key=>$pick_up_date)--}}
                            {{--<div class="form-check">--}}
                            {{--<input class="form-check-input" type="radio" name="pickup_time"--}}
                            {{--{{$key==0?'checked':''}}    value="{{$pick_up_date->pickup_date}}">--}}
                            {{--<label class="form-check-label" for="flexRadioDefault1">--}}
                            {{--{{date('d M Y',strtotime($pick_up_date->pickup_date))}} , between 9--}}
                            {{--AM to 5 PM--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<br>--}}
                            {{--<div class="col-sm-12 text-center submitbtn mt-5">--}}
                            {{--<span class="btn  topbtn-style2" onclick="stepShow('step2')"><img--}}
                            {{--class="imgiconnext imgback"--}}
                            {{--src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>--}}
                            {{--<span class="btn btn-info topbtn-style" onclick="stepShow('step4')"> Next &nbsp; <img--}}
                            {{--class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"--}}
                            {{--alt=""></span>--}}

                            {{--</div>--}}


                            {{--</div>--}}
                            <div style="display: none" class="col-sm-10 p-2 step step3">
                                <div class="text-center frtop" style="margin-top: 32px">
                                </div>
                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 3-</span> &nbsp;
                                    <span class="sing2">Set Pickup or Drop-off Time Schedule</span></div>
                                {{--<div class="row mt-4 justify-content-center">--}}
                                {{--<div class="col-sm-8 picktype">--}}
                                {{--<div class="picktype-item">--}}
                                {{--<p class="itemp">Schedule a pick up</p>--}}
                                {{--<input class="form-check-input ship-type" type="radio" onclick="pickType('id1','id2')" name="is_drop_off"--}}
                                {{--value="0" checked>--}}

                                {{--</div>--}}
                                {{--<div class="picktype-item">--}}
                                {{--<p class="itemp">Drop shipment off</p>--}}
                                {{--<input class="form-check-input ship-type" type="radio" onclick="pickType('id2','id1')" name="is_drop_off"--}}
                                {{--value="1">--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row mt-4 justify-content-center">--}}
                                {{--<div class="col-sm-8" id="id1">--}}
                                {{--<strong>Pickup Schedule</strong>--}}
                                {{--<br> <br>--}}
                                {{--@foreach($pickup_time_list as $key=>$pick_up_date)--}}
                                {{--<div class="form-check">--}}
                                {{--<input class="form-check-input senddate" type="radio" name="pickup_time"--}}
                                {{--value="{{$pick_up_date->pickup_date}}" {{$key==0?'checked':''}}>--}}
                                {{--<label class="form-check-label" for="flexRadioDefault1">--}}
                                {{--{{date('d M Y',strtotime($pick_up_date->pickup_date))}} {{$key}} , between 9--}}
                                {{--AM to 5 PM--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--@endforeach--}}
                                {{--</div>--}}

                                {{--<div class="col-sm-11" id="id2" style="display: none">--}}
                                {{--<strong>Drop shipment off</strong>--}}
                                {{--<input type="hidden" name="drop_off_date" id="drop_off_date">--}}
                                {{--<br> <br>--}}
                                {{--<div  style="display: flex;">--}}
                                {{--<input style="flex-basis: 2%" class="form-check-input senddate2" type="radio" name="drop_off_id"--}}
                                {{--value="1" checked>--}}
                                {{--<label style="flex-basis: 86%" class="form-check-label" for="flexRadioDefault1">--}}
                                {{--Renton, WA -  Saturdays between 10 AM to 2 PM--}}
                                {{--</label>--}}
                                {{--<input style="flex-basis: 12%" value=" " data-date-format="dd/mm/yyyy" class="datepicker pickerdata" placeholder="Select Date">--}}
                                {{--</div>--}}
                                {{--<div  style="display: flex;" class="mt-3">--}}
                                {{--<input style="flex-basis: 2%" class="form-check-input senddate2" type="radio" name="drop_off_id"--}}
                                {{--value="2" {{$key==0?'checked':''}}>--}}
                                {{--<label style="flex-basis: 86%" class="form-check-label" for="flexRadioDefault1">--}}
                                {{--Lynnwood, WA -  Sundays  between 11 AM to 1 PM--}}
                                {{--</label>--}}
                                {{--<input style="flex-basis: 12%" value=" "  data-date-format="dd/mm/yyyy" class="datepicker2 pickerdata" placeholder="Select Date">--}}
                                {{--</div>--}}


                                {{--@foreach($drop_of as $key=>$drop_of_info)--}}
                                {{--<div class="form-check">--}}
                                {{--kk0--}}
                                {{--<input class="form-check-input" type="radio" name="drop_off_id"--}}
                                {{--value="{{$drop_of_info->id}}" {{$key==0?'checked':''}}>--}}
                                {{--<label class="form-check-label" for="flexRadioDefault1">--}}
                                {{--{{$drop_of_info->shipment_drop_location}}--}}
                                {{--between {{ date('g:i a',strtotime($drop_of_info->start_time))}}--}}
                                {{--to {{date('g:i a',strtotime($drop_of_info->end_time))}}--}}
                                {{--<input data-date-format="dd/mm/yyyy" class="datepicker">--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--@endforeach--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                <div class="row mt-4 justify-content-center">
                                    <div class="col-sm-8 picktype">
                                        <label for="exampleInputEmail1" class="picktype-item">
                                            <label for="exampleInputEmail1" class="itemp">Schedule a pick up</label>
                                            <input class="form-check-input ship-type" id="exampleInputEmail1"
                                                   type="radio" onclick="pickType('id1','id2')" name="is_drop_off"
                                                   value="0" checked>

                                        </label>
                                        <label for="ropoff" class="picktype-item">
                                            <p class="itemp">Drop shipment off</p>
                                            <input class="form-check-input ship-type" id="ropoff" type="radio"
                                                   onclick="pickType('id2','id1')" name="is_drop_off"
                                                   value="1">
                                        </label>

                                    </div>
                                </div>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-sm-8" id="id1">
                                        <strong>Pickup Schedule</strong>
                                        <br> <br>
                                        @foreach($pickup_time_list as $key=>$pick_up_date)
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="idt{{$pick_up_date->id}}"
                                                       type="radio" name="pickup_time"
                                                       value="{{$pick_up_date->pickup_date}}" {{$key==0?'checked':''}}>
                                                <label class="form-check-label itemls" for="idt{{$pick_up_date->id}}">
                                                    <span class="part1-bs">{{date('d M Y',strtotime($pick_up_date->pickup_date))}},</span>
                                                    <span class="part2-bs">Between 9 AM to 5 PM</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    {{--<div class="col-sm-8" id="id2" style="display: none">--}}
                                    {{--<strong>Drop shipment off</strong>--}}
                                    {{--<br> <br>--}}

                                    {{--@foreach($drop_of as $key=>$drop_of_info)--}}
                                    {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="radio" name="drop_off_id"--}}
                                    {{--value="{{$drop_of_info->id}}" {{$key==0?'checked':''}}>--}}
                                    {{--<label class="form-check-label" for="flexRadioDefault1">--}}
                                    {{--{{$drop_of_info->shipment_drop_location}}--}}
                                    {{--{{date('d M Y',strtotime($drop_of_info->shipment_drop_date))}} , between {{ date('g:i a',strtotime($drop_of_info->start_time))}}--}}
                                    {{--to {{date('g:i a',strtotime($drop_of_info->end_time))}}--}}
                                    {{--</label>--}}
                                    {{--</div>--}}
                                    {{--@endforeach--}}
                                    {{--</div>--}}

                                    <div class="col-sm-11" id="id2" style="display: none">
                                        <strong>Drop shipment off</strong>
                                        <input type="hidden" name="drop_off_date" id="drop_off_date">
                                        <br> <br>
                                        <div style="display: flex;">
                                            <input style="flex-basis: 2%" class="form-check-input senddate2"
                                                   id="flexRadioDefault12" type="radio" name="drop_off_id"
                                                   value="1" checked>
                                            <label style="flex-basis: 76%" class="form-check-label itemls"
                                                   for="flexRadioDefault12">
                                                Renton, WA - Saturdays Between 10 AM to 2 PM
                                            </label>
                                            <input style="flex-basis: 22%" value=" " data-date-format="dd/mm/yyyy"
                                                   id="flexRadioDefault1" class="datepicker pickerdata dataestyle"
                                                   placeholder="Select Date">
                                        </div>
                                        <div style="display: flex;" class="mt-3">
                                            <input style="flex-basis: 2%" class="form-check-input senddate2"
                                                   id="flexRadioDefault13" type="radio" name="drop_off_id"
                                                   value="2">
                                            <label style="flex-basis: 76%" class="form-check-label itemls"
                                                   for="flexRadioDefault13">
                                                Lynnwood, WA - Sundays Between 11 AM to 1 PM
                                            </label>
                                            <input style="flex-basis: 22%" value=" " data-date-format="dd/mm/yyyy"
                                                   class="datepicker2 pickerdata dataestyle" placeholder="Select Date">
                                        </div>


                                        {{--@foreach($drop_of as $key=>$drop_of_info)--}}
                                        {{--<div class="form-check">--}}
                                        {{--kk0--}}
                                        {{--<input class="form-check-input" type="radio" name="drop_off_id"--}}
                                        {{--value="{{$drop_of_info->id}}" {{$key==0?'checked':''}}>--}}
                                        {{--<label class="form-check-label" for="flexRadioDefault1">--}}
                                        {{--{{$drop_of_info->shipment_drop_location}}--}}
                                        {{--between {{ date('g:i a',strtotime($drop_of_info->start_time))}}--}}
                                        {{--to {{date('g:i a',strtotime($drop_of_info->end_time))}}--}}
                                        {{--<input data-date-format="dd/mm/yyyy" class="datepicker">--}}
                                        {{--</label>--}}
                                        {{--</div>--}}
                                        {{--@endforeach--}}
                                    </div>
                                </div>

                                <br>
                                <div class="col-sm-12 text-center submitbtn mt-5">
                                    <span class="btn  topbtn-style2" onclick="stepShow('step2')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>
                                    <span class="btn btn-info topbtn-style"
                                          onclick="stepShow('step4')"> Next &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></span>
                                </div>

                            </div>

                            <div style="display: none" class="col-sm-10 p-2 step step4">
                                <input type="hidden" class="fee" name="fee">
                                <div class="text-center frtop" style="margin-top: 32px">

                                </div>
                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 4-</span> &nbsp;
                                    <span class="sing2">Invoice</span></div>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-sm-8 inv">
                                        <table class="table table-borderless">
                                            <thead>
                                            <th class="listwidth">List</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            </thead>
                                            <tbody id="invoice"></tbody>

                                            <tfoot class="footerborder footer">
                                            </tfoot>

                                        </table>
                                    </div>
                                </div>

                                <br>
                                <div class="col-sm-12 text-center submitbtn mt-5">
                                    {{--<span class="btn  topbtn-style2" onclick="stepShow('step3')"><img--}}
                                    {{--class="imgiconnext imgback"--}}
                                    {{--src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>--}}

                                    {{--<span class="btn btn-info topbtn-style" onclick="stepShow('step5')"> Next &nbsp; <img--}}
                                    {{--class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"--}}
                                    {{--alt=""></span>--}}


                                    <span class="btn  topbtn-style2" onclick="stepShow('step2')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>
                                    <button type="submit" class="btn btn-info topbtn-style" onclick="preloaderOn()"> Submit &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></button>

                                    {{--<span onclick="registration()" class="btn btn-info topbtn-style"> Done &nbsp; <img--}}
                                    {{--class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"--}}
                                    {{--alt=""></span>--}}
                                </div>


                            </div>


                    </form>

                </div>


            </div>


        </div>

    </div>


    <div style="display:none">
        <table>
            <tbody id="stander">
            <tr>
                <input type="hidden" class="item_id" value="1">
                <td class="item_name">Box (standard size)</td>
                <input type="hidden" name="product_category[]" value="1">
                <td>
                    <select class="standeroption subcategory itemlist" name="standar_type[]" oninput="calculation()"
                            id="">
                        @foreach($stander_product_category as $category_sype)
                            <option value="{{$category_sype->id}}" price="{{$category_sype->price}}">
                                {{$category_sype->name}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                           name="qty[]">
                </td>
                <td>
                    <input type="number" value="1" class="standeroption" step="any" name="weight[]">
                </td>
                <td class="total totalhide">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>
            </tbody>
            <tbody id="custom">
            <tr>
                <input type="hidden" class="item_id" value="2">
                <td class="item_name">Box (custom size)</td>
                <input type="hidden" name="product_category[]" value="2">
                <td>
                    <input type="number" oninput="calculation()" value="1" class="custominput l" step="any"
                           name="l[]"> x
                    <input type="number" oninput="calculation()" value="1" class="custominput w" step="any"
                           name="w[]"> x
                    <input type="number" oninput="calculation()" value="1" class="custominput h" step="any"
                           name="h[]">

                </td>
                <td>
                    <input type="number" value="1" oninput="calculation()" class="standeroption qty" step="any"
                           name="qty[]">

                </td>
                <td>
                    <input type="number" value="1" class="standeroption" step="any"
                           name="weight[]">
                </td>
                <td class="total totalhide"></td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>

            <tbody id="mattres">
            <tr>
                <input type="hidden" class="item_id" value="3">
                <td class="item_name">Mattress</td>
                <input type="hidden" name="product_category[]" value="3">
                <td class="tvinput">
                    <select class="standeroption subcategory itemlist" oninput="calculation()"
                            name="mattress_category[]" id="">
                        @foreach($mattress as $matt)
                            <option value="{{$matt->id}}" price="{{$matt->price}}">{{$matt->name}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                           name="qty[]">
                </td>
                <td></td>
                <td class="total totalhide">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>
            <tbody id="tv">
            <tr>
                <input type="hidden" class="item_id" value="4">
                <td class="item_name">TV</td>
                <td class="tvinput">
                    <div class="input-group mb-3">
                        <input type="hidden" name="product_category[]" value="4">
                        <input type="number" oninput="calculation()" name="tv_size[]" class="form-control tvsizinput"
                               placeholder="siz">
                        <span class="input-group-text basic-addon2 p-2">in</span>
                    </div>
                </td>
                <td>
                    <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                           name="qty[]">

                </td>
                <td>
                </td>
                <td class="total totalhide">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>

            <tbody id="other">
            <tr>
                <input type="hidden" class="item_id" value="5">
                <input type="hidden" name="product_category[]" value="5">
                <td><input class="item_name other-style" type="text" class="w-75" name="other_name[]"
                           placeholder="other"></td>
                <td>
                    <input type="number" oninput="calculation()" value="1" class="custominput l" step="any"
                           name="l[]"> x
                    <input type="number" oninput="calculation()" value="1" class="custominput w" step="any"
                           name="w[]"> x
                    <input type="number" oninput="calculation()" value="1" class="custominput h" step="any"
                           name="h[]">

                </td>
                <td>
                    <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                           name="qty[]">

                </td>
                <td>
                    <input type="number" value="1" class="standeroption" step="any"
                           name="weight[]">
                </td>
                <td class="total totalhide">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>
        </table>


    </div>



@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        @if(session()->has('donation_success'))
        $('#payment_success').modal('show');

        @endif

        function stepShow(stem) {
            $('.error_span').hide();
            if (stem === 'step4') {
                invoice()

                $('#left2').show();
                $('#left1').hide();
                let company_name = $('.step3 input[name=company_name]').val();
                let mc_number = $('.step3 input[name=mc_number]').val();
                let copmany_email = $('.step3 input[name=copmany_email]').val();
                let address = $('.step3 textarea[name=address]').val();

            } else {
                $('#left2').hide();
                $('#left1').show();
            }

            // if (stem === 'step4') {
            //     if ($('.ship-type:checked').val() == 1) {
            //         $dataval = $('.senddate2:checked').parent().find('.pickerdata').val();
            //         if (!$dataval) {
            //             alert('Please  date input form fill up')
            //             return 1;
            //         } else {
            //             $('#drop_off_date').val($dataval);
            //
            //         }
            //
            //     }
            //
            // }

            if (stem === 'step4'){
                if($('.ship-type:checked').val()==1){
                    $('.fee').val(0);
                    $('.tottal_fee').html('$0');

                    $dataval=$('.senddate2:checked').parent().find('.pickerdata').val();
                    if(!$dataval){
                        alert('Please  date input form fill up')
                        return 1;
                    }else{
                        $('#drop_off_date').val($dataval);

                    }
                }else{
                    @if($pickup_time_count==0)
                    alert('No pickup date is available, please select other')
                    return false;
                    @endif
                    $('.fee').val(20)
                    $('.tottal_fee').html('$20');
                }

                invoice()
            }






            if (stem === 'step2') {
                @if(!auth()->check())
                $('#login').modal('show');
                return false
                @endif
                if ($('.sender_name').val() == '') {
                    $('#sender_name').show();
                    return false;
                }
                if ($('.sender_address').val() == '') {
                    $('#sender_address').show();
                    return false;
                }
                if ($('.sender_email').val() == '') {
                    $('#sender_email').show();
                    return false;
                }
                if ($('.sender_phone').val() == '') {
                    $('#sender_phone').show();
                    return false;
                }

                if ($('.receiver_name').val() == '') {
                    $('#receiver_name').show();
                    return false;
                }
                if ($('.receiver_address').val() == '') {
                    $('#receiver_address').show();
                    return false;
                }

                let email = $(".step1 input[name=email]").val();
                var email_uniq = 'false';

            }

            $('.step').hide();
            $('.' + stem).show();
        }

        function validateEmail(email) {
            return String(email)
                .toLowerCase()
                .match(
                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
        }

        function hideme() {
            $('#messagedata').hide();
        }

        function registration() {

            $company_email = $('#company_email').val();

            $("#fromsubmit").submit();

        }

        function producttype(data) {
            let item_data = ''
            let item_id = $(data).val();
            if (item_id == 1) {
                item_data = $('#stander').html();
            }
            if (item_id == 2) {
                item_data = $('#custom').html();
            }
            if (item_id == 3) {
                item_data = $('#mattres').html();
            }
            if (item_id == 4) {

                item_data = $('#tv').html();
            }
            if (item_id == 5) {
                item_data = $('#other').html();
            }

            $('#item').append(item_data);


            calculation();
        }


        function calculation() {
            $('#item tr').each(function () {
                let item_id = $(this).find('.item_id').val();
                let item_name = $(this).find('.item_name').html();
                let qty = $(this).find('.qty').val();
                let unit_price = 0;
                let total_price = 0;

                if (item_id == 1) {

                    unit_price = $(this).find('.subcategory').find('option:selected').attr('price')

                }
                if (item_id == 3) {

                    unit_price = $(this).find('.subcategory').find('option:selected').attr('price')

                }
                if (item_id == 4) {

                    let tvsize = 1;
                    tvsize = $(this).find('.tvsizinput').val();
                    unit_price = tvPrice(tvsize)
                }
                if (item_id == 2 || item_id == 5) {
                    if (item_id == 5) {
                        item_name = $(this).find('.item_name').val();
                    }
                    let pound = 0;
                    let w = $(this).find('.w').val();
                    let l = $(this).find('.l').val();
                    let h = $(this).find('.h').val();

                    pound = (w * l * h) / 165;


                    unit_price = poundPriceCalculation(pound)

                }


                total_price = parseFloat(unit_price * qty).toFixed(2);

                $(this).find('.total').html(total_price);


            })

        }

        // function invoice() {
        //     let all_total = 0;
        //     $('#invoice').empty();
        //     $('#item tr').each(function () {
        //             let item_id = $(this).find('.item_id').val();
        //             let item_name = $(this).find('.item_name').html();
        //             let qty = $(this).find('.qty').val();
        //             let total = +$(this).find('.total').html();
        //             all_total += total;
        //             let unit_price = 0;
        //             let total_price = 0;
        //             if (item_id == 4) {
        //                 let tvsize = 1;
        //                 tvsize = $(this).find('.tvsizinput').val();
        //                 item_name = $(this).find('.item_name').html() + '|' + tvsize + 'inches';
        //             }
        //             if (item_id == 2 || item_id == 5) {
        //
        //                 let w = $(this).find('.w').val();
        //                 let l = $(this).find('.l').val();
        //                 let h = $(this).find('.h').val();
        //
        //                 if (item_id == 5) {
        //                     item_name = `
        //                     ${$(this).find('.item_name').val()}
        //                    </br>
        //                    ${w} X ${l} X ${h}
        //
        //                     `
        //                 } else {
        //                     item_name = `
        //                     ${$(this).find('.item_name').html()}
        //                    </br>
        //                    ${w} X ${l} X ${h}
        //
        //                     `
        //                 }
        //
        //
        //             }
        //             if (item_id == 1 || item_id == 3) {
        //                 item_name = $(this).find('.subcategory').find('option:selected').html()
        //             }
        //
        //             $('#invoice').append(`
        //          <tr>
        //             <td>${item_name}</td>
        //         <td>${qty}</td>
        //         <td>${total}</td>
        //         </tr>
        //         `)
        //         }
        //     )
        //
        //     $('.footer').empty()
        //     $('.footer').append(`
        //      <tr>
        //                                         <td></td>
        //                                         <td class="text-right"> Order Total</td>
        //                                         <td>$ ${all_total}</td>
        //                                     </tr>
        //                                     <tr>
        //                                         <td></td>
        //                                         <td class="text-right"> Pickup Fee</td>
        //                                         <td>$0</td>
        //                                     </tr>
        //                                     <tr>
        //                                         <td></td>
        //                                         <td class="text-right"><strong>total</strong></td>
        //                                         <td>$${all_total}</td>
        //                                     </tr>
        //     `)
        // }

        function invoice() {
            let fee=+$('.fee').val();
            let all_total = 0;
            $('#invoice').empty();
            $('#item tr').each(function () {
                    let item_id = $(this).find('.item_id').val();
                    let item_name = $(this).find('.item_name').html();
                    let qty = $(this).find('.qty').val();
                    let total = +$(this).find('.total').html();
                    all_total += total;
                    let unit_price = 0;
                    let total_price = 0;
                    if (item_id == 4) {
                        let tvsize = 1;
                        tvsize = $(this).find('.tvsizinput').val();
                        item_name = $(this).find('.item_name').html() + '|' + tvsize + 'inches';
                    }
                    if (item_id == 2 || item_id == 5) {

                        let w = $(this).find('.w').val();
                        let l = $(this).find('.l').val();
                        let h = $(this).find('.h').val();

                        if (item_id == 5) {
                            item_name = `
                            ${$(this).find('.item_name').val()}
                           </br>
                           ${w} X ${l} X ${h}

                            `
                        } else {
                            item_name = `
                            ${$(this).find('.item_name').html()}
                           </br>
                           ${w} X ${l} X ${h}

                            `
                        }


                    }
                    if (item_id == 1 || item_id == 3) {
                        item_name = $(this).find('.subcategory').find('option:selected').html()
                    }

                    $('#invoice').append(`
                 <tr>
                    <td>${item_name}</td>
                <td class="qtymd">${qty}</td>
                <td>${total}</td>
                </tr>
                `)
                }
            )
            let final_total=all_total+fee

            $('.footer').empty()
            $('.footer').append(`
             <tr>
                                                <td></td>
                                                <td class="text-right"> Order Total</td>
                                                <td>$ ${all_total}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"> Pickup Fee</td>
                                                <td class="tottal_fee">$${fee}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <!--<td>$${final_total}</td>-->
                                                <td>$00 <spna style="font-size: 13px;font-weight: 800;color: #20bc43;">(Free)</spna></td>
                                            </tr>
            `)
        }


        function poundPriceCalculation(pound) {
            let price = 0;
            console.log(pound);

            if (pound < 23) {
                price = 50;
            }
            if ((pound >= 23) && (pound <= 500)) {
                price = parseFloat(2.2 * (0.998) * (pound - 1)).toFixed(2)
            }
            if ((pound > 500)) {
                price = parseFloat(pound * 0.81).toFixed(2);
            }

            return price;
        }

        function tvPrice(inc) {
            let tv_price = 0;
            if (inc <= 60) {
                tv_price = 200;
            }
            if ((inc > 60) && (inc <= 65)) {
                tv_price = 250;
            }
            if ((inc > 65) && (inc <= 70)) {
                tv_price = 300;

            }
            if ((inc > 70)) {
                tv_price = 350;

            }
            return tv_price;
        }


        function deleteitem(data) {
            $(data).parent().parent().remove();
        }


    </script>

    {{--stripe--}}
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function () {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function (e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function (i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    alert('Please fill out the form correctly')
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
    {{--stripe--}}

    {{--google autocomplite--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key=AIzaSyD4HhhOWqS24DpGNH0FVz0mbDKqV2th9tw&sensor=false&libraries=places,geometry"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="assets/plugin/select2/js/select2.min.js"></script>
    <script>

        @if(!auth()->check())
        $('#crossbtn').hide();
        $('#login').modal('show');

        @endif

        $(document).ready(function () {
            google.maps.event.addDomListener(window, 'load', initialize);
        });

        function initialize() {
            var input = document.getElementById('autocomplete');
            var input1 = document.getElementById('autocomplete1');
            var input2 = document.getElementById('autocomplete2');
            var autocomplete = new google.maps.places.Autocomplete(input);
            var autocomplete1 = new google.maps.places.Autocomplete(input1);
            var autocomplete2 = new google.maps.places.Autocomplete(input2);
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('.from_lat').val(place.geometry['location'].lat());
                $('.from_lng').val(place.geometry['location'].lng());
                $('.from_place_id').val(place.place_id);
                if (place.geometry['location'].lng()) {
                    let distance = setdistance(place.geometry['location'].lat(), place.geometry['location'].lng());
                    $('.distance').val(distance);
                }
            });
            autocomplete1.addListener('place_changed', function () {
                var place1 = autocomplete1.getPlace();
                $('#start_to').children('.to_lat').val(place1.geometry['location'].lat());
                $('#start_to').children('.to_lng').val(place1.geometry['location'].lng());
                $('#start_to').children('.to_place_id').val(place1.place_id);


                setdistance();
            });


            autocomplete2.addListener('place_changed', function () {
                var place1 = autocomplete1.getPlace();
                $('#start_to').children('.to_lat').val(place1.geometry['location'].lat());
                $('#start_to').children('.to_lng').val(place1.geometry['location'].lng());
                $('#start_to').children('.to_place_id').val(place1.place_id);


            });
        }


        function setdistance(end_lat, end_lan) {
            $from_lat = 23.72601300;
            $from_lan = 90.39758070;


            // let from_latlng = new google.maps.LatLng(from_point[0], from_point[1]);
            let from_latlng = new google.maps.LatLng($from_lat, $from_lan);
            let end_latlng = new google.maps.LatLng(end_lat, end_lan);
            // let end_latlng = new google.maps.LatLng(end_point[0], end_point[1]);
            var distance = google.maps.geometry.spherical.computeDistanceBetween(from_latlng, end_latlng);
            return distance;
        }

        function pickType(id, id2) {
            $('#' + id).show()
            $('#' + id2).hide()
        }

        //    date picker
        $('.datepicker').datepicker({
            startDate: new Date(),
            // minDate: 0,
            format: "yyyy-mm-dd",
            endDate: '{{$last_shipping}}',
            daysOfWeekHighlighted: [6],
            daysOfWeekDisabled: [0, 1, 2, 3, 4, 5]
        });

        $('.datepicker').datepicker("setDate", '');

        $('.datepicker2').datepicker({
            startDate: new Date(),
            // minDate: 0,
            format: "yyyy-mm-dd",
            endDate: '{{$last_shipping}}',
            daysOfWeekHighlighted: [0],
            daysOfWeekDisabled: [1, 2, 3, 4, 5, 6]
        });

        $('.datepicker2').datepicker("setDate", '');
        // end   date picker

        function preloaderOn(){
            $('.preloader-area').show();
        }

    </script>

    {{--google autocomplite--}}




@endsection