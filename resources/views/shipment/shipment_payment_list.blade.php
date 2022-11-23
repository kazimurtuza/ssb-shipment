{{--@extends('user.auth.layout')--}}

{{--@section('main_content')--}}

    {{--<div class="row m-4">--}}
        {{--<div class="col-sm-12"><h3 class="fontsizeset">Shipment Payment</h3></div>--}}

    {{--</div>--}}
    {{--<div class="row mobile-row">--}}
        {{--<div class="row mobile-row">--}}
            {{--<div class="col-12 d-flex paymentlist">--}}
                {{--<div class="card rounded-4 w-100 mobile-card">--}}
                    {{--<div class="card-body mobile-card-body">--}}
                        {{--<div class="post-wrap">--}}
                            {{--<div class="post-header flex-wrap justify-content-between d-flex align-items-center">--}}
                                {{--<div class="post-details sender-name two margin-right">--}}
                                    {{--<div class="post-header-title">--}}
                                        {{--<p>Customer</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="post-details shipment-no margin-right picdatebs">--}}
                                    {{--<div class="post-header-title">--}}
                                        {{--<p>Pick up Date</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="post-details shipping-date margin-right">--}}
                                    {{--<div class="post-header-title">--}}
                                        {{--<p>Shipping date</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="post-reporter shipping-code margin-right">--}}
                                    {{--<div class="post-header-title">--}}
                                        {{--<p>Shipping code</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="post-reporter total-bill margin-right">--}}
                                {{--<div class="post-header-title">--}}
                                {{--<p>Total bill</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="post-reporter head-status margin-right">--}}
                                    {{--<div class="post-header-title">--}}
                                        {{--<p>Status</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="post-action margin-right">--}}
                                    {{--<div class="post-header-title">--}}
                                        {{--<span class="text-end"><i class="lni lni-cog"></i></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@foreach($payment_info as $shipment_list)--}}
                                {{--<div class="post-body  d-flex align-items-center flex-wrap  justify-content-between">--}}
                                    {{--<div class="body-sender-name margin-right customer-name-base">--}}
                                        {{--<a href="javascript:void(0);"><p class="d-flex align-items-center"><span><i class="bi bi-pin-map-fill"></i> &nbsp;</span> {{$shipment_list->user_id}}</p></a>--}}

                                    {{--</div>--}}
                                    {{--<div class="body-shipment-no margin-right">--}}
                                    {{--<a href="javascript:void(0);"><p class="d-flex align-items-center"><span><i class="bi bi-pin-map-fill"></i></span> {{$shipment_list->phone}}</p></a>--}}

                                    {{--</div>--}}
                                    {{--<div class="body-phone margin-right">--}}
                                    {{--<p class="d-flex align-items-center"><span></span> {{$shipment_list->driver_id}}</p>--}}

                                    {{--</div>--}}
                                    {{--<div class="body-from-address margin-right">--}}
                                        {{--<p class="d-flex align-items-center"><span></span> {{$shipment_list->stripe_id}}</p>--}}
                                        {{--<p class="d-flex align-items-center"><span></span> {{$shipment_list->date}}</p>--}}

                                    {{--</div>--}}
                                    {{--<div class="body-to-address margin-right">--}}
                                    {{--<a href="javascript:void(0);"><p class="d-flex align-items-center"><span><i class="bi bi-pin-map-fill"></i></span> {{$shipment_list->phone}}</p></a>--}}

                                    {{--</div>--}}
                                    {{--<div class="body-price shipping-date margin-right">--}}
                                        {{--<p class="d-flex align-items-center"><span></span> {{$shipment_list->date}}</p>--}}

                                    {{--</div>--}}
                                    {{--<div class="body-total-bill margin-right">--}}
                                        {{--<p class="d-flex align-items-center"><span></span> {{$shipment_list->total_amount}}</p>--}}
                                    {{--</div>--}}

                                    {{--<div class="status-box margin-right">--}}
                                        {{--@if($shipment_list->status==0)--}}
                                            {{--<span class="bg-danger">Pending</span>--}}
                                        {{--@elseif($shipment_list->status==1)--}}
                                            {{--<span class="bg-info">Picked up</span>--}}
                                        {{--@elseif($shipment_list->status==2)--}}
                                            {{--<span class="bg-primary">Shipping</span>--}}
                                        {{--@elseif($shipment_list->status==3)--}}
                                            {{--<span class="bg-success">Completed</span>--}}
                                    {{--@endif--}}
                                    {{--<!-- <span>Pending</span>--}}
                                      {{--<span>Unpublished</span> -->--}}
                                    {{--</div>--}}
                                    {{--<div class="action-box margin-right">--}}
                                        {{--<a href="javascript:void(0);" class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"--}}
                                           {{--data-bs-toggle="dropdown"><span class="text-end custom-toggle-icon"><i--}}
                                                        {{--class="fadeIn animated bx bx-caret-down-circle"></i></span></a>--}}
                                        {{--<ul class="dropdown-menu dropdown-menu-end">--}}
                                            {{--<li>--}}
                                                {{--<a class="dropdown-item custom-dropdown-item" href="javascript:void(0);">--}}
                                                    {{--<div class="d-flex align-items-center dropdown-text-box">--}}
                                                        {{--<div class=""><i class="fadeIn animated bx bx-info-circle"></i></div>--}}
                                                        {{--<div class="ms-1 ms-md-3"><span>View on Frontened</span></div>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a class="dropdown-item" href="javascript:void(0);">--}}
                                                    {{--<div class="d-flex align-items-center dropdown-text-box">--}}
                                                        {{--<div class=""><i class="fadeIn animated bx bx-edit"></i></div>--}}
                                                        {{--<div class="ms-1 ms-md-3"><span>Edit</span></div>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a class="dropdown-item" href="javascript:void(0);">--}}
                                                    {{--<div class="d-flex align-items-center dropdown-text-box">--}}
                                                        {{--<div class=""><i class="fadeIn animated bx bx-minus"></i></div>--}}
                                                        {{--<div class="ms-1 ms-md-3"><span>Remove From Slider</span></div>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--@endforeach--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

    {{--modal--}}


    {{--<!-- Modal -->--}}
{{--@endsection--}}


@extends('admin.admintemplate.layout')
@section('content')
    <div class="main-content">

        <div class="row">

            <div class="m-4 custom_position">
                <h1 class="tableheadtxt">Shipment Payment List</h1>
                {{--<h5 class="tablesecondhead" style="margin-top: 21px">--}}
                {{--Add, Change or manage all drivers in your organization.--}}
                {{--Start by completing driver profiles from the ADP tab.--}}
                {{--</h5>--}}
            </div>
        </div>
        <div class="row row-inline-block small-spacing maindiv-mt">
            <div class="col-xs-12 mt-4">
                <div class="box-content">
                    <div class="row  shipment-header-btn mb-20px">
                        <div class="col-sm-6 text-left">
                            <form>
                                <div class="input-group custom-search-input two m-4 daterancegrp">
                                    <input
                                            type="text"
                                            id="myInputTextField"
                                            class="form-control"
                                            placeholder="Search"
                                    />
                                    {{--<span class="iconposition"> <i class="glyphicon two  glyphicon-search"></i></span>--}}
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon two  glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="form-group two">
                                {{--<form action="" method="get">--}}
                                    {{--<div class="daterancegrp">--}}
                                        {{--<input type="text" class="datetimebtn datetimebtntxt" id="daterange"--}}
                                               {{--name="daterange" value=""/>--}}
                                        {{--<span class="iconposition"> <i class="fa fa-calendar-o"--}}
                                                                       {{--id="dateicon"></i></span>--}}


                                    {{--</div>--}}



                                    {{--<button id="submit_btn" type="submit"--}}
                                            {{--style="height:0px;width:0px;opacity:0;display: none"></button>--}}
                                {{--</form>--}}
                            </div>
                        </div>

                    </div>


                    <div class="table-responsive">
                        <table id="table_id" class="table table-striped table-bordered">
                            <thead id="sitebordernone">
                            <tr class="tbl-head-txt tableheadtx">
                                <th class="hidden_ico orderth" >Order Id</th>
                                <th class="hidden_ico customerth" style="background-image:none !important;">Customer</th>
                                <th class="hidden_ico phoneth" style="background-image:none !important;">Stripe ID</th>
                                <th class="hidden_ico addressth" style="background-image:none !important;">Date</th>
                                <th class="hidden_ico billth" style="background-image:none !important;"> Total bill</th>
                                <th class="hidden_ico status-wd">Status</th>

                            </tr>
                            </thead>

                            <tbody id="myTable">
                            @foreach($payment_info as $shipment_list)
                                <tr class="tablebodytxt3">
                                    <td class="ordertr"> {{$shipment_list->shipmentinfo->shipment_no}}</td>
                                    <td class="customerth">{{$shipment_list->shipmentinfo->sender_name}}</td>
                                    <td class="customerth">{{$shipment_list->stripe_id}}</td>
                                    <td class="addresstd">{{$shipment_list->date}}</td>
                                    <td class="billtd">{{$shipment_list->shipmentinfo->total_bill}}</td>
                                    <td class="statustd"> @if($shipment_list->shipmentinfo->status==0)
                                            <p class="statusbtn2 pending">Pending</p>
                                        @elseif($shipment_list->shipmentinfo->status==1)
                                            <p class="statusbtn2 pickup">Picked up</p>
                                        @elseif($shipment_list->shipmentinfo->status==2)
                                            <p class=" statusbtn2 shipping">Shipping</p>
                                        @elseif($shipment_list->shipmentinfo->status==3)
                                            <p class=" statusbtn2 completed">Completed</p>
                                        @endif</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xs-12 -->
        </div>
    </div>
@endsection

@section('page_modals')




@endsection


@section('script')
    <script>

        $(".js-range-slider").ionRangeSlider({
            skin: "big",
            postfix: "%",
            min: 0
        });

        $(document).ready(function () {
            @if($errors->any())
            {{--console.log(<?php  echo json_encode($errors->has('gas_card_number'))  ?>);--}}
            $("#boostrapModal-12").modal('show');
            @endif
        });


        $(document).ready(function () {

            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });


        function driverCreateEnd() {
            $('#driveMaxUse').modal('show')
        }


    </script>
@endsection