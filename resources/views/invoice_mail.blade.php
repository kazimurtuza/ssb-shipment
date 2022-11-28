<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .headinfo{
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;

        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        .footer{
            background: #eee;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<?php
$total_price=0;
$fee=0;
if($shipment_info->is_drop_off==0){
    $fee=20;
}

?>
<p class="headinfo">
    Dear {{$shipment_info->sender_name}},
    <br>
    <br>
    {{$shipment_info->for_charity==1?'Your donation has been placed':'Your order has been placed. We have received your payment'}}
    .Your parcel will be received from <strong>{{$shipment_info->from_address}}</strong> to <strong>{{$shipment_info->to_address}}</strong>.
    <br><br>
    You can track your shipment in the website through your invoice ID #{{$shipment_info->shipment_no}}.
    <br>
    <br>
    Your can print your delivery sticker here: <a href="{{route('shipment.product.print',['shipment_id'=>$shipment_info->id])}}">Print sticker</a>.
    <br><br>
    The Invoice has been attached below:
</p>
<br>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="3">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{asset('assets/images/ssb1.png')}}" style="width:100%; max-width:200px;">
                        </td>

                        <td>
                            Shipment NO #: {{$shipment_info->shipment_no}}<br>
                            Date: {{\Carbon\Carbon::now()->format('d-M-Y')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="3">
                <table>
                    <tr>
                        <td>
                            Seattle Sea Bridge<br>
                            USA
                        </td>

                        <td>
                            {{$shipment_info->sender_name}}
                            <br>
                            <p>{{$shipment_info->from_address}}</p>
                            <br>
                            {{$shipment_info->phone}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        {{--<tr class="heading">--}}
            {{--<td>--}}
                {{--Ödeme Yöntemi--}}
            {{--</td>--}}
            {{--<!----}}
{{--<td>--}}
{{--Miktar--}}
{{--</td>--}}
{{---->--}}
            {{--<td></td>--}}
        {{--</tr>--}}

        {{--<tr class="details">--}}
            {{--<td>--}}
                {{--Sanal POS--}}
            {{--</td>--}}
            {{--<td></td>--}}
            {{--<!----}}
            {{--<td>--}}
                {{--100--}}
            {{--</td>-->--}}
        {{--</tr>--}}

        <tr class="heading">
            <td style="text-align: center">
              Item
            </td>

            <td style="text-align: center">
              Quantity
            </td>
            {{--<td>--}}
              {{--Unit Price--}}
            {{--</td>--}}
            <td style="text-align: center">
              Price
            </td>
        </tr>
        @foreach($shipment_details as $details)
            <tr class="item">
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

                <td style="text-align: center">
                    {{$details->quantity}}
                </td>
                {{--<td>--}}
                    {{--{{$details->uni_price}}--}}
                {{--</td>--}}
                <td style="text-align: right">
                    {{$details->total_price}}
                </td>
                <?php
                  $total_price+=$details->total_price;
                ?>
            </tr>
        @endforeach

        <tr class="item footer"  >
            <td>
            </td>
            <td style="text-align: right">
                Subtotal
            </td>
            <td style="text-align: right">
                @if($shipment_info->for_charity==1)
                    <span>00</span>
                    @else
                    ${{$total_price}}
                    @endif


            </td>
        </tr>
        <tr class="item footer"  >
            <td>
            </td>
            <td style="text-align: right">
              Pickup Fee
            </td>
            <td style="text-align: right">
                @if($shipment_info->for_charity==1)
                    <span>00</span>
                @else
                    ${{$fee}}
                @endif

            </td>
        </tr>

        <tr class="item footer"  >
            <td>
            </td>
            <td style="text-align: right">
                Total
            </td>
            <td style="text-align: right">
                @if($shipment_info->for_charity==1)
                   <span>00</span>
                @else
                    ${{$total_price+$fee}}
                @endif

            </td>
        </tr>

    </table>
</div>
</body>
</html>