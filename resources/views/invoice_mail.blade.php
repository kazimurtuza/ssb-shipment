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
?>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="3">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{asset('assets/images/ssb1.png')}}" style="width:100%; max-width:70px;">
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
                            {{auth()->user()->name}}
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
            <td>
              Item
            </td>

            <td>
              Quantity
            </td>
            {{--<td>--}}
              {{--Unit Price--}}
            {{--</td>--}}
            <td>
              Price
            </td>
        </tr>
        @foreach($shipment_details as $details)
            <tr class="item">
                <td>
                    {{$details->name}}
                    <br>
                    @if($details->category_id==4)
                        {{$details->size}} inches
                    @elseif($details->category_id==6)
                        {{$details->size}}
                    @else
                        {{$details->box_length}} x {{$details->box_width}} x {{$details->box_height}}
                    @endif

                </td>

                <td>
                    {{$details->quantity}}
                </td>
                {{--<td>--}}
                    {{--{{$details->uni_price}}--}}
                {{--</td>--}}
                <td>
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
            <td>
                Total
            </td>
            <td>
                ${{$total_price}}
            </td>
        </tr>

    </table>
</div>
</body>
</html>