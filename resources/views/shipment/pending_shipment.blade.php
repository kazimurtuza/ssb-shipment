@extends('admin.admintemplate.layout')
@section('content')
    <div class="main-content">

        <div class="row">

            <div class="m-4 custom_position">
                <h1 class="tableheadtxt">Pending Shipment</h1>
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

                            </tr>
                            </thead>

                            <tbody id="myTable">
                            @foreach($shipment_list as $shipment_list)
                                <tr class="tablebodytxt3">
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