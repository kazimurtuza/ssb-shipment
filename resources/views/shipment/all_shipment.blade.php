@extends('admin.admintemplate.layout')
@section('content')
    <div class="main-content">

        <div class="row">

            <div class="m-4 custom_position">
                <h1 class="tableheadtxt">All Shipment</h1>
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
                                <form action="" method="get">
                                    <div class="daterancegrp">
                                        <input type="text" class="datetimebtn datetimebtntxt" id="daterange"
                                               name="daterange" value=""/>
                                        <span class="iconposition"> <i class="fa fa-calendar-o"
                                                  id="dateicon"></i></span>

                                    </div>



                                    <button id="submit_btn" type="submit"
                                            style="height:0px;width:0px;opacity:0;display: none"></button>
                                </form>
                            </div>
                        </div>

                    </div>


                    <div class="table-responsive">
                        <table id="table_id" class="table table-striped table-bordered">
                            <thead id="sitebordernone">
                            <tr class="tbl-head-txt tableheadtx">
                                <th class="hidden_ico orderth" >Order Id</th>
                                <th class="hidden_ico customerth" style="background-image:none !important;">Customer</th>
                                <th class="hidden_ico phoneth" style="background-image:none !important;">Phone No</th>
                                <th class="hidden_ico addressth" style="background-image:none !important;">Pickup Address</th>
                                <th class="hidden_ico billth" style="background-image:none !important;"> Total bill</th>
                                <th class="hidden_ico status-wd">Status</th>
                                <th class="hidden_ico customerth">Action</th>

                            </tr>
                            </thead>

                            <tbody id="myTable">
                            @foreach($shipment_list as $shipment_list)
                                <tr class="tablebodytxt3 two" onclick="shipmentdetails({{$shipment_list->id}})" >
                                    <td class="ordertr"> {{$shipment_list->shipment_no}}</td>
                                    <td class="customerth">{{$shipment_list->sender_name}}</td>
                                    <td class="customerth">{{$shipment_list->phone}}</td>
                                    <td class="addresstd">{{$shipment_list->from_address}}</td>
                                    <td class="billtd">{{$shipment_list->total_bill}}</td>
                                    <td class="statustd"> @if($shipment_list->status==0)
                                            <p class="statusbtn2 pending">Pending</p>
                                        @elseif($shipment_list->status==1)
                                            <p class="statusbtn2 pickup">Picked up</p>
                                        @elseif($shipment_list->status==2)
                                            <p class=" statusbtn2 shipping">Shipping</p>
                                        @elseif($shipment_list->status==3)
                                            <p class=" statusbtn2 completed">Completed</p>
                                        @endif</td>
                                    <td class="customerth"><a class="printbar" href="{{route('shipment.product.print',['shipment_id'=>$shipment_list->id])}}">Print Barcode</a></td>
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


    <div
            class="modal fade"
            id="shipment_details"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
    >
        <div class="modal-dialog" role="document" style="width: 60%;" id="shipmetData">
            {{--<div class="modal-content modalstyle" style="">--}}
                {{--<div class="modal-header hdd">--}}
                    {{--<button--}}
                            {{--type="button"--}}
                            {{--class="close"--}}
                            {{--data-dismiss="modal"--}}
                            {{--aria-label="Close"--}}
                    {{-->--}}
                        {{--<span aria-hidden="true" class="closbtdst">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<h1 class="modal-title text-center" id="myModalLabel">--}}
                                {{--Shipment Details--}}
                            {{--</h1>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-6 cardstt">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12 ">--}}
                                    {{--<h3 class="text-center">Sender Info</h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">Name</span> <span class="ssgp">:</span> <span class="customer-info-val"> sohag data</span></h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">Phone</span><span class="ssgp">:</span> <span class="customer-info-val"> sohag data</span></h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">Email</span><span class="ssgp">:</span> <span class="customer-info-val"> sohag data</span></h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">From</span><span class="ssgp">:</span> <span class="customer-info-val">graphic design, Lorem ipsum is a placeholder text commonly</span></h3>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-6 cardstt">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12 text-left" >--}}
                                    {{--<h3 class="text-center" >Sender Info</h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                        {{--<h3 class="customer-info"> <span class="customer-info-name">Name</span> <span class="ssgp">:</span> <span class="customer-info-val"> sohag data</span></h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">Phone</span><span class="ssgp">:</span> <span class="customer-info-val"> sohag data</span></h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">Email</span><span class="ssgp">:</span> <span class="customer-info-val"> sohag data</span></h3>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-12 customer-div">--}}
                                    {{--<h3 class="customer-info"> <span class="customer-info-name">TO</span><span class="ssgp">:</span> <span class="customer-info-val">publishing and graphic design, Lorem ipsum is a placeholder text commonly</span></h3>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-12 bglistcol">--}}
                            {{--<div class="table-responsive">--}}
                                {{--<table class="table">--}}
                                    {{--<caption>List of Items</caption>--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th scope="col">Si</th>--}}
                                        {{--<th scope="col">First</th>--}}
                                        {{--<th scope="col">Last</th>--}}
                                        {{--<th scope="col">Handle</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr>--}}
                                        {{--<th scope="row">1</th>--}}
                                        {{--<td>Mark</td>--}}
                                        {{--<td>Otto</td>--}}
                                        {{--<td>@mdo</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th scope="row">2</th>--}}
                                        {{--<td>Jacob</td>--}}
                                        {{--<td>Thornton</td>--}}
                                        {{--<td>@fat</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th scope="row">3</th>--}}
                                        {{--<td>Larry</td>--}}
                                        {{--<td>the Bird</td>--}}
                                        {{--<td>@twitter</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}
        </div>
    </div>


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

        function shipmentdetails(data) {
            var url_link="{{route('admin.shipment.details')}}"

            $.ajax({
                url: url_link,
                type: "get",
                data: {
                    shipment_id:data,
                },
                success: function(response) {
                    $('#shipmetData').html('')
                    $('#shipmetData').html(response)

                },
                error: function(xhr) {
                    //Do Something to handle error
                }});


            $('#shipment_details').modal('show')
        }


    </script>
@endsection