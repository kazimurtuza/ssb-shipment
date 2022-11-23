@extends('frontend.layout.layout')
@section('style_link')
    <link href=" {{asset('assets/')}}/css/step-card.css" rel="stylesheet">
@endsection

@section('main_content')

    <div class="row d-flex justify-content-center parent-div"
         style="background: #e5eef7;background-image: url('{{ asset('frontend/assets')}}/img/port-img-31/cta-bg.png');">
        {{--<div class="col-xl-12 text-center">--}}
            {{--<div class="apihu-port-section-heading">--}}
                {{--<h2 class="apihu-port-section-title  port-tx">Place your <span class="apihu-port-section-title-color">Shipment</span>--}}
                {{--</h2>--}}
                {{--<br>--}}
            {{--</div>--}}
        {{--</div>--}}


        <div class="col-sm-8  apihu-port-single-service ">

            <div class="row p-0 mairow  card-row-st" style="padding: 40px 20px;
  background: linear-gradient(103deg, #e3edf7, #ffffff);
  -webkit-box-shadow: -6px -6px 10px 0px #f5f9fc, 4px 3px 15px 0px rgb(127 163 199 / 30%);
  box-shadow: -6px -6px 10px 0px #f5f9fc, 4px 3px 15px 0px rgb(127 163 199 / 30%);
  border-radius: 30px;">
                <div class="col-sm-12 mb-5 mt-5">
                    <section class="main-pd-wrapper" style="width:80%; margin: auto">
                        <div style="
                  text-align: center;
                  margin: auto;
                  line-height: 1.5;
                  font-size: 14px;
                  color: #4a4a4a;
                ">
                            <img style="width: 130px" src="{{asset('frontend/assets/img/imglogo.png')}}" alt="">

                            <p style="font-weight: bold; color: #000; margin-top: 15px; font-size: 18px;">
                                Seattle Sea Bridge
                            </p>
                            <p style="margin: 15px auto;">
                               Test  Upper Ridge Road, West Valley City, UT, USA<br>

                            </p>
                            <p>
                                <b>Phone:</b> 0987653456789
                            </p>

                            <hr style="border: 1px dashed rgb(131, 131, 131); margin: 25px auto">
                        </div>
                        <table style="width: 100%; table-layout: fixed">
                            <thead>
                            <tr>
                                <th style="width: 50px; padding-left: 0;">Sn.</th>
                                <th style="width: 280px;">Item Name</th>
                                <th>QTY</th>
                                <th style="text-align: right; padding-right: 0;">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="invoice-items">
                                <td>01</td>
                                <td>Tropicana Purenectar Pomegr</td>
                                <td>5 PC</td>
                                <td style="text-align: right;">₹ 100</td>
                            </tr>
                            <tr class="invoice-items">
                                <td>02</td>
                                <td>Tropicana Purenectar Pomegr</td>
                                <td>5 PC</td>
                                <td style="text-align: right;"> 100</td>
                            </tr>
                            <tr class="invoice-items">
                                <td>03</td>
                                <td>Tropicana Purenectar Pomegr</td>
                                <td>5 PC</td>
                                <td style="text-align: right;"> 100</td>
                            </tr>
                            <tr class="invoice-items">
                                <td>04</td>
                                <td>Tropicana Purenectar Pomegr</td>
                                <td>5 PC</td>
                                <td style="text-align: right;"> 100</td>
                            </tr>

                            </tbody>
                        </table>

                        <table style="width: 100%;
              background: #fcbd024f;
              border-radius: 4px;">
                            <thead>
                            <tr>
                                <th>Total</th>
                                <th style="text-align: center;">Item (10)</th>
                                <th>&nbsp;</th>
                                <th style="text-align: right;"> 396</th>

                            </tr>
                            </thead>

                        </table>

                        <table style="width: 100%;
              margin-top: 15px;
              border: 1px dashed #00cd00;
              border-radius: 3px;">
                            <thead>
                            <tr>
                                <td>Pickup Fee:</td>
                                <td style="text-align: right;"> 00</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td style="text-align: right;">32000</td>
                            </tr>
                            </thead>

                        </table>

                    </section>


                </div>


            </div>


        </div>

    </div>






@endsection

@section('script')


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
                    alert('Please fill out the form correctly')
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

    {{--google autocomplite--}}




@endsection