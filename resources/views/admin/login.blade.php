<!-- Bootstrap 5 Starter template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous"
    />

    <title>Hello, world!</title>
</head>
<style>

    .btn-color{
        background-color: #0e1c36;
        color: #fff;

    }

    .profile-image-pic{
        height: 200px;
        width: 200px;
        object-fit: cover;
    }



    .cardbody-color{
        background-color: #ebf2fa;
    }

    a{
        text-decoration: none;
    }
    .login_img {
        position: relative;
        border-radius: 50%;
        background: #d2e3e9;
        padding: 45px;
        border: 3.5px solid #ced4da;
    }

    .logog2 {
        top: 0px;
        left: 4px;
        position: absolute;
        height: 103%;
    }
    .topbtn-style {
        width: 170px;
        height: 35px;
        border-radius: 5px;
        background-image: -webkit-gradient(linear, left top, right top, from(#590fb7), to(#ff0076));
        background-image: linear-gradient(to right, #590fb7 0%, #ff0076 100%);
        -webkit-box-shadow: -4.096px -2.868px 8px 0px rgb(122 247 169 / 25%), 4.95px 4.95px 15px 0px rgb(100 14 179 / 30%);
        box-shadow: -4.096px -2.868px 8px 0px rgb(122 247 169 / 25%), 4.95px 4.95px 15px 0px rgb(100 14 179 / 30%);
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #ffffff;
        border-radius: 5px;
        border: 0;
        font-size: 14px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        -webkit-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        position: relative;
        overflow: hidden;
        z-index: 0;
        position: relative;
        transition: all 0.3s ease-in;
        margin-right: 10px;
    }

    .login-register-form {
        background: linear-gradient(103deg, #e3edf7, #ffffff);
        border-radius: 30px;
    }
    .loginmodalstyle{
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .logosubtx {
        font-size: 14px;
        padding: 10px 2px;
    }
    .topbtn-style:hover{
        color:white;
    }


</style>
<body>


<div class="container">
    {{--<div class="row">--}}
        {{--<div class="col-md-5 offset-md-4">--}}
            {{--<h2 class="text-center text-dark mt-5">Login Form</h2>--}}
            {{--<div class="text-center mb-5 text-dark">Made with bootstrap</div>--}}
            {{--<div class="card my-5 ">--}}

                {{--<form  method="post" action="{{route('admin.login.check')}}" class="card-body cardbody-color p-lg-5">--}}

                    {{--@csrf--}}
                    {{--<div class="mb-3">--}}
                        {{--<input type="text" name="email" class="form-control" id="Username" aria-describedby="emailHelp"--}}
                               {{--placeholder="Email" required>--}}
                    {{--</div>--}}
                    {{--<div class="mb-3">--}}
                        {{--<input type="password" name="password" class="form-control" id="password" placeholder="password" required>--}}
                    {{--</div>--}}
                    {{--<div class="text-center"><button type="submit" class="btn btn-info px-5 mb-5 w-100">Login</button></div>--}}
                {{--</form>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

    <div class="row d-flex justify-content-center">

            <div class="col-sm-4 mt-5  loginmodalstyle login-register-form">

                    <div class="row p-3">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <div class="login_img">
                                {{--<img class="logog" src="{{asset('frontend/assets')}}/img/imglogo.png" alt="SSB Logo">--}}
                                <img class="logog2" src="{{asset('frontend/assets')}}/img/logo99.png" alt="SSB Logo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-center text-dark mt-2 logotx">Login</h4>
                            <h5 class="text-center text-dark mt-2 logosubtx">Please enter your email and password</h5>
                            @if(session()->has('error'))
                                <div class="alert alert-success">
                                    <h5 class="text-center text-dark mt-2 logosubtx text-danger"> {{ session()->get('error') }}</h5>
                                </div>
                            @endif

                            {{--<div class="text-center mb-5 text-dark">Made with bootstrap</div>--}}
                            <div class="p-1">

                                <form class="form-style-set" method="post" action="{{route('admin.login.check')}}"
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

                                </form>
                            </div>

                        </div>
                    </div>


            </div>
    </div>
</div>




<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"
></script>


</body>
</html>














