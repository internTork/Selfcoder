@extends('layouts.app2')

@section('content')
    {{-- section 1 --}}
    <section class="hero-1 section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12">
                    <h1 class="title">Free to learn and build.
                        Pay as you grow.</h1>
                </div>
                <div class="col-md-8 col-12 col-center mb-50 pt-4">
                    <a class="ticket-btn" href="">Get Started For Free</a>
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
                <div class="col-md-12 col-12  mb-50">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" href="{{ route('home2') }}"><h4>My App</h4></a>
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true"><h4>My Plugins</h4></a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false"><h4>My Tamplate</h4></a>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="team-box py-3 rounded mt-4 py5">
                                                <p class="card-content">Plugins let you add additional elements, actions, and APIs to SelfCoder apps.
                                                    Build them with Javascript or with our visual editor. <br> <br>
                                                    You can optionally publish plugins on the
                                                    <strong>
                                                        <a class="text-primary font-weight-bold" href="{{ route('user_marketplace') }}">
                                                        SelfCoder Marketplace</a>
                                                    </strong>.
                                                </p> <br>	
                                                    <a class="ticket-btn" href="">New Plugin</a>
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
            </div>
        </div>
    </section>
    {{-- section 2 end --}}
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
            font-size: 16px !important;
            text-align: left;
            padding: 10px;
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
