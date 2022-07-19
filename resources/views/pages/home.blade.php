@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="hero-1" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container-fluid">
            <div class="row hero-1-content">
                <div class="col-md-12 ">
                    <h1 class="title font-weight-bold">Without coding build web apps</h1>
                </div>
                <div class="col-md-6 col-6 col-offset-2 col-center mb-50">
                    <p class="">Selfcoder is working in IT services developing software applications</p>
                        <a class="ticket-btn btn-primary {{ Route::is('login') ? 'active' : '' }}" href="" data-toggle="modal" data-target="#loginmodal">Get started for free</a>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center">
                        <img src="{{ asset('assets/img/selfcoder/images/selfcoder.jpg') }}" class="img-fluid" data-aos="fade-up"
                            alt="Hero">
                    </div>
                </div>
                {{-- </div>
                <div class="col-md-8 col-12 col-center mb-50">
                    <a class="ticket-btn" href="javascript:void(0)">Browse Frontend</a>
                    <a class="backend-btn" href="javascript:void(0)">Browse Backend</a>
                </div> --}}
            </div>
        </div>
        <!-- Container -->
    </section>
    <!-- /Hero -->

    {{-- work-section start --}}
    <section class="pt-50 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-50">
                    <div class="row mt-5 pt-2">
                        <!-- col -->
                        <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box py-3 rounded mt-4 py5">
                                <div class="item-box">
                                    <div class="box-img ">
                                        <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/2.png') }}" alt="">
                                    </div>
                                    <div class="box-tittle">
                                        <h2 class="m-4">First Growing</h2>
                                    </div>
                                </div>
                                <p class="box-dec">We look at every new assignment as an opportunity to nurture a long term business relation.</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box  py-3 rounded mt-4 py5">
                                <div class="item-box">
                                    <div class="box-img ">
                                        <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/1.png') }}" alt="">
                                    </div>
                                    <div class="box-tittle">
                                        <h2 class="m-4">Expert Peoples</h2>
                                    </div>
                                </div>
                                <p class="box-dec ">Our valued clients who believed in our capabilities and entrusted us to be their partner.</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box  py-3 rounded mt-4 py5">
                                <div class="item-box">
                                    <div class="box-img ">
                                        <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/3.png') }}" alt="">
                                    </div>
                                    <div class="box-tittle">
                                        <h2 class="m-4">Creative Ideas</h2>
                                    </div>
                                </div>
                                <p class="box-dec ">Everyday we come to work and also transform the ideas of our clients into working applications.</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <div class="col-md-8 offset-2 col-center pt-4">
                            <h1 class="title">With SelfCoder, you can create, operate, and run strong products.</h1>
                            <div class="col-md-6 col-6 col-offset-2 col-center mb-50">
                                <a href=""><p class="text-primary">Edit this page in SelfCoder to see how it works  </p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- work-section end --}}
    {{-- work-section start --}}
    <section class="pt-50 pb-50">
        <div class="container">
            <!-- study -->
            <div class="row">
                <div class="col-md-5 col-5 mb-50">
                    <h1 class="title-showcase">Full functionality </h1>
                    <p class="showcase-content">SelfCoder is the ultimate tool for someone with or without technical experience like myself.
                            With SelfCoder, I was able to turn an idea into an MVP in a matter of weeks.
                            The only limit is your own imagination.</p>
                    <a class="ticket-btn btn-primary {{ Route::is('home') ? 'active' : '' }}" href="" data-toggle="modal" data-target="#loginmodal">Get started for free</a>
                </div>
                <div class="col-md-7 col-7 mb-50">
                    <div class="show-case-img">
                        <img src="{{ asset('assets/img/selfcoder/feature/role2.jpg') }}"
                            class="img-fluid show-right" data-aos="fade-up" alt="Hero">
                    </div>
                </div>
            </div>
            <!-- study end -->
        </div>
    </section>
    {{-- work-section end --}}
    {{-- work-section start --}}
    <section class="pt-50 pb-50">
        <div class="container">
            <!-- study -->
            <div class="row">
                <div class="col-md-7 col-7 mb-50">
                    <div class="show-case-img">
                        <img src="{{ asset('assets/img/selfcoder/workflow.png') }}"
                            class="img-fluid show-right" data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-5 col-5 mb-50">
                    <h1 class="title-showcase">Robust, scalable infrastructure </h1>
                    <p class="showcase-content">The setup of a deployment process to a web server and management
                         of your code are requirements for traditional web applications.
                          SelfCoder takes care of hosting and deployment for you.
                           The quantity of users, the amount of traffic,
                         or the amount of data storage are all unrestricted.</p>
                    <a class="ticket-btn btn-primary {{ Route::is('home') ? 'active' : '' }}" href="" data-toggle="modal" data-target="#loginmodal">Get started for free</a>
                </div>
            </div>
            <!-- study end -->
        </div>
    </section>
    {{-- work-section end --}}
 {{-- section 2  --}}
 <section class="pt-50 pb-50 section-2">
    <!-- Container -->
    <div class="container">
        <div class="row hero-1-content pt-20">
            <div class="col-md-10 col-12 col-center mb-50 pt-4">
                <h1 class="title">Pixel-perfect designs</h1>
            </div>
            <div class="col-md-10 col-10 col-offset-1 col-center mb-50">
                <p class="">SelfCoder allows complete design freedom without requiring any HTML or CSS expertise.
                     Make dynamic content and mobile-friendly layouts for a finished product
                    that you can proudly display to potential clients, consumers, or investors.</p>
            </div>
            <!-- col -->
            <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-box text-center py-3 rounded mt-4 py5">
                    <div class="single-box">
                        <img class="key-feature-img" src="{{ asset('assets/img/selfcoder/pixel/pixel.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-box text-center py-3 rounded mt-4 py5">
                    <div class="single-box">
                        <img class="key-feature-img" src="{{ asset('assets/img/selfcoder/blog/blog1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-box text-center py-3 rounded mt-4 py5">
                    <div class="single-box">
                        <img class="key-feature-img" src="{{ asset('assets/img/selfcoder/blog/blog2.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-box text-center py-3 rounded mt-4 py5">
                    <div class="single-box">
                        <img class="key-feature-img" src="{{ asset('assets/img/selfcoder/blog/blog3.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-box text-center py-3 rounded mt-4 py5">
                    <div class="single-box">
                        <img class="key-feature-img" src="{{ asset('assets/img/selfcoder/pixel/pixel1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-box text-center py-3 rounded mt-4 py5">
                    <div class="single-box">
                        <img class="key-feature-img" src="{{ asset('assets/img/selfcoder/pixel/pixel2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <div class="col-md-6 col-6 col-offset-2 col-center mb-50 pt-4">
                <a class="ticket-btn btn-primary {{ Route::is('login') ? 'active' : '' }}" href="" data-toggle="modal" data-target="#loginmodal">Get started for free</a>
            </div>
        </div>
    </div>

    <!-- Container -->
