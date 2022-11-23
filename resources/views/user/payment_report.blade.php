@extends('frontend.layout.layout')
@section('style_link')
    <link href=" {{asset('assets/')}}/css/step-card.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection

@section('main_content')
    <div class="row">
      @include('user.auth._user_sitebar')
        <div class="col-sm-10">
            <div class="row d-flex justify-content-center parent-div" style="background: #e5eef7;background-image: url('{{ asset('frontend/assets')}}/img/port-img-31/cta-bg.png');">
                <div class="col-xl-12 text-center">
                    <div class="apihu-port-section-heading">
                        <h2 class="apihu-port-section-title  port-tx"> Shipment <span class="apihu-port-section-title-color"> Report</span></h2>
                        <br>
                    </div>
                </div>


                <div class="col-sm-12  apihu-port-single-service datatablediv">

                    <div class="row p-0 mairow  card-row-st set-two usercardstyle" >
                        <div class="col-sm-12">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Shipment ID</th>
                                    <th class="from-to">Stripe id</th>
                                    <th class="from-to">Paid amount</th>

                                    <th>Paid Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shipmentInfo as $ship)
                                    <tr>
                                        <td>{{$ship->shipment_no}}</td>
                                        <td>
                                            @if($ship->stripe_payment_id>0)
                                                {{$ship->payment->stripe_id}}
                                            @elseif($ship->for_charity==1)
                                                Free
                                            @endif
                                        </td>
                                        <td>
                                            @if($ship->stripe_payment_id>0)
                                            {{$ship->payment->total_amount}}
                                            @elseif($ship->for_charity==1)
                                            Free
                                            @endif
                                        </td>
                                        <td>
                                            @if($ship->stripe_payment_id>0)
                                            {{date('d-M-Y',strtotime($ship->payment->date))}}
                                                @endif

                                        </td>
                                        <td class="ship-status text-center align-items-center">
                                            @if($ship->status==0)
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif($ship->status==1)
                                                <span class="badge badge-primary">Pickup</span>
                                            @elseif($ship->status==2)
                                                <span class="badge badge-secondary">Shipping</span>
                                            @elseif($ship->status==3)
                                                <span class="badge badge-success">Completed</span>

                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>








@endsection

@section('script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

@endsection