<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="bd-icon">
            <img src="{{asset('assets')}}/images/ssb1.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <!-- <h4 class="logo-text">BDCN24</h4> -->
            <img src="{{asset('assets')}}/images/ssb1.png" class="logo-text" alt="logo icon" height="140" width="ms-auto">

        </div>
        <div class="toggle-icon ms-auto"> <i class="fadeIn animated bx bx-menu"></i>
        </div>
    </div>


    <!--navigation-->
    <div class="multi-menu-wrap">
        <ul class="metismenu one" id="menu-2">
            {{--<li>--}}
                {{--<div class="add-article">--}}
                    {{--<a href="{{route('shipment.price.calculator')}}" class="add-a-btn">--}}
                        {{--<div class="parent-icon"><i class="lni lni-pencil-alt"></i>--}}
                        {{--</div>--}}
                        {{--<div class="menu-title">Shipment Price Calculator</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<div class="add-article">--}}
                    {{--<a href="{{route('user.shipment')}}" class="add-a-btn">--}}
                        {{--<div class="parent-icon"><i class="lni lni-pencil-alt"></i>--}}
                        {{--</div>--}}
                        {{--<div class="menu-title">Shipment</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            </li>

            {{--<li>--}}
                {{--<div class="add-article">--}}
                    {{--<a href="{{route('shipment.charity')}}" class="add-a-btn">--}}
                        {{--<div class="parent-icon"><i class="lni lni-pencil-alt"></i>--}}
                        {{--</div>--}}
                        {{--<div class="menu-title">Charity Shipment</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
        <ul class="metismenu two" id="menu">
            {{--<li>--}}
                {{--<a href="{{route('shipment.price.calculator')}}">--}}
                    {{--<div class="parent-icon" style="color:#009688;"><i class="lni lni-bookmark"></i>--}}
                    {{--</div>--}}
                    {{--<div class="menu-title">Shipment Price Calculator</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{route('shipment.charity')}}">--}}
                    {{--<div class="parent-icon" style="color:#009688;"><i class="lni lni-bookmark"></i>--}}
                    {{--</div>--}}
                    {{--<div class="menu-title">Charity Shipment</div>--}}
                {{--</a>--}}
            {{--</li>--}}


            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon" style="color:#4CAF50;">
                        <i class="lni lni-postcard"></i>
                    </div>
                    <div class="menu-title">Shipment ss</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin.shipment.list')}}"><i class="bi bi-circle"></i>Shipment List</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.pending.list')}}"><i class="bi bi-circle"></i>Order Placed</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.pickedup.list')}}"><i class="bi bi-circle"></i>Picked up Shipment</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.shipping.list')}}"><i class="bi bi-circle"></i>In  Transit</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.completed.list')}}"><i class="bi bi-circle"></i>Completed Shipment</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('driverList')}}">
                    <div class="parent-icon" style="color:#ff007c;"><i class="lni lni-bookmark"></i>
                    </div>
                    <div class="menu-title">Driver</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.shipment.container')}}">
                    <div class="parent-icon"><i class="lni lni-image" style="color:#03A9F4;"></i>
                    </div>
                    <div class="menu-title">Shipping Container</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.shipment.pickup_info')}}">
                    <div class="parent-icon"><i class="lni lni-image" style="color:#03A9F4;"></i>
                    </div>
                    <div class="menu-title">Create Pickup</div>
                </a>
            </li>
            <li>
                <a href="#" class="has-arrow">
                    <div class="parent-icon" style="color:#ff8b01;"><i class="lni lni-producthunt"></i>
                    </div>
                    <div class="menu-title">Shipment Payments</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin.shipment.payment')}}"><i class="bi bi-circle"></i> Shipment Payment List</a>
                    </li>

                </ul>
            </li>










        </ul>
    </div>

    <!--end navigation-->
</aside>
<!--end sidebar -->