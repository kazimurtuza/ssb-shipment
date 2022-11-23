@extends('user.auth.layout')

@section('style_link')
    <link href=" {{asset('assets/')}}/css/step-card.css" rel="stylesheet">
@endsection

@section('main_content')

    <div class="row d-flex justify-content-center">

        <div class="col-sm-9 boxsdw">

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
                                <div class="text-center frtop" style="margin-top: 32px"><a class="sing">Sign up</a>
                                    &nbsp; <a class="loginrg" href="">Login</a>
                                </div>
                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 1-</span> &nbsp;
                                    <span class="sing">Registration</span> &nbsp;&nbsp; <span class="loginrg">1</span>
                                </div>


                                <input type="hidden" class="from_lat" name="from_lat">
                                <input type="hidden" class="from_lng" name="from_lng">
                                <input type="hidden" class="from_place_id" name="from_place_id">

                                <div class="mt-4">
                                    <div class="form-row row gap-4 justify-content-center g-3 ">
                                        <div class="col-sm-5 card-border-style">
                                            <div class="col-sm-12">
                                                <strong class="text-style">Shipper</strong>
                                            </div>

                                            <div class="col-sm-12  mt-4">
                                                <input name="name" value="{{old('name')}}" type="text"
                                                       class="form-control inputstyle"
                                                       placeholder="Name *">
                                                <span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>
                                            </div>
                                            <div class="col-sm-12 mt-4">
                                                <div class="col-sm-12 mt-4">
                                                    <input name="phone" value="{{old('phone')}}" type="text"
                                                           class="form-control inputstyle"
                                                           placeholder="Phone *">
                                                    <span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>
                                                </div>

                                                <span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>

                                            </div>
                                            {{--<div class="col-sm-12 mt-4">--}}
                                                 {{--<textarea name="" id="" class="form-control" cols="20" rows="3"--}}
                                                           {{--placeholder="Shipper Address" >--}}

                                                {{--</textarea>--}}

                                                {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}


                                            {{--</div>--}}


                                        </div>
                                        <div class="col-sm-5 card-border-style">
                                            <div class="col-sm-12">
                                                <strong class="text-style">Receiver</strong>
                                            </div>
                                            <div class="col-sm-12  mt-4">
                                                <input name="name" value="{{old('name')}}" type="text"
                                                       class="form-control inputstyle"
                                                       placeholder="Name *">
                                                <span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>
                                            </div>
                                            <div class="col-sm-12 mt-4">


                                                <textarea name="" id="" class="form-control" cols="30" rows="3"
                                                          textarea="Receiver Address">

                                                </textarea>

                                                <span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>

                                            </div>

                                            {{--<div class="col-sm-12 mt-4">--}}
                                                {{--<input name="email" value="{{old('email')}}" type="text"--}}
                                                       {{--class="form-control inputstyle"--}}
                                                       {{--placeholder="Mail *">--}}
                                                {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12 mt-4">--}}
                                                {{--<input name="phone" value="{{old('phone')}}" type="text"--}}
                                                       {{--class="form-control inputstyle"--}}
                                                       {{--placeholder="Phone *">--}}
                                                {{--<span class="text-danger error_span" id="customerEmail">This Field is Required And Must be Email</span>--}}
                                            {{--</div>--}}

                                        </div>


                                    </div>
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="col-sm-12 text-center submitbtn">
                                    <span class="btn btn-info btnnext" onclick="stepShow('step2')"> Next &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></span>
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

                                    <span class="btn btn-info btnnext" onclick="stepShow('step4')"> Next &nbsp; <img
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

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pickup_time"
                                                   value="2022-11-16">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Friday Oct 28, between 9 AM to 5 PM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pickup_time"
                                                   value="10/5/23" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Friday Nov 5, between 9 AM to 5 PM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pickup_time"
                                                   value="10/5/23" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Friday Nov 12, between 9 AM to 5 PM
                                            </label>
                                        </div>
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
                                    <span class="sing">Shipping Price</span></div>
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
                                    <span class="btn  btnnext2"  onclick="stepShow('step2')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>

                                    {{--<span class="btn btn-info btnnext" onclick="stepShow('step5')"> Next &nbsp; <img--}}
                                                {{--class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"--}}
                                                {{--alt=""></span>--}}

                                </div>


                            </div>

                            <div style="display: none" class="col-sm-10 p-2 step step5">
                                <div class="text-center frtop" style="margin-top: 32px">
                                    <span class="sing">Shipment</span></div>
                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 5-</span> &nbsp;
                                    <span class="sing">Shipping Price</span></div>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-sm-8">

                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group required'>
                                                <label class='control-label'>Name on Card</label> <input
                                                        class='form-control' size='4' type='text'>
                                            </div>
                                        </div>
                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group card required'>
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



@endsection

@section('script')
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
            var autocomplete = new google.maps.places.Autocomplete(input);
            var autocomplete1 = new google.maps.places.Autocomplete(input1);
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('.from_lat').val(place.geometry['location'].lat());
                $('.from_lng').val(place.geometry['location'].lng());
                $('.from_place_id').val(place.place_id);
                if ($('.to_lat').val()) {
                    setdistance();
                }
            });
            autocomplete1.addListener('place_changed', function () {
                var place1 = autocomplete1.getPlace();
                $('#start_to').children('.to_lat').val(place1.geometry['location'].lat());
                $('#start_to').children('.to_lng').val(place1.geometry['location'].lng());
                $('#start_to').children('.to_place_id').val(place1.place_id);

                setdistance();
            });
        }
    </script>
    {{--google autocomplite--}}




@endsection