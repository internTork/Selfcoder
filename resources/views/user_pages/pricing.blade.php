@extends('layouts.app2')

@section('content')
    {{-- section 1 --}}
    <section class="hero-1 section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12">
                    <h2 class="heading text-center text-primary">Pricing</h2>
                    <h1 class="title">Free to learn and build. <br>
                        Pay as you grow.</h1>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 1 end --}}

    {{-- section 2 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12">
                    <p class="pricing-text">Our <strong class="text-primary">Free plan</strong> enables you to learn the platform and build your application.
                        Paid plans offer
                        additional features, such as white-labeling, a custom domain, access to the Bubble API and reserved
                        server capacity.</p>
                </div>
                <div class="col-md-12 col-12  mb-50">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true">Pay monthly</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Pay Yearly</a>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Free</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">
                                                    Core platform features<br>
                                                    Bubble branding<br>
                                                    Community support</p>

                                                <hr>
                                                <strong>Free</strong>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Personal</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">Core platform + API<br>
                                                    Custom domain<br>
                                                    Email support<br>
                                                    ... and much more!
                                                </p>

                                                <hr>
                                                <strong> $25/month</strong>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Professional</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">
                                                    3 units of server capacity<br>
                                                    2 application editors<br>
                                                    2 development versions<br>
                                                    ... and much more!</p>
                                                <hr>
                                                <strong> $115/month</strong>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Production</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">
                                                    10 units of server capacity <br>
                                                    15 application editors <br>
                                                    20 development versions <br>
                                                    ... and much more!</p>
                                                <hr>
                                                <strong> $475/month</strong>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    {{-- <div class="box-img">
                                                    <img src="{{ asset('assets/img/icon/ladybug.png') }}" alt="">
                                                </div> --}}
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Free</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">
                                                    Core platform features<br>
                                                    Bubble branding<br>
                                                    Community support</p>

                                                <hr>
                                                <strong>Free</strong>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    {{-- <div class="box-img">
                                                    <img src="{{ asset('assets/img/icon/ladybug.png') }}" alt="">
                                                </div> --}}
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Personal</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">Core platform + API<br>
                                                    Custom domain<br>
                                                    Email support<br>
                                                    ... and much more!
                                                </p>

                                                <hr>
                                                <strong> $25/month</strong>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    {{-- <div class="box-img">
                                                    <img src="{{ asset('assets/img/icon/ladybug.png') }}" alt="">
                                                </div> --}}
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Professional</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">
                                                    3 units of server capacity<br>
                                                    2 application editors<br>
                                                    2 development versions<br>
                                                    ... and much more!</p>
                                                <hr>
                                                <strong> $115/month</strong>

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box text-center py-3 rounded mt-4 py5">
                                                <div class="single-box">
                                                    {{-- <div class="box-img">
                                                    <img src="{{ asset('assets/img/icon/ladybug.png') }}" alt="">
                                                </div> --}}
                                                    <div class="box-tittle">
                                                        <h5 class="f-18 mt-4 mb-2 text-primary">Production</h5>
                                                    </div>
                                                </div>
                                                <p class="card-content">
                                                    10 units of server capacity <br>
                                                    15 application editors <br>
                                                    20 development versions <br>
                                                    ... and much more!</p>
                                                <hr>
                                                <strong> $475/month</strong>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
                <div class="col-md-12 col-12 mb-50  pt-6">
                    <a class="ticket-btn btn-block" href="">Compare Plans</a>
                </div>
            </div>
        </div>
    </section>
    {{-- section 2 end --}}

    {{-- section 3 --}}
    <section class="pt-50 pb-50 ">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box pricing-card-content py-3 rounded mt-4 py5">
                        <div class="box-tittle">
                            <h2 class="f-18 mb-10">Dedicated solutions</h2>
                        </div <p class="box-dec-pricing">For enterprise clients and apps with special requirements,
                             we can run a dedicated SelfCoder instance on a cluster in the AWS region of your choice.
                             <a href="" class="text-primary">Contact us</a> to learn more</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box pricing-card-content py-3 rounded mt-4 py5">
                        <div class="box-tittle">
                            <h2 class="f-18 mb-10">Build for your clients</h2>
                        </div <p class="box-dec-pricing">If you build sites and apps for your clients,
                            our <a href="" class="text-primary">Agency subscription</a> lets your team use all paid features
                            while you develop your applications.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box pricing-card-content py-3 rounded mt-4 py5">
                        <div class="box-tittle">
                            <h2 class="f-18 mb-10">Students, Universities & Non-profits</h2>
                        </div>
                        <p class="box-dec-pricing">We offer discounts for students and non-profit
                             organizations on all plans (excluding dedicated plans).
                             If you are an educational institution,
                              we also offer group subscriptions that you can offer to your students.
                             Please <a href="" class="text-primary">Contact us</a>  to learn more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 3 end --}}
@endsection


@section('style')
    @parent
    <style>
        .heading {
            text-align: left;
        }

        .title-left {
            text-align: left;
        }

        .wrapper {
            padding: 20px;
        }

        .details-collapse {
            text-align: left;
        }

        .nav-item {
            width: 300px;
        }

        .tab-pane {
            text-align: left;
            font-size: 18px;
            margin-top: 10px;
        }

        .section-2 {
            background: -webkit-linear-gradient(top, rgb(242, 243, 246) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .nav-tabs {
            border-bottom: none;
        }

        .nav-tabs .nav-item {
            widows: auto;
        }

        .card-content {
            font-size: 14px !important;
            min-height: 125px !important;
        }

        p.pricing-text {
            text-align: left;
            font-size: 18px;
        }

        p.pricing {
            font-size: 28px;
            font-weight: 700;
        }

        .compare-btn {
            width: 100%;
        }

        .pricing-card-content {
            text-align: left;
            padding: 20px;
            border-radius: 10px !important;
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 10px 0px;
        }

        p.box-dec-pricing {
            font-size: 18px;
        }

        .section-end {
            background-color: rgb(16, 6, 53);
            color: white !important;
        }

        .section-end h1 {
            color: white;
        }

        .hero-1-content .sub-text {
            font-size: 18px;
            margin-top: 10px;
        }

        .py5 {
            padding: 20px;
            overflow: visible;
            /* background: none rgba(241, 243, 246, 0.5); */
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 2px 0px;
            transition: background 200ms ease 0s, box-shadow 200ms ease 0s;
            background: #ffff;
        }

        .py5:hover {
            background: white;
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 10px 0px;
        }

    </style>
@endsection
