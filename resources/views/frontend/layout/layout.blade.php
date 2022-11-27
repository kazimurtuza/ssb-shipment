<!DOCTYPE html>
<html lang="en">


@include('frontend.layout.partial._head')

<body class="apihu-port-body">

<div class="apihu-port-body-overlay"></div>

<!-- Preloader-->
<div class="loading-preloader">
    <div id="loading-preloader">
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
        <div class="line_shape"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- ScrollTop Button -->
<a href="#" class="apihu-port-scroll-top"><i class="fas fa-chevron-up"></i></a>



@include('frontend.layout.partial._header')
<!-- Header End -->

<!-- Mobile Menu -->
<div class="apihu-port-mobile-menu">
    <a href="#" class="apihu-port-menu-close"><i class="fas fa-times"></i></a>
    <a href="#" class="apihu-port-logo-wrapper"><img width="100px" src="{{asset('frontend/assets')}}/img/ssblogo.png"
                                                     alt=""></a>
    <ul>
        <li><a href="#apihu-port-hero">Home</a></li>
        <li><a href="#apihu-port-resume">Resume</a></li>
        <li><a href="#apihu-port-feature">Feature</a></li>
        <li><a href="#apihu-port-portfolio">Portfolio</a></li>
        <li><a href="#apihu-port-clients">Clients</a></li>
        <li><a href="#apihu-port-blog">Blog</a></li>
    </ul>
</div>
<!-- Mobile Menu End -->
<div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show ssalert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> {{session()->get('success')}}.
        </div>
        @elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show ssalert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong> {{session()->get('error')}}.
    </div>
        </div>
    @endif

    @yield('main_content')


    @yield('modal')
    {{--modal--}}
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content loginmodalstyle login-register-form">
                <div class="d-flex justify-content-end">
                    <button id="crossbtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="p-3" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <div class="login_img">
                                {{--<img class="logog" src="{{asset('frontend/assets')}}/img/imglogo.png" alt="SSB Logo">--}}
                                <img class="logog2" src="{{asset('frontend/assets')}}/img/logo99.png" alt="SSB Logo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-center text-dark mt-2 logotx">Login</h4>
                            <h5 class="text-center text-dark mt-2 logosubtx">Please enter your email and password</h5>

                            {{--<div class="text-center mb-5 text-dark">Made with bootstrap</div>--}}
                            <div class="p-1">

                                <form class="form-style-set" method="post" action="{{route('user.login')}}"
                                      class="card-body cardbody-color p-lg-5">

                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="email" class="form-control" id="Username"
                                               aria-describedby="emailHelp"
                                               placeholder="Email" required>
                                    </div>
                                    <div class="mb-3 passdiv">
                                        <input type="password" name="password" class="form-control" id="loginpass"
                                               placeholder="password" required>
                                        <span class="eyei showi"><i class="fa-solid fa-eye" style="  font-size: 13px;"
                                                                    id="eyetype"></i></span>
                                        {{--<span class="eyei"><i class="fa-solid fa-eye-slash"></i></span>--}}
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info px-5 mb-5 w-100 topbtn-style">Login</button>
                                    </div>
                                    <h5 class="text-center text-dark mt-2 logosubtx2">If you do not have an account, please
                                        <span data-toggle="modal" data-target="#register" class="signuptx">Sign Up</span>
                                    </h5>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content loginmodalstyle login-register-form">
            <div class="d-flex justify-content-end">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="p-3" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <div class="login_img">
                            {{--<img class="logog" src="{{asset('frontend/assets')}}/img/imglogo.png" alt="SSB Logo">--}}
                            <img class="logog2" src="{{asset('frontend/assets')}}/img/logo99.png" alt="SSB Logo">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="text-center text-dark mt-2 logotx"> Registration </h4>
                        {{--<div class="text-center mb-5 text-dark">Made with bootstrap</div>--}}
                        <div class="p-1">
                            <form class="form-style-set" method="post" action="{{route('user.register')}}"
                                  class="card-body cardbody-color p-lg-5">

                                @csrf

                                <div class="mb-3">
                                    <input type="text" name="name" name="text" class="form-control" id="Username"
                                           aria-describedby="emailHelp"
                                           placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phone" name="text" class="form-control" id="Username"
                                           aria-describedby="emailHelp"
                                           placeholder="Phone" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="email" class="form-control" id="Username"
                                           aria-describedby="emailHelp"
                                           placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="password" required>
                                </div>
                                <div class="text-center">
                                    <button style="    background: #00dcff; color: white;" type="submit"
                                            class="btn btn-color px-5 mb-5 w-100 topbtn-style">Submit
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="payment_success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content loginmodalstyle updatew login-register-form">
            <div class="d-flex justify-content-end">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="p-3" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row paysuccess">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <div class="login_img">
                            {{--<img class="logog" src="{{asset('frontend/assets')}}/img/imglogo.png" alt="SSB Logo">--}}
                            <img class="logog2" src="{{asset('frontend/assets')}}/img/logo99.png" alt="SSB Logo">

                            {{--<i class="fa-sharp fa-solid fa-check"></i>--}}
                        </div>
                    </div>
                    <div class="col-sm-12  text-center">

                        @if(session()->has('payment_success'))
                            <h5>Thank you for your payment</h5>
                            <span class="d-block subt">Total Payment Amount</span>
                        <span class="d-block total">${{ session()->get('payment_success')[0] }}</span>

                        <span class="d-block subt2">Payment Method</span>
                        <span class="d-block total payment">{{ session()->get('payment_success')[1] }}</span>
                        @endif

                        @if(session()->has('donation_success'))
                                <h5>Thank you for your Donation</h5>
                                <span class="d-block subt">Total Payment Amount</span>
                        <span class="d-block total text-success"> Free</span>

                        {{--<span class="d-block subt2">Payment Method</span>--}}
                        {{--<span class="d-block total payment">{{ session()->get('donation_success')[1] }}</span>--}}
                        @endif


                    </div>

                </div>
            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
</div>

{{--modal--}}
@include('frontend.layout.partial._footer')

</div>


<!-- script -->
@include('frontend.layout.partial._script')


</body>

<!-- Mirrored from html.themexriver.com/Saasio/index-31.1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 11:00:37 GMT -->
</html>
