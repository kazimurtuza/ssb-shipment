<div class="modal-content modalstyle" style="">
    <div class="modal-header hdd">
        <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
        >
            <span aria-hidden="true" class="closbtdst">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="modal-title text-center" id="myModalLabel" style="font-size: 22px;font-weight: 700; margin-bottom: 10px">
                    Shipment Details
                </h1>
                <h3 class="text-center" style="font-size: 15px;font-weight: 700; margin-bottom: 10px">{{$shipment->is_drop_off==1?'Drop off':'Pickup'}} Shipment</h3>
                @if($shipment->is_drop_off==1)
                    <h3 class="text-center" style="font-size: 15px;font-weight: 700; margin-bottom: 10px">Drop off Location:{{$shipment->drop_off_address}} </h3>
                @endif
                <h3 class="text-center" style="font-size: 15px;font-weight: 700; margin-bottom: 10px">ID: &nbsp;#{{$shipment->shipment_no}}</h3>
            </div>

            <div class="col-sm-6 cardstt">
                <div class="row">
                    <div class="col-sm-12 ">
                        <h3 class="text-center">Sender Info</h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">Name</span> <span class="ssgp">:</span> <span class="customer-info-val"> {{$shipment->sender_name}}</span></h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">Phone</span><span class="ssgp">:</span> <span class="customer-info-val"> {{$shipment->phone}}</span></h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">Email</span><span class="ssgp">:</span> <span class="customer-info-val"> {{$shipment->sender_mail}}</span></h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">From</span><span class="ssgp">:</span> <span class="customer-info-val">{{$shipment->from_address}}</span></h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 cardstt">
                <div class="row">
                    <div class="col-sm-12 text-left" >
                        <h3 class="text-center" >Receiver  Info</h3>
                    </div>

                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">Name</span> <span class="ssgp">:</span> <span class="customer-info-val"> {{$shipment->receiver_name}}</span></h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">Phone</span><span class="ssgp">:</span> <span class="customer-info-val">{{$shipment->receiver_phone}}</span></h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">Email</span><span class="ssgp">:</span> <span class="customer-info-val">{{$shipment->receiver_email}}</span></h3>
                    </div>
                    <div class="col-sm-12 customer-div">
                        <h3 class="customer-info"> <span class="customer-info-name">TO</span><span class="ssgp">:</span> <span class="customer-info-val">{{$shipment->to_address}}</span></h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 bglistcol">
                <div class="table-responsive">
                    <table class="table">
                        <caption>List of Items</caption>
                        <thead>
                        <tr>
                            <th scope="col">Si</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shipmentDetails as $key=>$details)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>
                                {{$details->name}}
                                <br>
                                @if(($details->category_id==1)&&($details->sub_category_id<=4))
                                    <span>{{$details->standerProduct->length}} x {{$details->standerProduct->weidth}} x {{$details->standerProduct->height}} </span>

                                @elseif(($details->sub_category_id>4))
                                    <span>{{$details->size}} </span>
                                @elseif(($details->category_id==4))
                                    <span>{{$details->size}}  inc </span>

                                @elseif(($details->category_id==3 ||$details->category_id==2 ||$details->category_id==5))
                                    <span>{{(int)$details->box_length}} x {{(int)$details->box_width}} x {{(int)$details->box_height}} </span>

                                @endif

                            </td>
                            <td>{{$details->quantity}}</td>
                            <td>{{$details->total_price}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>