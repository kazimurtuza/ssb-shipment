<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="past here your logo path" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Website title</title>
</head>
<style>
    body{

        font-family: 'Poppins', sans-serif;
    }
    body{
        -webkit-print-color-adjust:exact !important;
        print-color-adjust:exact !important;
    }


    .cardcontainer{
        display: flex;
        flex-wrap: wrap;
    }
    .from-address{
        flex-basis: 50%;
    }
    .to-address{
        flex-basis: 50%;
    }
    .from-to-style{
        background: black;
        color: white;
        padding: 9px 29px;
    }
    .card-width{
        width: 20%;
    }
    .itemcenter{
        display: flex;
        justify-content: center;
        font-size: 12px;
        margin-top: 6px;
        background: white;
    }
    .addressinfo{

    }
    .from-address{
        width: 45%;
        float: left;
        padding-right: 5px;
        border-right: 2px solid black;
        padding-top: 10px;
    }
    .to-address {
        /* flex-basis: 50%; */
        padding-top: 10px;
        padding-left: 5px;
        width: 45%;
        float: left;
    }
    .addressinfo {
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        /* padding: 10px 0px; */
    }
    .logoimg{
        width: 28%;
        padding: 4px;
    }
    .barcode {
        width: 90%;
        margin-top: -15px;
        padding: 7px;
        /* margin-bottom: 3px; */
    }
    .card-width {
        width: 320px;
        background: #f5f3f3;
        padding: 10px;
    }
    .productName{
        font-family: 'Barlow';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 17px;
        letter-spacing: 0.03em;
        margin-top: 10px;
        color: #000000;

    }
    .addressinfo {
        width: 100%;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        /* padding: 10px 0px; */
    }
</style>
<body>
@foreach($details as $list)
<div class="row itemcenter">
    <div class="card-width">
        <div class="cardcontainer" >
            <div class="head">
                <img class="logoimg" src="{{asset('frontend/assets/img/imglogo.png')}}" alt="">

            </div>

            <div class="addressinfo">
                <div class="from-address">
                    <span class="from-to-style">Form</span>

                    <p>
                       {{$list->shipment->from_address}}
                    </p>

                </div>
                <div class="to-address">
                    <span class="from-to-style">to</span>

                    <p>
                        {{$list->shipment->to_address}}
                    </p>

                </div>
            </div>

        </div>
        <div>
            <h2>SSB-{{$list->shipment->shipment_no}}</h2>
            <div>
                <img class="barcode" src="{{asset('assets/images/bar_code.png')}}" alt="">
            </div>

            <div>
                <span>Tracking Number</span>
                <img src="{{asset('uploads/footer2.png')}}" width="100%" alt="">
            </div>

            <span class="productName">{{$list->name}}</span>
            <br>
            @if(($list->category_id==1)&&($list->sub_category_id<=4))
            <span>{{$list->standerProduct->length}} x {{$list->standerProduct->weidth}} x {{$list->standerProduct->height}} </span>

            @elseif(($list->sub_category_id>4))
                    <span>{{$list->size}} </span>
            @elseif(($list->category_id==4))
                <span>{{$list->size}}  inc </span>

            @elseif(($list->category_id==3 ||$list->category_id==2 ||$list->category_id==5))
                        <span>{{(int)$list->box_length}} x {{(int)$list->box_width}} x {{(int)$list->box_height}} </span>

                @endif
        </div>

    </div>
</div>
@endforeach



</body>
</html>