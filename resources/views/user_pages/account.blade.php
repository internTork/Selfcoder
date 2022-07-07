@extends('layouts.app2')

@section('content')
    {{-- section 1 --}}
    <section class="hero-1 section-2 mb-20" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50">
                    <section id="qualification">
                        <div class="experience sm">
                            <h2 class="text-left p-4 font-weight-700">My Account</h2>
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class=" nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true"><h4>Account</h4></a>
                                    <a class=" nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false"><h4>Plan & Billing</h4></a>
                                    <a class=" nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false"><h4>Marketplace</h4></a>
                                    <a class=" nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-danger"
                                        role="tab" aria-controls="nav-danger" aria-selected="false"><h4>Danger zone</h4></a>
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
                                            <div class="py-3 rounded mt-4 ">
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

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="py-3 rounded mt-4 ">
                                                <p class="card-content">Build templates to ease app creation for you and others.
                                                <br><br>
                                                You can publish templates on the
                                                <strong>
                                                    <a class="text-primary font-weight-bold" href="{{ route('user_marketplace') }}">
                                                    SelfCoder Marketplace</a>
                                                </strong>.
                                                </p> <br>
                                                <a class="ticket-btn" href="">New Tamplate</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- study end -->
                                </div>
                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="py-3 rounded mt-4 ">
                                                <p class="card-content">Build templates to ease app creation for you and others.
                                                <br><br>
                                                You can publish templates on the
                                                <strong>
                                                    <a class="text-primary font-weight-bold" href="{{ route('user_marketplace') }}">
                                                    SelfCoder Marketplace</a>
                                                </strong>.
                                                </p> <br>
                                                <a class="ticket-btn" href="">New Tamplate</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- study end -->
                                </div>
                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-danger" role="tabpanel"
                                    aria-labelledby="nav-danger-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 wow fadeInUp  delay-4s animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="py-3 rounded mt-4 ">
                                                <h3 class="text-uppercase text-danger">danger zone</h3>
                                                <p class="card-content">You can delete your account and remove yourself from our lists. This cannot be undone!
                                                </p> <br>
                                                <div class="col-md-4">
                                                    <a class="ticket-btn btn-block text-center" href="">Delete my account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- study end -->
                                </div>
                            </div>

                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 1 end --}}
@endsection


@section('style')
    @parent
    <style>
    .nav-link {
        display: block;
        padding: .5rem 1rem;
        }
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
        .mb-20{
            margin-bottom: 15rem !important;
        }

    </style>
@endsection
