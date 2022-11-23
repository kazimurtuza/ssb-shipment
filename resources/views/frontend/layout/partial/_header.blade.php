<!-- Header Start -->
<header class="apihu-port-header-area">
    <div class="container">
        <div class="row item-center" >
            <div class="col-xl-2 col-lg-2 col-md-2 col-3">
                <div class="apihu-port-logo">
                    <img class="toplogo" src="{{asset('frontend/assets')}}/img/imglogo.png" alt="SSB Logo">
                </div>
            </div>
            <div class="col-xl-8 d-none d-lg-block text-center col-lg-8">
                <div class="apihu-port-main-navigation">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#apihu-port-resume">About</a></li>
                        {{--<li><a href="#apihu-port-feature">Rate Calculation</a></li>--}}
                        <li><a href="{{route('user.shipment')}}">Shipping</a></li>
                        <li><a href="{{route('shipment.charity')}}">Donate</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-10 col-9 text-right" style="display: flex">
                @if(auth()->check())
                    <div class="dropdown">
                        {{--<div style="display: flex" class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--<div class="customerimg">--}}
                                {{--<img  src="{{asset('frontend/assets')}}/img/men2.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="usernamediv">--}}
                                {{--{{auth()->user()->name}}--}}
                                {{--<br>--}}
                                {{--User--}}
                            {{--</div>--}}

                        {{--</div>--}}

                        <div class="user-setting d-flex align-items-center" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets')}}/images/avatars/avatar-1.png" class="user-img" alt="">
                            <span class="user__name">
                                @if(strlen(auth()->user()->name)<8)
                                    {{auth()->user()->name}}
                                    @else
                                    {{substr(auth()->user()->name, 0, 10)}}..

                                @endif

                            </span>
                            <span class="user-icon"><i class="lni lni-chevron-down"></i></span>
                        </div>
                        <div class="dropdown-menu top-drop ddbb"  aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('user.profile')}}">My Profile</a>
                            <a class="dropdown-item" href="{{route('user.logout')}}">Log out</a>
                        </div>
                    </div>
                @else
                <button class="topbtn-style" data-toggle="modal" data-target="#login" >Login </button>
                <button class="topbtn-style2" data-toggle="modal" data-target="#register" >Register </button>
                @endif
            </div>
        </div>
    </div>
</header>
<!-- Header End -->