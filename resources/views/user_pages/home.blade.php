@extends('layouts.app2')

@section('content')
    <!-- Hero -->
    <section class="hero-1" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container-fluid">
            <div class="row hero-1-content">
                <div class="col-md-12 ">
                    <h1 class="title">Welcome to SelfCoder</h1>
                </div>
                <div class="col-md-6 col-6 col-offset-2 col-center mb-50">
                    <p class="in-line">
                        Learn how to use SelfCoder with our resources, or get started by creating a new app.</p>
                        <a class="ticket-btn btn-primary {{ Route::is('home2') ? 'active' : '' }}" href=""  data-toggle="modal" data-target="#exampleModal">Create a new app</a>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    <!-- /Hero -->
    {{-- section-4 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 mb-50">
                    <div class="row mt-5 pt-2">
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img src="{{ asset('assets/img/selfcoder/icon/marketplace1.svg') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Marketplace</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Follow along with a detailed breakdown
                                     of how to build a marketplace</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img src="{{ asset('assets/img/selfcoder/company1.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Demo</h5>
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
                                    <img src="{{ asset('assets/img/selfcoder/company1.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Documentation</h5>
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
                                    <img src="{{ asset('assets/img/selfcoder/icon/videos.svg') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Short Tutorials</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Watch our free video courses to get you started</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img src="{{ asset('assets/img/selfcoder/company3.png') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Learn From Zero</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Raised $5M
                                    in venture funding</p>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section-4 end --}}
@endsection
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <section class=" section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
                <!-- Container -->
                    <div class="container">
                        <div class="row">
                            <div class="container mt-2">
                                <div class="header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h5>Create a new app</h5>
                                </div>
                                <form class="form-signin rounded-sm ">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills mb-4">
                                        <li class="pill-1">
                                            <a class="nav-link active rounded-0" data-toggle="tab" href="#login">Login</a>
                                        </li>
                                        <li class="pill-2">
                                            <a class="nav-link  rounded-0 " data-toggle="tab" href="#register">Register</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <!-- Tab1 -->
                                        <div id="login" class="container tab-pane active">
                                            <div class="form-group">
                                                <label for="inputEmail" class="">Email</label>
                                                <input type="email" id="inputEmail" class="form-control mb-4" placeholder="example@gmail.com" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="">Password</label>
                                                <input type="password" id="inputPassword" class="form-control mb-4" placeholder="********" required>
                                            </div>
                                            <div class="one-line mb-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" checked="checked" value="remember-me"> Remember me
                                                    </label>

                                                </div>
                                                <a class="forgot text-right" href="#">Forgot password?</a>
                                            </div>
                                            <div class="checkbox mb-3">
                                                {{-- <label>
                                                    <input type="checkbox" value="login-as-instructor"> Login as instructor
                                                </label> --}}
                                            </div>
                                                <a class="log btn btn-lg btn-dark btn-block rounded-0" href="{{ route('home2') }}">Login</a>
                                            </div>

                                        <!-- Tab2 -->
                                        <div id="register" class="container tab-pane fade">
                                            <label for="inputEmail" class="">Email</label>
                                            <input type="email" id="inputEmail" class="form-control mb-4" placeholder="Email address" required autofocus>
                                            <label for="inputPassword" class="">Password</label>
                                            <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" required>
                                            <label for="inputPassword" class="">Confirm Password</label>
                                            <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Repeat Password" required>

                                            <div class="checkbox mb-3">
                                                {{-- <label>
                                                    <input type="checkbox" value="Register-as-instructor"> Register as instructor
                                                </label> --}}
                                            </div>
                                            <button class="btn btn-lg btn-dark btn-block rounded-0" type="submit">Register</button>
                                         </div>
                                    </div>

                                </form>

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
        .hero-1-content .short-dec {
            max-width: 600px;
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

        .team-box .cus-decription {
            text-align: center;
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

        .key-feature-img {
            width: 100%;
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
    </style>
@endsection
