@extends('layouts.app')

@section('content')
    {{-- section 1 --}}
    <section class="hero-1 section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12 col-center mb-50">
                    <p>SHOWCASE</p>
                    <h1 class="title">Find out what you can create using Self-Coder.</h1>
                    <p class="">By using our straightforward visual editor to create data-driven, fully functional apps, Self-Coder builders have started and expanded their businesses.</p>
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
                            <nav data-aos="fade-left mb-4">
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

    {{-- section 4 --}}
    <section class="pt-50 pb-50 section-end">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-10 col-12 col-center mb-50">
                    <h1 class="title">Create a free account to get started.</h1>
                    <a class="ticket-btn btn-primary {{ Route::is('home') ? 'active' : '' }}" href="" data-toggle="modal" data-target="#loginmodal">Get started for free</a>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 4 end --}}
@endsection
<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        {{-- <div class="modal-header">

        </div> --}}
        <div class="modal-body">
            <section class="" style="">
                <!-- Container -->
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div>
                                <img class="mx-auto d-block tork-logo" src="{{ asset('assets/img/tork-logo.png') }}" alt=""><br>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="m-1 col-sm-12 col-md-12 col-lg-12">
                            <div class="pt-5 mb-20">
                                <form class="form-signin">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills mb-4">
                                        <li class="pill-1">
                                            <a class="nav-link active  btn-left-border" data-toggle="tab" href="#login">Login</a>
                                        </li>
                                        <li class="pill-2">
                                            <a class="nav-link btn-right-border " data-toggle="tab" href="#register">Register</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content pr-3">

                                        <!-- Tab1 -->
                                        <div id="login" class="  tab-pane active">
                                            <div class="form-group">
                                                <label for="inputEmail" class="">Email<span class="text-danger">*</span></label>
                                                <input type="email" id="inputEmail" class="form-control input-1 mb-4" placeholder="example@gmail.com" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="">Password<span class="text-danger">*</span></label>
                                                <input type="password" id="inputPassword" class="form-control input-1 mb-4" placeholder="********" required>
                                            </div>
                                            <div class="one-line mb-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" checked="checked" value="remember-me"> Remember me
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <a class="forgot" href="#">Forgot password?</a>
                                                </div>
                                            </div>
                                                <a class="ticket-btn btn-block text-center" href="{{ route('home2') }}">Login</a>
                                                <a href="{{ route('home2') }}" class="ticket-btn btn-block text-center">
                                                    <img alt="" class="img-google" src="{{ asset('assets/img/selfcoder/plugin/plugin8.png') }}"> Login with Google
                                                </a>
                                            </div>

                                        <!-- Tab2 -->
                                        <div id="register" class=" tab-pane fade">
                                            <label for="inputEmail" class="">Email <span class="text-danger">*</span></label>
                                            <input type="email" id="inputEmail" class="form-control  input-1 mb-4" placeholder="Email address" required autofocus>
                                            <label for="inputPassword" class="">Password<span class="text-danger">*</span></label>
                                            <input type="password" id="inputPassword" class="form-control input-1 mb-4" placeholder="Password" required>
                                            <label for="inputPassword" class="">Confirm Password<span class="text-danger">*</span></label>
                                            <input type="password" id="inputPassword" class="form-control input-1 mb-4" placeholder="Repeat Password" required>

                                            <div class="checkbox mb-3">
                                                {{-- <label>
                                                    <input type="checkbox" value="Register-as-instructor"> Register as instructor
                                                </label> --}}
                                            </div>
                                            <a class="ticket-btn btn-block text-center" href="{{ route('home2') }}">Register</a>
                                            <a href="{{ route('home2') }}" class="ticket-btn btn-block text-center">
                                                <img alt="" class="img-google" src="{{ asset('assets/img/selfcoder/plugin/plugin8.png') }}"> Login with Google
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.container -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container -->
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

@section('style')
    @parent
    <style>
    .one-line{
        display: flex;
        justify-content: space-between;
    }
    .btn-left-border{
        /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; */
        border-top-left-radius: 10px !important;
        border-bottom-left-radius: 10px !important;
        background: #d8f1e9;
    }
    .btn-right-border{
        /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; */
        border-top-right-radius: 10px !important;
        border-bottom-right-radius: 10px !important;
        background: #d8f1e9;
    }
    .input-1 {
    position: relative;
    width: 100%;
    height: 50px;
    background: #fff;
    font-size: 14px;
    padding: 10px 50px 10px 30px;
    border-radius: 30px;
    -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
    border: none;
}
        .tork-logo{
            width: 90px;
            height: auto;
        }
        a.log{
            color: white !important;
        }
        .rounded-0{
            border-radius: 10px !important;
        }
        .img-google{
            height: 20px;
            width: 20px;
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
