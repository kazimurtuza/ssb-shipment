@extends('phone.layout')
@section('css')
    <style>
        /*table {*/
            /*font-family: arial, sans-serif;*/
            /*border-collapse: collapse;*/
            /*width: 100%;*/
        /*}*/

        /*td, th {*/
            /*border: 1px solid #dddddd;*/
            /*text-align: left;*/
            /*padding: 8px;*/
        /*}*/

        /*tr:nth-child(even) {*/
            /*background-color: #dddddd;*/
        /*}*/
        .actionbtn{
            height: 21px;
            line-height: 8px;
            font-size: 11px;
            font-size: .75em;
            font-weight: 700;
            color:white;
            margin: auto;
            display: flex;
        }
        /*.textstyle{*/
            /*font-weight: 800;*/
            /*color: #9c9c9c;*/
            /*font-size: 12px;*/
        /*}*/
        /*.topbar{*/
            /*width: 100%;*/
        /*}*/
    </style>
@endsection
@section('content')

<div class="row">
    <div class="col-sm-12">
        <h2 class="text-center">Shipment List</h2>


        <br>

        <div class="d-flex justify-content-center">
            <input id="myInput" type="text" class="form-control w-50" placeholder="Search..">
          &nbsp &nbsp <a href="{{route('driver.shipment.map',['date'=>$prick_up_date])}}" class="btn btn-success"><i class="fa-solid fa-location-arrow"></i> Locations </a>
        </div>
        <div class="d-flex justify-content-center mt-2">

            <h6  class="textstyle">Pick up Completed {{$total_pickedup}} of {{$total_list}}</h6>

        </div>
    </div>
    <div class="col-sm-12">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Customer</th>
                <th>Order ID</th>
                <th style="  width: 300px;">Pickup Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="myTable">
            @foreach($shipment_list as $key=>$list)
                <tr>
                    <td>{{$list->sender_name}}</td>
                    <td>{{$list->shipment_no}}</td>
                    <td>{{$list->from_address}}</td>
                    <td class="text-center">
                        @if($list->status==1)
                            <span class="badge bg-success">Picked up</span>
                        @elseif($list->status==0)
                            <span class="badge bg-danger">pending</span>
                        @endif
                    </td>
                    <td ><div class="btn-group text-center">
                            <button type="button" class="btn btn-info dropdown-toggle actionbtn" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('shipment.pickedup',['shipment_id'=>$list])}}">Picked up</a></li>
                                <li><a class="dropdown-item" href="{{route('shipment.documents.upload',['shipment_id'=>$list])}}">Document Upload</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

    </div>


@endsection

@section('script')
    <script>
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

    </script>
@endsection


