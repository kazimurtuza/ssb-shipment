<div class="col-sm-2 usersite-nav">
    <div class="row d-flex justify-content-center">

        <div class="col-sm-12 user-sitebar-head headcontentstyle">
            <img src="{{asset('assets')}}/images/avatars/avatar-1.png" class="user-img two" alt="">

            <span class="user-name-2">{{auth()->user()->name}}</span>

        </div>
        <div class="col-sm-12 user-item-list">

            <div class="navigation" style="margin-top: 50px;">
                <ul class="menu js__accordion navbar-nav usernav">
                    <?php $url=Route::current()->getName() ?>

                    <li class="nav-item {{$url=='user.profile'?'user-active':''}}">
                        <a class="waves-effect nav-link" href="{{route('user.profile')}}">

                            <span class="user-icon"> <i class="fa-solid fa-dolly"></i></span>
                            <span class="">Shipment Report</span></a>
                    </li>
                    <li class="nav-item {{$url=='user.payment.report'?'user-active':''}}">
                        <a class="waves-effect nav-link" href="{{route('user.payment.report')}}">

                            <span class="user-icon"><i class="fa-sharp fa-solid fa-chart-simple"></i></span>
                            <span class="paddingleft btnclickstyle">Payment Report</span></a>
                    </li>





                    <!-- Fontello Icon -->
                    <link rel="stylesheet" href="assets/fonts/fontello/fontello.css">
                </ul>


            </div>


        </div>
    </div>
</div>