</section>
    <section class="pt-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-10 offset-2">
                    <h1 class="title">SelfCoder is used by profitable companies.</h1>
                </div>
                <div class="col-md-12 mb-50">
                    <div class="row mt-5 pt-2">
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-box" src="{{ asset('assets/img/selfcoder/images/images.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Offers clean energy home financing</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $365M
                                    in venture funding.</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-box" src="{{ asset('assets/img/selfcoder/images/icon.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Offers clean energy home financing</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $365M
                                    in venture funding.</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-box" src="{{ asset('assets/img/selfcoder/icon/iconn.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Offers clean energy home financing</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $365M
                                    in venture funding.</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-box" src="{{ asset('assets/img/selfcoder/icon/i-1.jpg') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Helps repay loans and debt automatically</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $1.5M
                                    in venture funding
                                </p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-box" src="{{ asset('assets/img/selfcoder/icon/i-2.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Curates agile freelance IT talent</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $13M
                                    in venture funding</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-box" src="{{ asset('assets/img/selfcoder/company3.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Tracks and organizes job search</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $5M
                                    in venture funding</p>
                            </div>
                        </div>
                        <!-- /col -->

                    <div class="col-md-6 col-6 col-offset-2 col-center mb-50 pt-4">
                        <a class="ticket-btn btn-primary {{ Route::is('login') ? 'active' : '' }}" href="" data-toggle="modal" data-target="#loginmodal">Get started for free</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container -->
</section>
    {{-- section-4 end --}}

        {{-- work-section start --}}
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-50">
                        <div class="col-md-12 offset-2 col-center ">
                            <h1 class="title">Thriving community of SelfCoder developers.</h1>
                        </div>
                        <div class="row mt-5 pt-2"><!-- col -->
                            <div class="col-lg-3 wow fadeInUp  delay-4s animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="team-box shadow-1 py-3 rounded mt-4 py6">
                                    <div class="item-box">
                                        <div class="box-img ">
                                            <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/marketplace.svg') }}" alt="">
                                        </div>
                                        <div class="box-tittle">
                                            <h2 class="m-4">Marketplace</h2>
                                        </div>
                                    </div>
                                    <p class="box-dec ">Find the perfect template or plugin to help you realize your vision.</p>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 wow fadeInUp  delay-4s animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="team-box shadow-1 py-3 rounded mt-4 py6">
                                    <div class="item-box">
                                        <div class="box-img ">
                                            <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/forum.svg') }}" alt="">
                                        </div>
                                        <div class="box-tittle">
                                            <h2 class="m-4">Forum</h2>
                                        </div>
                                    </div>
                                    <p class="box-dec">Ask and answer questions about SelfCoder in our active user community.</p>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 wow fadeInUp  delay-4s animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="team-box shadow-1  py-3 rounded mt-4 py6">
                                    <div class="item-box">
                                        <div class="box-img ">
                                            <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/integrations.svg') }}" alt="">
                                        </div>
                                        <div class="box-tittle">
                                            <h2 class="m-4">Integrations</h2>
                                        </div>
                                    </div>
                                    <p class="box-dec ">Extend SelfCoder’s core functionality with new elements, actions, and API connections.</p>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 wow fadeInUp  delay-4s animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="team-box shadow-1  py-3 rounded mt-4 py6">
                                    <div class="item-box">
                                        <div class="box-img ">
                                            <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/agencies.svg') }}" alt="">
                                        </div>
                                        <div class="box-tittle">
                                            <h2 class="m-4">Agencies</h2>
                                        </div>
                                    </div>
                                    <p class="box-dec">Purchase services from our vibrant ecosystem of freelancers and agencies.</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- work-section end --}}
    {{-- section 7 --}}
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
    {{-- section 3 end --}}
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
                                                <label for="inputEmail" class="">Email <span class="text-danger">*</span></label>
                                                <input type="email" id="inputEmail" class="form-control input-1 mb-4" placeholder="example@gmail.com" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="">Password <span class="text-danger">*</span></label>
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
                                            <input type="email" id="inputEmail" class="form-control input-1 mb-4" placeholder="Email address" required autofocus>
                                            <label for="inputPassword" class="">Password <span class="text-danger">*</span></label>
                                            <input type="password" id="inputPassword" class="form-control input-1 mb-4" placeholder="Password" required>
                                            <label for="inputPassword" class="">Confirm Password <span class="text-danger">*</span></label>
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
    <style scoped>
    .input-standard-grey-cus{
        border-radius: 50px;
        margin-bottom: 1.2rem;
        box-shadow: #00000012 0 3px 15px, #0000001a 0 5px 10px;
        background-color: #0404040d;
        padding: 14px;
    }
    .las{
        margin-top: 10px;
    }
    a.log{
        color: white !important;
    }

    .rounded-0{
        border: 1px solid black;
        /* border-radius: 10px !important; */
        /* border-top-left-radius: 10px; */
    }
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
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #007bff;
        /* box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px; */
        }
        .hero-1-content .short-dec {
            max-width: 600px;
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

        .hero-1-content .sub-text {
            font-size: 18px;
            margin-top: 10px;
        }

        .backend-btn {
            background: #000000;
            color: #fff;
            border-radius: 10px;
            padding: 0px 29.5px;
            display: inline-block;
            font: 700 16px/50px "Nunito", sans-serif;
            -webkit-transition: all 300ms linear 0s;
            transition: all 300ms linear 0s;
            margin-left: 30px;
        }

        .backend-btn:hover {
            color: #fff;
            background: #000000;
        }

        .title {
            text-align: center;
        }

        .team-box .single-box {
            display: flex;
        }

        .single-box .box-img img {
            height: 60px;
            margin-left: 10px
        }

        .team-box .box-dec {
            font-size: 16px;
            padding: 5px 20px 5px 20px;
            text-align: center;

        }

        .section-2 {
            background: -webkit-linear-gradient(top, rgb(242, 243, 246) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .box-img img {
            height: 80px;
            width: auto;
            border-radius: 50%;
        }
        .img-box{
            height: 60px;
            width: auto;
        }

        .team-box .cus-decription {
            text-align: center;
        }

        .py6 {
            height: 200px;
            width: auto;
            padding: 20px;
            overflow: visible;
            /* background: none rgba(241, 243, 246, 0.5); */
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 2px 0px;
            transition: background 200ms ease 0s, box-shadow 200ms ease 0s;
            background: #ffff;
        }
        .py5 {
            padding: 20px;
            overflow: visible;
            /* background: none rgba(241, 243, 246, 0.5); */
            /* box-shadow: rgb(17 18 38 / 15%) 0px 0px 2px 0px; */
            transition: background 200ms ease 0s, box-shadow 200ms ease 0s;
            background: #ffff;
            box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 5%) 0px 4px 6px -2px;
            height: 200px;
        }

        .py5:hover {
            background: white;
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 10px 0px;
        }

        .section-end {
            background-color: rgb(16, 6, 53);
            color: white !important;
        }

        .key-feature-img {
            width: 100%;
            height: 150px;
        }

        .section-end h1 {
            color: white;
        }

        .usecase-content {
            text-align: left;
            padding: 20px;
        }

        .usecase-content .u-heading {
            font-size: 28px;
        }

        .usecase-content .u-details {
            font-size: 18px;
        }
        .item-box{
            display: flex;
        }
            .img-control {
            height: 40px !important;
            width: auto;
            border-radius: 50%;
        }
        .m-4 {
            /* margin-top: 1.5rem !important; */
            margin-top: 10px !important;
            margin-left: 1rem;
            font-size: 22px;
        }

        .team-box .box-dec {
            font-size: 16px;
            padding: 0px ;
            text-align: left;
        }
        .box-img1 {
            height: 60px;
            width: auto;
        }
        /* login logo */
        .tork-logo{
            width: 90px;
            height: auto;
        }
        .show-case-img{
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
        .shadow-1{
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
        /* DEMO 3 ============================== */
        .hover-3::after {
        content: '';
        width: calc(100% - 3rem);
        height: calc(100% - 3rem);
        border: 1px solid #fff;
        position: absolute;
        top: 1.5rem;
        left: 1.5rem;
        z-index: 90;
        transition: all 0.3s;
        transform: scale(1.1);
        opacity: 0;
        display: block;
        opacity: 0;
        }

        .hover-3-content {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        transform: translateY(-50%);
        text-align: center;
        z-index: 99;
        }

.hover-3-description {
  opacity: 0;
  transform: scale(1.3);
  transition: all 0.3s;
}

.hover-3 img {
  width: 110%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.hover-3 .hover-overlay {
  background: rgba(0, 0, 0, 0.2);
}

.hover-3:hover img {
  width: 100%;
}

.hover-3:hover::after {
  opacity: 1;
  transform: none;
}

.hover-3:hover .hover-3-description {
  opacity: 1;
  transform: none;
}

.hover-3:hover .hover-overlay {
  background: rgba(0, 0, 0, 0.8);
}

.nav-pills .nav-link {
    border-radius: 0rem;
}
    </style>
@endsection
