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
                                                <td class="text-right">Total</td>
                                                <td>$ ${all_total}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right">Fee</td>
                                                <td>$0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"><strong>Total</strong></td>
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
{{--<script type="text/javascript" src="https://js.stripe.com/v2/"></script>--}}
{{--<script type="text/javascript">--}}
    {{--$(function () {--}}
        {{--var $form = $(".require-validation");--}}
        {{--$('form.require-validation').bind('submit', function (e) {--}}
            {{--var $form = $(".require-validation"),--}}
                {{--inputSelector = ['input[type=email]', 'input[type=password]',--}}
                    {{--'input[type=text]', 'input[type=file]',--}}
                    {{--'textarea'--}}
                {{--].join(', '),--}}
                {{--$inputs = $form.find('.required').find(inputSelector),--}}
                {{--$errorMessage = $form.find('div.error'),--}}
                {{--valid = true;--}}
            {{--$errorMessage.addClass('hide');--}}
            {{--$('.has-error').removeClass('has-error');--}}
            {{--$inputs.each(function (i, el) {--}}
                {{--var $input = $(el);--}}
                {{--if ($input.val() === '') {--}}
                    {{--$input.parent().addClass('has-error');--}}
                    {{--$errorMessage.removeClass('hide');--}}
                    {{--e.preventDefault();--}}
                {{--}--}}
            {{--});--}}
            {{--if (!$form.data('cc-on-file')) {--}}
                {{--e.preventDefault();--}}
                {{--Stripe.setPublishableKey($form.data('stripe-publishable-key'));--}}
                {{--Stripe.createToken({--}}
                    {{--number: $('.card-number').val(),--}}
                    {{--cvc: $('.card-cvc').val(),--}}
                    {{--exp_month: $('.card-expiry-month').val(),--}}
                    {{--exp_year: $('.card-expiry-year').val()--}}
                {{--}, stripeResponseHandler);--}}
            {{--}--}}
        {{--});--}}

        {{--function stripeResponseHandler(status, response) {--}}
            {{--if (response.error) {--}}
                {{--$('.error')--}}
                    {{--.removeClass('hide')--}}
                    {{--.find('.alert')--}}
                    {{--.text(response.error.message);--}}
            {{--} else {--}}
                {{--/* token contains id, last4, and card type */--}}
                {{--var token = response['id'];--}}
                {{--$form.find('input[type=text]').empty();--}}
                {{--$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");--}}
                {{--$form.get(0).submit();--}}
            {{--}--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
{{--stripe--}}



{{--google autocomplite--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>--}}
{{--<script type="text/javascript"--}}
        {{--src="https://maps.google.com/maps/api/js?key=AIzaSyD4HhhOWqS24DpGNH0FVz0mbDKqV2th9tw&sensor=false&libraries=places,geometry"></script>--}}
{{--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}


{{--<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>--}}
{{--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>--}}

{{--<script src="assets/plugin/select2/js/select2.min.js"></script>--}}
{{--<script>--}}

    {{--$(document).ready(function () {--}}
        {{--google.maps.event.addDomListener(window, 'load', initialize);--}}
    {{--});--}}

    {{--function initialize() {--}}
        {{--var input = document.getElementById('autocomplete');--}}
        {{--var input1 = document.getElementById('autocomplete1');--}}
        {{--var autocomplete = new google.maps.places.Autocomplete(input);--}}
        {{--var autocomplete1 = new google.maps.places.Autocomplete(input1);--}}
        {{--autocomplete.addListener('place_changed', function () {--}}
            {{--var place = autocomplete.getPlace();--}}
            {{--$('.from_lat').val(place.geometry['location'].lat());--}}
            {{--$('.from_lng').val(place.geometry['location'].lng());--}}
            {{--$('.from_place_id').val(place.place_id);--}}
            {{--if ($('.to_lat').val()) {--}}
                {{--setdistance();--}}
            {{--}--}}
        {{--});--}}
        {{--autocomplete1.addListener('place_changed', function () {--}}
            {{--var place1 = autocomplete1.getPlace();--}}
            {{--$('#start_to').children('.to_lat').val(place1.geometry['location'].lat());--}}
            {{--$('#start_to').children('.to_lng').val(place1.geometry['location'].lng());--}}
            {{--$('#start_to').children('.to_place_id').val(place1.place_id);--}}

            {{--setdistance();--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}