<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/frontend.css')}}">
    <link href=" {{asset('assets/')}}/css/step-card.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>
<header class=" py-2">
    <div class="container">
        <div class="row justify-content-between align-items-center ">
            <div class="col-sm-3"><img width="100px" src="{{asset('uploads/ssb1.png')}}" alt=""></div>
            <div class="col-sm-6 d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home
                                    </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Shipping</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Donate</a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>
            <div class="col-sm-3 d-flex  justify-content-end">
                @if($is_user_login)
                    <a href="{{route('user.logout')}}">
                        <button class="navbtn2">LogOut</button>
                    </a>

                    @else
                <button class="navbtn1">Sign up</button>
                <button class="navbtn2">Login</button>
               @endif
            </div>
        </div>
    </div>

</header>


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <span class="txt-st">Fast and reliable delivery</span>
            <h1 class="text-content-st">
                We deliver  packages for
                businesses

            </h1>

            <button class="service-btn">
                Our Services
            </button>

        </div>
        <div class="col-sm-6">
            <div class="src-card d-flex justify-content-center ">

                <div class="row src-input-div">
                    <div class="col-sm-6">
                        <input type="text" class="src-input-style" placeholder=" Enter Tracking Number">

                    </div>
                    <div class="col-sm-6 btn-end-site"><button class="tract-btn">Track Shipment</button></div>


                </div>

                <div class="card-top-btn-div d-flex justify-content-center">
                   <div>
                       <div class="row">
                           <div class="col-sm-12 d-flex justify-content-center">
                               <img width="20%" src="{{asset('uploads/calculate.png')}}" alt="">
                           </div>
                           <div class="col-sm-12 d-flex justify-content-center">
                               Rates
                           </div>

                       </div>
                   </div>
                   <div class="top-active-btn">

                       @if($is_user_login)
                       <div  class="row" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <div class="col-sm-12 d-flex justify-content-center">
                               <img width="20%" src="{{asset('uploads/srcicon.png')}}" alt="">
                           </div>
                           <div class="col-sm-12 d-flex justify-content-center">
                               Track
                           </div>

                       </div>
                           @else
                           <div  class="row" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                               <div class="col-sm-12 d-flex justify-content-center">
                                   <img width="20%" src="{{asset('uploads/srcicon.png')}}" alt="">
                               </div>
                               <div class="col-sm-12 d-flex justify-content-center">
                                   Track
                               </div>

                           </div>

                       @endif
                   </div>
                </div>


            </div>
        </div>
    </div>

</div>

