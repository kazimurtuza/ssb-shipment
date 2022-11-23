
@extends('admin.admintemplate.layout')
@section('content')
    <div class="main-content">

        <div class="row">

            <div class="m-4 custom_position">
                <h1 class="tableheadtxt">Shipment Pickup Date</h1>

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
                                <div class="daterancegrp">

                                    <button style="margin-right: 60px;" class="btn thm-btn margin-bottom-10 waves-effect waves-light addbtntxtblack" data-toggle="modal" data-target="#boostrapModal-12">
                                        New Pickup
                                    </button>

                                </div>



                                <button id="submit_btn" type="submit"
                                        style="height:0px;width:0px;opacity:0;display: none"></button>
                            </div>
                        </div>

                    </div>



                    <div class="table-responsive">
                        <table id="table_id" class="table table-striped table-bordered">
                            <thead id="sitebordernone">
                            <tr class="tbl-head-txt tableheadtx">
                                <th class="hidden_ico orderth first" >SI</th>
                                <th class="hidden_ico orderth" >Driver Name</th>
                                <th class="hidden_ico customerth" style="background-image:none !important;">Pickup Date</th>
                                <th class="hidden_ico phoneth" style="background-image:none !important;">Shipping date</th>
                                <th class="hidden_ico phoneth" style="background-image:none !important;">Shipping code</th>
                                <th class="hidden_ico phoneth" style="background-image:none !important;">Status</th>


                            </tr>
                            </thead>

                            <tbody id="myTable">







                            @foreach($pickup_info as $key=>$shipment_list)
                                <tr class="tablebodytxt3">
                                    <td class="si">{{$key+1}}</td>
                                    <td class="customerth"> {{$shipment_list->driver->driver_name}}</td>
                                    <td class="customerth">  {{$shipment_list->pickup_date}}</td>
                                    <td class="customerth"> {{$shipment_list->shipping_date}}</td>
                                    <td class="customerth">{{$shipment_list->shipping_code}}</td>

                                    <td class="customerth cont">
                                        @if($shipment_list->status==0)
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



    <div
            class="modal fade"
            id="boostrapModal-12"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content modalstyle" style="width: 480px;height:655px;margin-left: 70px;">
                <div class="modal-header">
                    <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                    >
                        <span aria-hidden="true" class="closbtdst">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Create Container
                    </h4>
                    {{--<span class="modalheadtx2nd" style="font-size: 12px;">Add payment structure, automatic payments, email alerts and more.</span>--}}
                </div>
                <div class="modal-body">
                    {{--ddd--}}

                    <form action="{{route('admin.shipment.pickup_info.store')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 inputpadding" style="margin: auto">
                                <input type="hidden" id="shiping_id" name="shipping_id" >
                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Shipping Date
                                    </label>
                                    <select required name="shipping_date" onchange="containerInfo(this)" class="form-control logininputbox">
                                    <option value="">-Select-</option>
                                    @foreach($shipping_info as $shipment)
                                    <option value="{{$shipment->shipping_date}}" shipping_code="{{$shipment->container_no}}" shipping_id="{{$shipment->id}}">{{$shipment->shipping_date }} &nbsp; code:({{$shipment->container_no}})</option>
                                    @endforeach
                                    </select>
                                    @error('name')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror

                                </div>  <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname "
                                    >Container Number
                                    </label>
                                    <input  readonly type="string" required id="container_num" name="container_number" class="form-control logininputbox">
                                    @error('shipping_code')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Pickup Date
                                    </label>
                                    <input required type="date" value="" name="pick_up_date" class="form-control logininputbox" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('shipping_date')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Pickup Code
                                    </label>
                                    <?php $uniq_id=time().rand(100,999)?>
                                    <input required type="string" value="{{$uniq_id}}" name="pick_up_code" class="form-control logininputbox">
                                    @error('phone')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Select Driver
                                    </label>
                                    <select required name="driver_id"  class="form-control logininputbox">
                                        <option value="">-Select-</option>
                                        @foreach($driver as $driver_info)
                                            <option value="{{$driver_info->id}}">{{$driver_info->driver_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('phone')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>



                            </div>
                        </div>



                        <div class="col-lg-12 col-xs-12 text-center" style="position: relative;top: 31px;">


                            <button
                                    type="submit"
                                    class="btn btndone1"
                                    style="margin-bottom: 61px;width: 340px;"

                            >
                                Save
                            </button>
                        </div>

                    </form>
                </div>

            </div>
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


        function containerInfo(data){
        let code=$(data).find('option:selected').attr('shipping_code');
        let shipping_id=$(data).find('option:selected').attr('shipping_id');

        $('#container_num').val(code)
        $('#shiping_id').val(shipping_id)
        }


    </script>
@endsection