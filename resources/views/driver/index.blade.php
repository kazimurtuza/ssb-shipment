@extends('admin.admintemplate.layout')
@section('content')
    <div class="main-content">

        <div class="row">

            <div class="m-4 custom_position">
                <h1 class="tableheadtxt">Driver List</h1>

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
                                    <div class="daterancegrp">

                                        <button style="margin-right: 60px;" class="btn thm-btn margin-bottom-10 waves-effect waves-light addbtntxtblack" data-toggle="modal" data-target="#boostrapModal-12">
                                            New Driver
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
                                <th class="hidden_ico orderth" >SI</th>
                                <th class="hidden_ico orderth" >Name</th>
                                <th class="hidden_ico customerth" style="background-image:none !important;">Phone No.</th>
                                <th class="hidden_ico phoneth" style="background-image:none !important;">Email</th>


                            </tr>
                            </thead>

                            <tbody id="myTable">
                            @foreach($driver as $key=>$driver_info)
                                <tr class="tablebodytxt3">
                                    <td class="si">{{$key+1}}</td>
                                    <td class="customerth">{{$driver_info->driver_name}}</td>
                                    <td class="customerth">{{$driver_info->mobile}}</td>
                                    <td class="customerth">{{$driver_info->email}}</td>
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
                        Add  Driver
                    </h4>
                    {{--<span class="modalheadtx2nd" style="font-size: 12px;">Add payment structure, automatic payments, email alerts and more.</span>--}}
                </div>
                <div class="modal-body">
                    {{--ddd--}}

                    <form action="{{route('driver.create')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 inputpadding" style="margin: auto">

                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Name
                                    </label>
                                    <input
                                            type="text"
                                            name="name"
                                            class="form-control logininputbox"
                                            id="name"
                                            placeholder="Name"
                                            required
                                    />
                                    @error('name')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>  <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Email
                                    </label>
                                    <input
                                            type="email"
                                            name="email"
                                            class="form-control logininputbox"
                                            id="exampleInputEmail12"
                                            placeholder="Email"
                                    />
                                    @error('email')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Phone
                                    </label>
                                    <input
                                            type="text"
                                            name="phone"
                                            class="form-control logininputbox"
                                            id="phone"
                                            placeholder="Phone"
                                            required
                                    />
                                    @error('phone')
                                    <div class="text-danger inputerror">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail12 " class="loginname"
                                    >Photo
                                    </label>
                                    <input
                                            type="file"
                                            name="photo"
                                            class="form-control logininputbox"
                                            id="phone"
                                            placeholder="Phone"
                                    />
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


    </script>
@endsection