{{--input typw--}}
<div style="display:none">
    <table>
        <tbody id="stander">
        <tr>
            <input type="hidden" class="item_id" value="1">
            <td class="item_name">Box (standard size)</td>
            <input type="hidden" name="product_category[]" value="1">
            <td>
                <select class="standeroption subcategory" name="standar_type[]" oninput="calculation()" id="">
                    @foreach($stander_product_category as $category_sype)
                        <option value="{{$category_sype->id}}" price="{{$category_sype->price}}">
                            {{$category_sype->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                       name="qty[]">
            </td>
            <td>
                <input type="number" value="1" class="standeroption" step="any" name="weight[]">
            </td>
            <td class="total">100</td>
            <td><span class="deleteitem" onclick="deleteitem(this)"><i class="bi bi-trash3"></i></span></td>
        </tr>
        </tbody>
        <tbody id="custom">
        <tr>
            <input type="hidden" class="item_id" value="2">
            <td class="item_name">Box (custom size)</td>
            <input type="hidden" name="product_category[]" value="2">
            <td>
                <input type="number" oninput="calculation()" value="1" class="custominput l" step="any"
                       name="l[]"> x
                <input type="number" oninput="calculation()" value="1" class="custominput w" step="any"
                       name="w[]"> x
                <input type="number" oninput="calculation()" value="1" class="custominput h" step="any"
                       name="h[]">

            </td>
            <td>
                <input type="number" value="1" oninput="calculation()" class="standeroption qty" step="any"
                       name="qty[]">

            </td>
            <td>
                <input type="number" value="1" class="standeroption" step="any"
                       name="weight[]">
            </td>
            <td class="total"></td>
            <td><span class="deleteitem" onclick="deleteitem(this)"><i class="bi bi-trash3"></i></span></td>
        </tr>

        </tbody>

        <tbody id="mattres">
        <tr>
            <input type="hidden" class="item_id" value="3">
            <td class="item_name">Mattress</td>
            <input type="hidden" name="product_category[]" value="3">
            <td class="tvinput">
                <select class="standeroption subcategory" oninput="calculation()" name="mattress_category[]" id="">
                    @foreach($mattress as $matt)
                        <option value="{{$matt->id}}" price="{{$matt->price}}">{{$matt->name}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                       name="qty[]">
            </td>
            <td></td>
            <td class="total">100</td>
            <td><span class="deleteitem" onclick="deleteitem(this)"><i class="bi bi-trash3"></i></span></td>
        </tr>

        </tbody>
        <tbody id="tv">
        <tr>
            <input type="hidden" class="item_id" value="4">
            <td class="item_name">TV</td>
            <td class="tvinput">
                <div class="input-group mb-3">
                    <input type="hidden" name="product_category[]" value="4">
                    <input type="number" oninput="calculation()" name="tv_size[]" class="form-control tvsizinput"
                           placeholder="siz">
                    <span class="input-group-text basic-addon2 p-2">in</span>
                </div>
            </td>
            <td>
                <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                       name="qty[]">

            </td>
            <td>
            </td>
            <td class="total">100</td>
            <td><span class="deleteitem" onclick="deleteitem(this)"><i class="bi bi-trash3"></i></span></td>
        </tr>

        </tbody>

        <tbody id="other">
        <tr>
            <input type="hidden" class="item_id" value="5">
            <input type="hidden" name="product_category[]" value="5">
            <td><input class="item_name" type="text" class="w-75" name="other_name[]" placeholder="other"></td>
            <td>
                <input type="number" oninput="calculation()" value="1" class="custominput l" step="any"
                       name="l[]"> x
                <input type="number" oninput="calculation()" value="1" class="custominput w" step="any"
                       name="w[]"> x
                <input type="number" oninput="calculation()" value="1" class="custominput h" step="any"
                       name="h[]">

            </td>
            <td>
                <input type="number" oninput="calculation()" value="1" class="standeroption qty" step="any"
                       name="qty[]">

            </td>
            <td>
                <input type="number" value="1" class="standeroption" step="any"
                       name="weight[]">
            </td>
            <td class="total">100</td>
            <td><span class="deleteitem" onclick="deleteitem(this)"><i class="bi bi-trash3"></i></span></td>
        </tr>

        </tbody>
    </table>


</div>
{{--input typw--}}


{{--shipment modal--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content" style="border-radius: 44px;">
            <div class="modal-header" style="border-bottom: none">
                <h5 class="modal-title" id="exampleModalLabel">Create Shipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center">

                    <div class="col-sm-12">

                        <div class="row p-0 mairow">
                            <div class="col-sm-12">
                                <form
                                        role="form"
                                        action="{{ route('stripe.post') }}"
                                        method="post"
                                        class="require-validation"
                                        data-cc-on-file="false"
                                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                        id="payment-form">
                                    @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-10 p-2 step step1">
                                            <div class="text-center frtop" style="margin-top: 10px"><span class="sing">Shipment Create</span>
                                            </div>
                                            <div class="text-center frtop" style="margin-top: 10px"><span>Step 1-</span> &nbsp;
                                                <span class="sing">Customer Info</span> &nbsp;&nbsp; <span class="loginrg">1</span>
                                            </div>


                                            <input type="hidden" class="from_lat" name="from_lat">
                                            <input type="hidden" class="from_lng" name="from_lng">
                                            <input type="hidden" class="distance" name="distance">
                                            <input type="hidden" class="from_place_id" name="from_place_id">

                                            <div class="row mt-5">
                                                <div class="col-sm-6">
                                                    <div class="form-row m-1 row justify-content-center card-border-style">
                                                        <div class="col-sm-11">
                                                            <div><strong>Sender Info</strong></div>
                                                        </div>
                                                        <div class="col-sm-11  mt-1">
                                                            <input name="name" value="{{old('name')}}" type="text"
                                                                   class="form-control inputstyle"
                                                                   placeholder="Name *">
                                                            {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                                        </div>
                                                        <div class="col-sm-11 mt-4">
                                                            <input name="address" id="autocomplete"
                                                                   value="{{old('pickup_address')}}"
                                                                   type="text"
                                                                   class="form-control inputstyle"
                                                                   placeholder="Pickup Address *" autocomplete="off">

                                                            {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}

                                                        </div>
                                                        <div class="col-sm-11 mt-4">
                                                            <input name="email" value="{{old('email')}}" type="text"
                                                                   class="form-control inputstyle"
                                                                   placeholder="Mail *">
                                                            {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                                        </div>

                                                        <div class="col-sm-11 mt-4">
                                                            <input name="phone" value="{{old('phone')}}" type="text"
                                                                   class="form-control inputstyle"
                                                                   placeholder="Phone *">
                                                            {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-sm-6 ">

                                                    <div class="col-sm-11  mt-2">
                                                        <div class="form-row row m-1  justify-content-center card-border-style">
                                                            <div class="col-sm-11">
                                                                <div><strong>Receiver Info</strong></div>
                                                            </div>
                                                            <div class="col-sm-11  mt-2">
                                                                <input name="receiver_name" value="{{old('receiver_name')}}"
                                                                       type="text"
                                                                       class="form-control inputstyle"
                                                                       placeholder="Name *">
                                                                {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                                            </div>
                                                            <div class="col-sm-11 mt-4">
                                                                <input name="receiver_address" id="autocomplete2"
                                                                       value="{{old('receiver_address')}}"
                                                                       type="text"
                                                                       class="form-control inputstyle"
                                                                       placeholder="Receiver Address *" autocomplete="off">

                                                                {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}

                                                            </div>
                                                            <div class="col-sm-11 mt-4">
                                                                <input name="receiver_email" value="{{old('receiver_email')}}"
                                                                       type="text"
                                                                       class="form-control inputstyle"
                                                                       placeholder="Mail *">
                                                                {{--<span class="text-danger error_span" id="receiver_customerEmail">This Field is Required And Must be Email</span>--}}
                                                            </div>

                                                            <div class="col-sm-11 mt-4">
                                                                <input name="receiver_phone" value="{{old('receiver_phone')}}"
                                                                       type="text"
                                                                       class="form-control inputstyle"
                                                                       placeholder="Phone *">
                                                                {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                                <br>

                                                <div class="col-sm-12 text-center submitbtn">
                                    <span class="btn btn-info btnnext" onclick="stepShow('step2')"> Next &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></span>
                                                </div>


                                            </div>
                                        </div>
                                        <div style="display: none" class="col-sm-10 p-2 step step2 ">
                                            <div class="text-center frtop" style="margin-top: 32px"><span
                                                        class="sing">Sign up</span> &nbsp; <span class="loginrg">Login</span></div>
                                            <div class="text-center frtop" style="margin-top: 32px"><span>Step 2-</span> &nbsp;
                                                <span class="sing">Your Information</span></div>

                                            <div class="mt-4">
                                                <div class="form-row row justify-content-center g-3">
                                                    <div class="col-sm-8 mt-4">
                                                        <select title="Select your surfboard" style="" oninput="producttype(this)"
                                                                class="selectpicker form-control">
                                                            <option>Select...</option>
                                                            @foreach($product_type as $product_info)
                                                                <option value="{{$product_info->id}}"
                                                                        data-thumbnail="images/icon-chrome.png"> {{$product_info->name}} </option>

                                                            @endforeach

                                                        </select>


                                                    </div>

                                                    <div class="col-sm-12 mt-4">

                                                        <table class="table table-borderless">
                                                            <thead>
                                                            <th class="listwidth">List</th>
                                                            <th>Size</th>
                                                            <th>Quantity</th>
                                                            <th>Weight</th>
                                                            <th>Price</th>
                                                            <th>Action</th>
                                                            </thead>
                                                            <tbody id="item">
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>

                                            <br><br><br><br>
                                            <div class="col-sm-12 text-center submitbtn">

                            <span class="btn  btnnext2" onclick="stepShow('step1')"><img
                                        class="imgiconnext imgback"
                                        src="{{asset('assets/frontend/images/arrowback.png')}}"
                                        alt=""> &nbsp; Back</span>

                                                <span class="btn btn-info btnnext" onclick="stepShow('step3')"> Next &nbsp; <img
                                                            class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                            alt=""></span>
                                            </div>


                                        </div>

                                        <div style="display: none" class="col-sm-10 p-2 step step3">
                                            <div class="text-center frtop" style="margin-top: 32px">
                                                <span class="sing">Shipment</span></div>
                                            <div class="text-center frtop" style="margin-top: 32px"><span>Step 3-</span> &nbsp;
                                                <span class="sing">Your Company</span></div>
                                            <div class="row mt-4 justify-content-center">
                                                <div class="col-sm-6">
                                                    <strong>pick up schedule</strong>
                                                    <br> <br>
                                                    @foreach($pickup_time_list as $pick_up_date)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="pickup_time"
                                                                   value="{{$pick_up_date->pickup_date}}">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{date('d M Y',strtotime($pick_up_date->pickup_date))}} , between 9
                                                                AM to 5 PM
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <br>
                                            <div class="col-sm-12 text-center submitbtn">
                                    <span class="btn  btnnext2" onclick="stepShow('step2')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>
                                                <span class="btn btn-info btnnext" onclick="stepShow('step4')"> Next &nbsp; <img
                                                            class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                            alt=""></span>

                                            </div>


                                        </div>

                                        <div style="display: none" class="col-sm-10 p-2 step step4">
                                            <div class="text-center frtop" style="margin-top: 32px">
                                                <span class="sing">Shipment</span></div>
                                            <div class="text-center frtop" style="margin-top: 32px"><span>Step 4-</span> &nbsp;
                                                <span class="sing">Your Company</span></div>
                                            <div class="row mt-4 justify-content-center">
                                                <div class="col-sm-8 inv">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                        <th class="listwidth">List</th>
                                                        <th>Quantity</th>
                                                        <th>Rate</th>
                                                        </thead>
                                                        <tbody id="invoice"></tbody>

                                                        <tfoot class="footerborder footer">
                                                        </tfoot>

                                                    </table>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="col-sm-12 text-center submitbtn">
                                    <span class="btn  btnnext2" onclick="stepShow('step3')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>

                                                <span class="btn btn-info btnnext" onclick="stepShow('step5')"> Next &nbsp; <img
                                                            class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                            alt=""></span>

                                                {{--<span onclick="registration()" class="btn btn-info btnnext"> Done &nbsp; <img--}}
                                                {{--class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"--}}
                                                {{--alt=""></span>--}}
                                            </div>


                                        </div>

                                        <div style="display: none" class="col-sm-10 p-2 step step5">
                                            <div class="text-center frtop" style="margin-top: 32px">
                                                <span class="sing">Shipment</span></div>
                                            <div class="text-center frtop" style="margin-top: 32px"><span>Step 5-</span> &nbsp;
                                                <span class="sing">Your Company</span></div>
                                            <div class="row mt-4 justify-content-center">
                                                <div class="col-sm-8">

                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 form-group required'>
                                                            <label class='control-label'>Name on Card</label> <input
                                                                    class='form-control' size='4' type='text'>
                                                        </div>
                                                    </div>
                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 form-group card required' style="border: none">
                                                            <label class='control-label'>Card Number</label> <input
                                                                    autocomplete='off' class='form-control card-number' size='20'
                                                                    type='text'>
                                                        </div>
                                                    </div>
                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                                            class='form-control card-cvc'
                                                                                                            placeholder='ex. 311'
                                                                                                            size='4'
                                                                                                            type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Month</label> <input
                                                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                                                    type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Year</label> <input
                                                                    class='form-control card-expiry-year' placeholder='YYYY'
                                                                    size='4'
                                                                    type='text'>
                                                        </div>
                                                    </div>
                                                    <div class='form-row row'>
                                                        <div class='col-md-12 error form-group' style="display: none">
                                                            <div class='alert-danger alert'>Please correct the errors and try
                                                                again.
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <br>
                                                <div class="col-sm-12 text-center submitbtn">
                                    <span class="btn  btnnext2" onclick="stepShow('step4')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>

                                                    <button type="submit" class="btn btn-info btnnext" onclick="stepShow('step5')">
                                                        Pay &nbsp; <img
                                                                class="imgiconnext"
                                                                src="{{asset('assets/frontend/images/arrow.png')}}"
                                                                alt=""></button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </form>

                            </div>


                        </div>


                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary">Send message</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
{{--shipment modal--}}

{{--user register --}}

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 45px;">
            <div class="modal-header" style="border-bottom:none">
                {{--<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>--}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                        <h2 class="text-center text-dark mt-2">Registration Form</h2>
                        {{--<div class="text-center mb-5 text-dark">Made with bootstrap</div>--}}
                        <div>

                            <form  method="post" action="{{route('user.register')}}" class="card-body cardbody-color p-lg-5">

                                @csrf
                                {{--<div class="text-center">--}}
                                    {{--<img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"--}}
                                         {{--width="200px" alt="profile">--}}
                                {{--</div>--}}

                                <div class="mb-3">
                                    <input type="text" name="name" name="text" class="form-control" id="Username" aria-describedby="emailHelp"
                                           placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phone" name="text" class="form-control" id="Username" aria-describedby="emailHelp"
                                           placeholder="Phone" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="email" class="form-control" id="Username" aria-describedby="emailHelp"
                                           placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                                </div>
                                <div class="text-center"><button style="    background: #00dcff; color: white;" type="submit" class="btn btn-color px-5 mb-5 w-100">Registered</button></div>

                            </form>
                        </div>


                </div>
            </div>

        </div>
    </div>
</div>

{{--user register --}}




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script src=" {{asset('assets/')}}/js/jquery.min.js"></script>


{{--shipment create script--}}
<script>

    function stepShow(stem) {
        $('.error_span').hide();
        if (stem === 'step4') {
            invoice()

            $('#left2').show();
            $('#left1').hide();
            let company_name = $('.step3 input[name=company_name]').val();
            let mc_number = $('.step3 input[name=mc_number]').val();
            let copmany_email = $('.step3 input[name=copmany_email]').val();
            let address = $('.step3 textarea[name=address]').val();


        } else {
            $('#left2').hide();
            $('#left1').show();
        }

        if (stem === 'step2') {
            let email = $(".step1 input[name=email]").val();
            var email_uniq = 'false';

        }

        $('.step').hide();
        $('.' + stem).show();
    }

    function validateEmail(email) {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    }

    function hideme() {
        $('#messagedata').hide();
    }

    function registration() {

        $company_email = $('#company_email').val();

        $("#fromsubmit").submit();

    }

    function producttype(data) {
        let item_data = ''
        let item_id = $(data).val();
        if (item_id == 1) {
            item_data = $('#stander').html();
        }
        if (item_id == 2) {
            item_data = $('#custom').html();
        }
        if (item_id == 3) {
            item_data = $('#mattres').html();
        }
        if (item_id == 4) {
            item_data = $('#tv').html();
        }
        if (item_id == 5) {
            item_data = $('#other').html();
        }

        $('#item').append(item_data);


        calculation();
    }


    function calculation() {
        $('#item tr').each(function () {
            let item_id = $(this).find('.item_id').val();
            let item_name = $(this).find('.item_name').html();
            let qty = $(this).find('.qty').val();
            let unit_price = 0;
            let total_price = 0;

            if (item_id == 1) {

                unit_price = $(this).find('.subcategory').find('option:selected').attr('price')

            }
            if (item_id == 3) {

                unit_price = $(this).find('.subcategory').find('option:selected').attr('price')

            }
            if (item_id == 4) {

                let tvsize = 1;
                tvsize = $(this).find('.tvsizinput').val();
                unit_price = tvPrice(tvsize)
            }
            if (item_id == 2 || item_id == 5) {
                if (item_id == 5) {
                    item_name = $(this).find('.item_name').val();
                }
                let pound = 0;
                let w = $(this).find('.w').val();
                let l = $(this).find('.l').val();
                let h = $(this).find('.h').val();

                pound = (w * l * h) / 165;


                unit_price = poundPriceCalculation(pound)

            }


            total_price = parseFloat(unit_price * qty).toFixed(2);

            $(this).find('.total').html(total_price);


        })

    }

    function invoice() {
        let all_total = 0;
        $('#invoice').empty();
        $('#item tr').each(function () {
                let item_id = $(this).find('.item_id').val();
                let item_name = $(this).find('.item_name').html();
                let qty = $(this).find('.qty').val();
                let total = +$(this).find('.total').html();
                all_total += total;
                let unit_price = 0;
                let total_price = 0;
                if (item_id == 4) {
                    let tvsize = 1;
                    tvsize = $(this).find('.tvsizinput').val();
                    item_name = $(this).find('.item_name').html() + '|' + tvsize + 'inches';
                }
                if (item_id == 2 || item_id == 5) {

                    let w = $(this).find('.w').val();
                    let l = $(this).find('.l').val();
                    let h = $(this).find('.h').val();

                    if (item_id == 5) {
                        item_name = `
                            ${$(this).find('.item_name').val()}
                           </br>
                           ${w} X ${l} X ${h}

                            `
                    } else {
                        item_name = `
                            ${$(this).find('.item_name').html()}
                           </br>
                           ${w} X ${l} X ${h}

                            `
                    }


                }
                if (item_id == 1 || item_id == 3) {
                    item_name = $(this).find('.subcategory').find('option:selected').html()
                }

                $('#invoice').append(`
                 <tr>
                    <td>${item_name}</td>
                <td>${qty}</td>
                <td>${total}</td>
                </tr>
                `)
            }
        )

        $('.footer').empty()
        $('.footer').append(`
             <tr>
                                                <td></td>
                                                <td class="text-right"> Order Total</td>
                                                <td>$ ${all_total}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"> Pickup Fee</td>
                                                <td>$0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"><strong>total</strong></td>
                                                <td>$${all_total}</td>
                                            </tr>
            `)
    }


    function poundPriceCalculation(pound) {
        let price = 0;
        console.log(pound);

        if (pound < 23) {
            price = 50;
        }
        if ((pound >= 23) && (pound <= 500)) {
            price = parseFloat(2.2 * (0.998) * (pound - 1)).toFixed(2)
        }
        if ((pound > 500)) {
            price = parseFloat(pound * 0.81).toFixed(2);
        }

        return price;
    }


    function tvPrice(inc) {
        let tv_price = 0;
        if (inc <= 60) {
            tv_price = 200;
        }
        if ((inc > 60) && (inc <= 65)) {
            tv_price = 250;
        }
        if ((inc > 65) && (inc <= 70)) {
            tv_price = 300;

        }
        if ((inc > 70)) {
            tv_price = 350;

        }
        return tv_price;
    }


    function deleteitem(data) {
        $(data).parent().parent().remove();
    }


</script>

{{--stripe--}}
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function () {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function (e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>
{{--stripe--}}



{{--google autocomplite--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyD4HhhOWqS24DpGNH0FVz0mbDKqV2th9tw&sensor=false&libraries=places,geometry"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="assets/plugin/select2/js/select2.min.js"></script>
<script>

    $(document).ready(function () {
        google.maps.event.addDomListener(window, 'load', initialize);
    });

    function initialize() {
        var input = document.getElementById('autocomplete');
        var input1 = document.getElementById('autocomplete1');
        var input2 = document.getElementById('autocomplete2');
        var autocomplete = new google.maps.places.Autocomplete(input);
        var autocomplete1 = new google.maps.places.Autocomplete(input1);
        var autocomplete2 = new google.maps.places.Autocomplete(input2);
        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('.from_lat').val(place.geometry['location'].lat());
            $('.from_lng').val(place.geometry['location'].lng());
            $('.from_place_id').val(place.place_id);
            if (place.geometry['location'].lng()) {
                let distance=setdistance(place.geometry['location'].lat(),place.geometry['location'].lng());
                $('.distance').val(distance);
            }
        });
        autocomplete1.addListener('place_changed', function () {
            var place1 = autocomplete1.getPlace();
            $('#start_to').children('.to_lat').val(place1.geometry['location'].lat());
            $('#start_to').children('.to_lng').val(place1.geometry['location'].lng());
            $('#start_to').children('.to_place_id').val(place1.place_id);



            setdistance();
        });


        autocomplete2.addListener('place_changed', function () {
            var place1 = autocomplete1.getPlace();
            $('#start_to').children('.to_lat').val(place1.geometry['location'].lat());
            $('#start_to').children('.to_lng').val(place1.geometry['location'].lng());
            $('#start_to').children('.to_place_id').val(place1.place_id);


        });
    }



    function setdistance(end_lat,end_lan) {
        $from_lat= 23.72601300;
        $from_lan=90.39758070;


        // let from_latlng = new google.maps.LatLng(from_point[0], from_point[1]);
        let from_latlng = new google.maps.LatLng($from_lat, $from_lan);
        let end_latlng = new google.maps.LatLng(end_lat,end_lan);
        // let end_latlng = new google.maps.LatLng(end_point[0], end_point[1]);
        var distance = google.maps.geometry.spherical.computeDistanceBetween(from_latlng, end_latlng);
        return distance;
    }
</script>
{{--google autocomplite--}}



{{--shipment create script--}}

</body>
</html>
