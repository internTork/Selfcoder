@extends('layouts.app2')

@section('content')
    {{-- section 4 --}}
    {{-- <section class="pt-50 pb-50 section-end">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-10 col-12 col-center mb-50">
                    <h1 class="title">Create a free account to get started.</h1>
                    <a class="ticket-btn" href="#">Get Started For Free</a>
                    <p class="sub-text">Join 2,023,090 SelfCoders today and start building.</p>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section> --}}
    {{-- section 4 end --}}
    {{-- section 1 --}}
    <section class="hero-1 section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12 col-center mb-50">
                    <p>SHOWCASE</p>
                    <h1 class="title">Discover what you can build with Self-Coder.</h1>
                    <p class="">Self-Coder builders have launched and grown their businesses by building data-driven, fully functional apps with our simple visual editor..</p>
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
                <div class="col-md-12 col-12  heading">
                    <p><strong>FEATURED</strong>
                    </p>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true">
                                        <img src="{{ asset('assets/img/selfcoder/icon/Goodgigs.png') }}" class="img-fluid-feature"
                                            data-aos="fade-up" alt="Hero">
                                    </a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false"><img
                                            src="{{ asset('assets/img/selfcoder/icon/incomee.jpg') }}" class="img-fluid-feature"
                                            data-aos="fade-up" alt="Hero"></a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                        role="tab" aria-controls="nav-contact" aria-selected="false"><img
                                            src="{{ asset('assets/img/selfcoder/icon/nucode.png') }}" class="img-fluid-feature"
                                            data-aos="fade-up" alt="Hero"></a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-show"
                                        role="tab" aria-controls="nav-contact" aria-selected="false"><img
                                            src="{{ asset('assets/img/selfcoder/icon/treepoint.png') }}" class="img-fluid-feature"
                                            data-aos="fade-up" alt="Hero"></a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-md-5 col-5 mb-50">
                                            <h1 class="title-showcase">Goodgigs </h1>
                                            <p class="showcase-content">SelfCoder is the ultimate tool for someone with or without technical experience like myself.
                                                 With SelfCoder, I was able to turn an idea into an MVP in a matter of weeks.
                                                 The only limit is your own imagination.</p>
                                        </div>
                                        <div class="col-md-7 col-7 mb-50">
                                            <div class="show-case-img">
                                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}"
                                                    class="img-fluid show-right" data-aos="fade-up" alt="Hero">
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
                                        <div class="col-md-5 col-5 mb-50">
                                            <h1 class="title-showcase">Incomee</h1>
                                            <p class="showcase-content">SelfCoder is an incredible tool that allows everyone to build and validate
                                                any idea in a few weeks instead of waiting months.</p>
                                        </div>
                                        <div class="col-md-7 col-7 mb-50">
                                            <div class="show-case-img">
                                                <img src="{{ asset('assets/img/selfcoder/feature/incomee.jpg') }}"
                                                    class="img-fluid show-right" data-aos="fade-up" alt="Hero">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-md-5 col-5 mb-50">
                                            <h1 class="title-showcase">Nucode </h1>
                                            <p class="showcase-content">SelfCoder allowed us to scale Nucode to its current 2.0 version without
                                                 any limitations yet - including building a custom forum, an no-code expert marketplace,
                                                 and custom dashboards for every user.</p>
                                        </div>
                                        <div class="col-md-7 col-7 mb-50">
                                            <div class="show-case-img">
                                                <img src="{{ asset('assets/img/selfcoder/feature/funtionality.jpg') }}"
                                                    class="img-fluid show-right" data-aos="fade-up" alt="Hero">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- 4th section --}}
                                <div class="tab-pane fade" id="nav-show" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-md-5 col-5 mb-50">
                                            <h1 class="title-showcase">Treepoints </h1>
                                            <p class="showcase-content">Quick, efficient and aesthetic. SelfCoder allowed us to build a beautiful,
                                                fully functioning website with little-to-no knowledge of code and development.
                                            </p>
                                        </div>
                                        <div class="col-md-7 col-7 mb-50">
                                            <div class="show-case-img">
                                                <img src="{{ asset('assets/img/selfcoder/feature/treepoint.jpg') }}"
                                                    class="img-fluid show-right" data-aos="fade-up" alt="Hero">
                                            </div>
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

    {{-- section 3 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12">
                    <h1 class="title">No-code apps built on SelfCoder</h1>
                </div>
                <!-- col -->
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 3 end --}}

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


        /* show case  */

        .nav-tabs {
            /* border-bottom: 1px solid #dee2e6; */
            border-bottom: none;
        }

        .nav-item {
            /* width: 300px; */
            width: auto;
        }

        img.img-fluid-feature {
            width: 70px;
        }

        .title-showcase {
            font-size: 22px;
            margin: 15px 0;
        }

        p.showcase-content {
            font-size: 18px;
        }

        p.showcase-sub-text {
            font-size: 14px;
        }

        .showcase-link {
            color: blue;
        }

        a.showcase-link i {
            position: relative;
            top: 3px;
        }

        img.show-right {
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 10px 0px;
            background: white;
        }

        .showcase img {
            width: 100%;
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

    </style>
@endsection
