@extends('frontend.layout.layout')
@section('style_link')
    <link href=" {{asset('assets')}}/css/step-card.css" rel="stylesheet">
@endsection
@section('main_content')
    <!-- Hero Start -->
    <section class="apihu-port-hero-area" id="apihu-port-hero">
        <!-- Hero bg shape -->
        {{--<img class="apihu-port-hero-shape-1" src="{{asset('frontend/assets')}}/img/port-img-31/hero-shape.png" alt="Shape">--}}
        {{--<img class="apihu-port-hero-shape-2" src="{{asset('frontend/assets')}}/img/port-img-31/hero-figma-logo.png" alt="Shape">--}}
        {{--<img class="apihu-port-hero-shape-3" src="{{asset('frontend/assets')}}/img/port-img-31/hero-ai-logo.png" alt="Shape">--}}
        <img class="apihu-port-hero-shape-4" src="{{asset('frontend/assets')}}/img/port-img-31/hero-ps-logo.png"
             alt="Shape">

        <span class="apihu-port-hero-side-style-text">SSB</span>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="apihu-port-hero-left">
                        <p class="apihu-port-hero-subtitle wow slideInDown">We offer fast & reliable</p>
                        <h1 class="apihu-port-hero-title cd-headline clip is-full-width">
                            <span class="apihu-port-hero-title-small-text top-subtitle-txt-wd">Delivery Services To Fit All Your Needs</span>
                        </h1>

                        <h6 class="top-subtitle-txt "> At Seattle SEA Bridge, we pride ourselves on providing top-notch courier delivery services. We know that shipping can be stressful, so we go above and beyond to make sure our clients are taken care of. We have a team of experienced professionals who can handle any type of shipment. And because we're always nearby, you can rest assured that your items will get where they need to go safely and on time. So if you're in need of a reliable delivery solution, then choose Seattle SEA Bridge</h6>
                        {{--<p class="apihu-port-hero-text wow slideInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>--}}
                        <ul class="apihu-port-hero-btn-wrap wow slideInUp">
                            <li><a class="apihu-port-primary-btn apihu-port-hero-btn-gradient"
                                   href="{{route('user.shipment')}}">Create Shipment</a></li>
                            <li>
                                <apan class="apihu-port-secondary-btn apihu-port-hero-btn-white point"
                                      data-toggle="modal" data-target="#shipmetCalculate"> Calculate Rate
                                </apan>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!-- hero area social -->
                    <div class="apihu-port-hero-social">
                        <ul>
                            <li><a href="https://www.facebook.com/groups/572863786754087"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="apihu-port-hero-right wow slideInRight">
                        <div class="apihu-port-hero-right-img">
                            <img height="100px" src="{{asset('frontend/assets')}}/img/ship2.png" alt="Hero Area">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Hero End -->
    <!-- CTA Start -->
    {{--<section class="apihu-port-cta-area" style="background-image: url('{{ asset('frontend/assets')}}/img/port-img-31/cta-bg.png');">--}}
    <section class="apihu-port-cta-area"
             style="background-image: url('{{ asset('frontend/assets')}}/img/port-img-31/cta-bg.png');">
        {{--<img class="apihu-port-cta-shape" src="{{asset('frontend/assets')}}/img/port-img-31/cta-bg.png" alt="Cta shape">--}}

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="apihu-port-cta-content-wrap">

                        <img class="apihu-port-cta-container-shape"
                             src="{{asset('frontend/assets')}}/img/port-img-31/cta-bg-shape.png"
                             alt="Cta container shape">

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-12 col-lg-12">
                                <div class="apihu-port-cta-content-text">

                                    <div class="src-card d-flex justify-content-center ">

                                        <div class="row src-input-div">
                                            <div class="col-sm-6">
                                                <input type="text" class="src-input-style"
                                                       placeholder=" Enter Tracking Number">

                                            </div>
                                            <div class="col-sm-6 btn-end-site">
                                                <button class="tract-btn">Track Shipment</button>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!-- CTA End -->--}}

    <!-- About Start -->
    <section class="apihu-port-about-area" id="apihu-port-resume">
        <img style="left: 48px;" src="{{asset('frontend/assets')}}/img/port-img-31/about-shape-1.png" alt=""
             class="apihu-port-about-shape">

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="apihu-port-about-left wow slideInLeft">
                        <div class="apihu-port-about-img">
                            <img src="{{asset('frontend/assets')}}/img/delivery1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="apihu-port-about-right">
                        <h3 class="apihu-port-about-subtitle">Seattle Sea Bridge</h3>
                        <h2 class="apihu-port-about-title">The undisputed global leader in international express
                            <span>shipping</span></h2>
                        <p class="apihu-port-about-text">The Seattle Sea Bridge team consists of over 50,000 shipping professionals who share a passion for logistics. We work in a unique environment that is as innovative as a start-up, but with the power of an international organization. We are the world's most international company, operating in more than 50 countries and territories across the globe. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Service Start -->
    <section class="apihu-port-service-area" id="apihu-port-feature">
        <img class="apihu-port-service-shape-1" src="{{asset('frontend/assets')}}/img/port-img-31/service-shape-1.png"
             alt="Service Shape">
        <img class="apihu-port-service-shape-2" src="{{asset('frontend/assets')}}/img/port-img-31/service-shape-2.png"
             alt="Service Shape">

        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="apihu-port-section-heading">
                        <p class="apihu-port-section-subtitle">Why Choose Us</p>
                        <h2 class="apihu-port-section-title">Leading the industry and connecting the <span
                                    class="apihu-port-section-title-color">world</span> </h2> <br>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="apihu-port-single-service wow fadeInUp" data-wow-delay="0.2s">
                        <div class="apihu-port-service-icon-box">
                            <i class="flaticon-social-media-marketing"></i>
                        </div>
                        <h3 class="apihu-port-single-service-title">Easy International Shipping</h3>
                        <p class="apihu-port-single-service-text">A wide range of shipping options are available to solve your international export challenges, with door-to-door shipping to major territories across the globe.</p>
                        <a class="apihu-port-single-service-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="apihu-port-single-service wow fadeInUp" data-wow-delay="0.4s">
                        <div class="apihu-port-service-icon-box">
                            <i class="flaticon-social-media-marketing"></i>
                        </div>
                        <h3 class="apihu-port-single-service-title">Preferential Shipping Rates</h3>
                        <p class="apihu-port-single-service-text">Our shipping rates are designed to fit your business volume - so you don't have to worry about overpaying.</p>
                        <a class="apihu-port-single-service-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="apihu-port-single-service wow fadeInUp" data-wow-delay="0.6s">
                        <div class="apihu-port-service-icon-box">
                            <i class="flaticon-social-media-marketing"></i>
                        </div>
                        <h3 class="apihu-port-single-service-title">Flexible Delivery Options</h3>
                        <p class="apihu-port-single-service-text">Your customers will appreciate the convenience of our On Demand Delivery services, which let them choose when and where their package is delivered.</p>
                        <a class="apihu-port-single-service-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="apihu-port-single-service wow fadeInUp" data-wow-delay="0.8s">
                        <div class="apihu-port-service-icon-box">
                            <i class="flaticon-social-media-marketing"></i>
                        </div>
                        <h3 class="apihu-port-single-service-title">Trusted Services</h3>
                        <p class="apihu-port-single-service-text">You're in good company - some of the world's biggest brands and organizations use the Seattle SEA Bridge.</p>
                        <a class="apihu-port-single-service-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <section class="apihu-port-testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 d-flex justify-content-center">
                    <div class="apihu-port-section-heading">
                        <p class="apihu-port-section-subtitle text-center">Our Customer Stories</p>
                        <h2 class="apihu-port-section-title">Better Service Starts Here</h2>
                        {{--<p class="apihu-port-section-text">--}}
                        {{--Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo <br> viverra maecenas accumsan lacus vel facilisis.--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="apihu-port-testimonial-slider owl-carousel">
                        <div class="apihu-port-single-testimonial">
                            <ul class="apihu-port-testimonial-ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <p class="apihu-port-testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                cumsan lacus vel facilisis.’’</p>
                            <div class="apihu-port-testimonial-meta">
                                <div class="apihu-port-testimonial-meta-text">
                                    <h3>Jonah D. Kwon</h3>
                                    <p>CEO / Founder</p>
                                </div>
                                <div class="apihu-port-testimonial-meta-img">
                                    <img src="{{asset('frontend/assets')}}/img/port-img-31/testimonial-author-1.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                        </div>
                        <div class="apihu-port-single-testimonial">
                            <ul class="apihu-port-testimonial-ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <p class="apihu-port-testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                cumsan lacus vel facilisis.’’</p>
                            <div class="apihu-port-testimonial-meta">
                                <div class="apihu-port-testimonial-meta-text">
                                    <h3>Jonah D. Kwon</h3>
                                    <p>CEO / Founder</p>
                                </div>
                                <div class="apihu-port-testimonial-meta-img">
                                    <img src="{{asset('frontend/assets')}}/img/port-img-31/testimonial-author-2.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                        </div>
                        <div class="apihu-port-single-testimonial">
                            <ul class="apihu-port-testimonial-ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <p class="apihu-port-testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                cumsan lacus vel facilisis.’’</p>
                            <div class="apihu-port-testimonial-meta">
                                <div class="apihu-port-testimonial-meta-text">
                                    <h3>Jonah D. Kwon</h3>
                                    <p>CEO / Founder</p>
                                </div>
                                <div class="apihu-port-testimonial-meta-img">
                                    <img src="{{asset('frontend/assets')}}/img/port-img-31/testimonial-author-1.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                        </div>
                        <div class="apihu-port-single-testimonial">
                            <ul class="apihu-port-testimonial-ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <p class="apihu-port-testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                cumsan lacus vel facilisis.’’</p>
                            <div class="apihu-port-testimonial-meta">
                                <div class="apihu-port-testimonial-meta-text">
                                    <h3>Jonah D. Kwon</h3>
                                    <p>CEO / Founder</p>
                                </div>
                                <div class="apihu-port-testimonial-meta-img">
                                    <img src="{{asset('frontend/assets')}}/img/port-img-31/testimonial-author-2.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                        </div>
                        <div class="apihu-port-single-testimonial">
                            <ul class="apihu-port-testimonial-ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <p class="apihu-port-testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                cumsan lacus vel facilisis.’’</p>
                            <div class="apihu-port-testimonial-meta">
                                <div class="apihu-port-testimonial-meta-text">
                                    <h3>Jonah D. Kwon</h3>
                                    <p>CEO / Founder</p>
                                </div>
                                <div class="apihu-port-testimonial-meta-img">
                                    <img src="{{asset('frontend/assets')}}/img/port-img-31/testimonial-author-1.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                        </div>
                        <div class="apihu-port-single-testimonial">
                            <ul class="apihu-port-testimonial-ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <p class="apihu-port-testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                cumsan lacus vel facilisis.’’</p>
                            <div class="apihu-port-testimonial-meta">
                                <div class="apihu-port-testimonial-meta-text">
                                    <h3>Jonah D. Kwon</h3>
                                    <p>CEO / Founder</p>
                                </div>
                                <div class="apihu-port-testimonial-meta-img">
                                    <img src="{{asset('frontend/assets')}}/img/port-img-31/testimonial-author-2.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Clients Area -->
    <section class="apihu-port-clients-area" id="apihu-port-clients">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="apihu-port-section-heading">
                        <p class="apihu-port-section-subtitle">Our Clients </p>
                        <h2 class="apihu-port-section-title">Our customers are at the heart of our organization</h2>
                        <p class="apihu-port-section-text">
                            We are committed to making customers satisfied. We always work hard to ensure our customers are happy with our services. We want to make sure that they feel valued and appreciated. We strive to provide the best possible experience for our customers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 apihu-port-clients-carousel owl-carousel">
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-1.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-1.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-2.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-2.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-3.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-3.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-4.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-4.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-5.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-5.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-1.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-1.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-2.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-2.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-3.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-3.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-4.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-4.png" alt="Client">
                    </div>
                    <div class="apihu-port-single-client-box">
                        <img class="apihu-port-client-img"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-5.png" alt="Client">
                        <img class="apihu-port-client-img-white"
                             src="{{asset('frontend/assets')}}/img/port-img-31/clients/client-white-5.png" alt="Client">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients End -->

    <!-- Contact Start -->
    <section class="apihu-port-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-left">
                    <div class="apihu-port-section-heading">
                        <p class="apihu-port-section-subtitle">Contact us</p>
                        <h2 class="apihu-port-section-title">Get your products delivered on time</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="apihu-port-section-heading">
                        <p class="apihu-port-section-text">
                            {{--Choose Seattle SEA Bridge, We promise your items to be delivered safe and on time--}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="apihu-port-contact-left">
                        <form>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit">Submit Now <i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="apihu-port-contact-right">
                        <div class="apihu-port-contact-right-img">
                            <img src="{{asset('frontend/assets')}}/img/port-img-31/contact-right.jpg"
                                 alt="Contact Right">
                        </div>
                        <div class="apihu-port-contact-right-content">
                            <div class="apihu-port-contact-icon-box">
                                <i class="flaticon-help"></i>
                            </div>
                            <div class="apihu-port-contact-text">
                                <span class="apihu-port-contact-number">+974784895</span>
                                <span class="apihu-port-contact-email">admin@example.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    {{--login page--}}
    <!-- Button trigger modal -->


    <!-- Modal -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    {{--@section('modal')--}}

    <!-- Button trigger modal -->

    <!-- Modal -->




    <!-- Modal calculation-->
    <div class="modal fade" id="shipmetCalculate" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg customise">
            <div class="modal-content rate-calculation-modal">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12  apihu-port-single-service ">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="row p-0" >
                                <div class="col-sm-12 ">

                                        <div class="row d-flex justify-content-center maincrd-st">
                                            <div class="col-sm-10 p-2 step step1">
                                                {{--<div class="text-center frtop" style="margin-top: 32px"><a class="sing2">Shipment</a>--}}
                                                {{--&nbsp; <a class="loginrg" href="">Create</a>--}}
                                                {{--</div>--}}
                                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 1-</span> &nbsp;
                                                    <span class="sing2">Shipping Address</span> &nbsp;&nbsp;
                                                </div>


                                                <input type="hidden" class="from_lat" name="from_lat">
                                                <input type="hidden" class="from_lng" name="from_lng">
                                                <input type="hidden" class="distance" name="distance">
                                                <input type="hidden" class="from_place_id" name="from_place_id">

                                                <div class="row mt-3">
                                                    <div class="col-sm-6">
                                                        <div class="form-row m-1 row justify-content-center card-border-style">
                                                            <div class="col-sm-11">
                                                                <div><strong>From</strong></div>
                                                            </div>
                                                            <div class="col-sm-11  mt-2">
                                                                <textarea name="" class="form-control" id="" cols="10"
                                                                          rows="1" placeholder="Enter Pickup Address" ></textarea>
                                                                {{--<span class="text-danger error_span" id="sender_name">This Field is Required</span>--}}
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 " style="  padding: 0px;">

                                                        <div class="col-sm-12  mt-2 pdr">
                                                            <div class="form-row row m-1  justify-content-center card-border-style">
                                                                <div class="col-sm-12">
                                                                    <div><strong>To</strong></div>
                                                                </div>
                                                                <div class="col-sm-12  mt-2">
                                                                <textarea name="" class="form-control" id="" cols="20"
                                                                          rows="1" placeholder="Enter Delivery Address"></textarea>
                                                                    {{--<span class="text-danger error_span" id="sender_name">This Field is Required</span>--}}
                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>

                                                    <div class="col-sm-12 text-center submitbtn mt-5 btn-marginn-top">
                                    <span class="btn  topbtn-style" onclick="stepShow('step2')"> Next &nbsp; <img
                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                alt=""></span>
                                                    </div>


                                                </div>
                                            </div>
                                            <div style="display: none" class="col-sm-12 pl-2 step step2 ">

                                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 2-</span> &nbsp;
                                                    <span class="sing2">Create Item</span></div>

                                                <div class="mt-4">
                                                    <div class="form-row row justify-content-center g-3">
                                                        <div class="col-sm-8 mt-4">
                                                            <select title="Select your surfboard" style="" oninput="producttype(this)"
                                                                    class="selectpicker form-control itemlist">
                                                                <option>Select...</option>
                                                                @foreach($product_type as $product_info)
                                                                    <option value="{{$product_info->id}}"
                                                                            data-thumbnail="images/icon-chrome.png"> {{$product_info->name}} </option>

                                                                @endforeach

                                                            </select>


                                                        </div>

                                                        <div class="col-sm-12 mt-4 table-position" >

                                                            <table class="table table-borderless">
                                                                <thead>
                                                                <th class="listwidth list_a">List</th>
                                                                <th class="list_b">Size</th>
                                                                <th class="list_c">Quantity</th>
                                                                <th class="list_d">Weight</th>
                                                                {{--<th>Price</th>--}}
                                                                <th class="list_e">Action</th>
                                                                </thead>
                                                                <tbody id="item">
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>

                                                <br><br>
                                                <div class="col-sm-12 text-center submitbtn mt-5">

                            <span class="btn  topbtn-style2" onclick="stepShow('step1')"><img
                                        class="imgiconnext imgback"
                                        src="{{asset('assets/frontend/images/arrowback.png')}}"
                                        alt=""> &nbsp; Back</span>

                                                    <span class="btn btn-info topbtn-style" onclick="stepShow('step4')"> Next &nbsp; <img
                                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                                alt=""></span>
                                                </div>


                                            </div>

                                            <div style="display: none" class="col-sm-10 p-2 step step3">
                                                <div class="text-center frtop" style="margin-top: 32px">
                                                </div>
                                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 3-</span> &nbsp;
                                                    <span class="sing2">Set Pick Up Time</span></div>
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
                                                <div class="col-sm-12 text-center submitbtn mt-5">
                                    <span class="btn  topbtn-style2" onclick="stepShow('step2')"><img
                                                class="imgiconnext imgback"
                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>
                                                    <span class="btn btn-info topbtn-style" onclick="stepShow('step4')"> Next &nbsp; <img
                                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                                alt=""></span>

                                                </div>


                                            </div>

                                            <div style="display: none" class="col-sm-10 p-2 step step4">
                                                <div class="text-center frtop" style="margin-top: 32px">

                                                </div>
                                                <div class="text-center frtop" style="margin-top: 32px"><span>Step 4-</span> &nbsp;
                                                    <span class="sing2">Invoice</span></div>
                                                <div class="row mt-4 justify-content-center">
                                                    <div class="col-sm-9 inv">
                                                        <table class="table table-borderless">
                                                            <thead>
                                                            <th class="listwidth">List</th>
                                                            <th>Quantity</th>
                                                            <th>Rate</th>
                                                            </thead>
                                                            <tbody class="invoice" id="invoice"></tbody>

                                                            <tfoot class="footerborder footer">
                                                            </tfoot>

                                                        </table>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="col-sm-12 text-center submitbtn mt-5">
                                                    <span class="btn  topbtn-style2" onclick="stepShow('step2')"><img
                                                                class="imgiconnext imgback"
                                                                src="{{asset('assets/frontend/images/arrowback.png')}}" alt=""> &nbsp; Back</span>
                                                    <button  class="btn btn-info topbtn-style"> Done &nbsp; <img
                                                                class="imgiconnext" src="{{asset('assets/frontend/images/arrow.png')}}"
                                                                alt=""></button>

                                                </div>


                                            </div>


                                </div>


                            </div>


                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- Modal calculation-->


    {{--Rate Calculation--}}
    <div style="display:none">
        <table>
            <tbody id="stander">
            <tr>
                <input type="hidden" class="item_id" value="1">
                <td class="item_name">Box (standard size)</td>
                <input type="hidden" name="product_category[]" value="1">
                <td>
                    <select class="standeroption subcategory itemlist" name="standar_type[]" oninput="calculation()" id="">
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
                <td class="total ds" >100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
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
                <td class="total ds"></td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>

            <tbody id="mattres">
            <tr>
                <input type="hidden" class="item_id" value="3">
                <td class="item_name">Mattress</td>
                <input type="hidden" name="product_category[]" value="3">
                <td class="tvinput">
                    <select class="standeroption subcategory itemlist" oninput="calculation()" name="mattress_category[]" id="">
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
                <td class="total ds">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
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
                <td class="total ds">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>

            <tbody id="other">
            <tr>
                <input type="hidden" class="item_id" value="5">
                <input type="hidden" name="product_category[]" value="5">
                <td><input class="item_name other-style" type="text" class="w-75" name="other_name[]" placeholder="other"></td>
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
                <td class="total ds">100</td>
                <td><span class="deleteitem" onclick="deleteitem(this)"><i class="fa-solid fa-trash"></i></span></td>
            </tr>

            </tbody>
        </table>


    </div>
    {{--Rate Calculation--}}



    {{--login page--}}

@endsection

@include('frontend.layout.partial._script_shipment_calculation')

@section('script')
    <script>
        $('.showi').on('click', function () {

            if ($("#eyetype").hasClass("fa-eye")) {
                $('#loginpass').attr('type', 'text')
                $("#eyetype").removeClass('fa-eye');
                $("#eyetype").addClass('fa-eye-slash');
            } else {
                $('#loginpass').attr('type', 'password')
                $("#eyetype").removeClass('fa-eye-slash');
                $("#eyetype").addClass('fa-eye');

            }


        })

    </script>
@endsection