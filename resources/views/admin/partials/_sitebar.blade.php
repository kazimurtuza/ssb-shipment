<!--start sidebar -->
<aside class="sidebar-wrapper right-borer-st" data-simplebar="true">
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
            <li>
                <div class="add-article">
                    <a href="{{route('user.shipment')}}" class="add-a-btn">
                        <div class="parent-icon"><i class="fa-regular fa-truck"></i>
                        </div>
                        <div class="menu-title">Shipment </div>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="metismenu two" id="menu">
            <li>
                <a href="{{route('driverList')}}">
                    <div class="parent-icon" style="color:#ff007c;"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">Driver</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon" style="color:#4CAF50;"><i class="lni lni-postcard"></i>
                    </div>
                    <div class="menu-title">Shipment</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin.shipment.list')}}"><i class="bi bi-circle"></i>All Shipment</a>
                    </li>

                    <li>
                        <a href="#"><i class="bi bi-circle"></i>Pending Shipment</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.pending.list')}}"><i class="bi bi-circle"></i>Pending Shipment</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.pickedup.list')}}"><i class="bi bi-circle"></i>picked up Shipment</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.shipping.list')}}"><i class="bi bi-circle"></i>shipping Shipment</a>
                    </li>
                    <li>
                        <a href="{{route('admin.shipment.completed.list')}}"><i class="bi bi-circle"></i>completed Shipment</a>
                    </li>

                </ul>
            </li>



        </ul>
    </div>

    <!--end navigation-->
</aside>
<!--end sidebar -->