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
                        Using our tools, you can either start by making a new app or learn how to use SelfCoder.</p>
                        <a class="ticket-btn btn-primary {{ Route::is('home2') ? 'active' : '' }}" href=""  data-toggle="modal" data-target="#exampleModal">Create a new app</a>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    <!-- /Hero -->
    {{-- section-4 --}}
    <section class="pb-50 section-2">
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
                                    <img class="img-home" src="{{ asset('assets/img/selfcoder/icon/demo.jpg') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Demo</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">
                                    Our guided courses will teach you how to create with Selfcoder.
                                </p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box text-center py-3 py5 rounded mt-4">
                                <div class="box-img1">
                                    <img class="img-home" src="{{ asset('assets/img/selfcoder/icon/documentation.jpg') }}" alt="">
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
                                    <img class="img-home" src="{{ asset('assets/img/selfcoder/icon/learn.jpg') }}" alt="">
                                </div>
                                <div class="box-tittle">
                                    <h5 class="f-18 mt-4 mb-2">Learn From Zero</h5>
                                </div>
                                <p class="box-dec text-center cus-decription">Find out how to develop with SelfCoder.</p>
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
                                <form class="  ">
                                    <div class="row">

                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label for="app" class="font-size">Name of this new app</label>
                                                <input type="text" class="border form-control" id="app">
                                                <small class="form-text text-muted font-small">You can add a domain name later.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="font-size">What kind of app are you building?</label>
                                                <select class="custom-select font-size" id="gender2">
                                                    <option class="dropdown-choice dropdown-placeholder" style="color: rgb(36, 36, 36); display: none;" selected disabled>Marketplace, social network, SaaS...</option>
                                                    <option class="dropdown-choice" value="Blog" style="color: rgb(36, 36, 36);">Blog</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="font-size">Is it customer-facing or internal?</label>
                                                <select class="custom-select font-size" id="">
                                                    <option value="" style="color: rgb(36, 36, 36); display: none;" selected></option>
                                                    <option value="1">External or customer-facing</option>
                                                    <option value="2">Internal or employee-facing</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="font-size">Start from a template (optional)</label>
                                                <small class="form-text text-muted font-small">Want to start from a template instead?<br>
                                                    Explore the <a href="" class="text-primary">templates on the marketplace</a>.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="font-size">Details about your app (optional)</label>
                                                <input type="text" class="form-control border">
                                                <small class="form-text text-muted font-small">Try to be specific so that we can help!</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="font-size text-inline">What’s your goal with this application?</label>
                                                <select class="custom-select" id="gender2">
                                                    <option value="" style="color: rgb(36, 36, 36); display: none;" selected></option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Need help getting started? Hire someone to build your app for you or ask other users on the forum!</label>
                                        </div>
                                        <button class="ticket-btn btn-primary">create new app</button>
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
        .img-home{
            height: 70px;
            width: auto;
        }
        .hero-1-content .short-dec {
            max-width: 600px;
        }

        .hero-1-content .sub-text {
            font-size: 18px;
            margin-top: 10px;
        }
        .font-size{
            font-size: 13px;
            font-weight: bold;
        }
        .font-small{
            font-size: 11px;
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
            height: 200px;
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
