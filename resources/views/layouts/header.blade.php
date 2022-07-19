   <!-- PreLoader -->
   {{-- <div id="preloader">
       <div id="status">
           <div class="spinner"></div>
       </div>
   </div> --}}
   <!--Preloader-->

   <!-- Mobile Canvus Menu -->
   <div class="mobile_canvus_menu">
       <div class="close_btn">
           <img src="img/icon/close-dark.png" alt="">
       </div>
       <div class="menu_part_lux">
           <ul class="menu_list wd_scroll">
               <li><a href="{{ route('home') }}">Home</a></li>
               {{-- <li><a href="index-2.html">Home</a></li> --}}
               <li>
                   <a href="intro.html">Docs
                       <i class="las la-angle-down"></i>
                   </a>
                   <ul class="list">
                       <li><a href="intro.html">Getting started</a></li>
                       <li><a href="article.html">Article</a></li>
                       <li><a href="buttons.html">Button</a></li>
                       <li><a href="image.html">Image</a></li>
                       <li><a href="pagination.html">Pagination</a></li>
                       <li><a href="changelog.html">Changelog</a></li>
                   </ul>
               </li>
               <li>
                   <a href="#">Pages
                       <i class="las la-angle-down"></i>
                   </a>
                   <ul class="list">
                       <li><a href="404.html">404</a></li>
                       <li><a href="article.html">Article</a></li>
                       <li><a href="login.html">Login</a></li>
                       <li><a href="register.html">Register</a></li>
                       <li><a href="forget-password.html">Forget password</a></li>
                       <li><a href="faqs.html">Faq</a></li>
                       <li><a href="changelog.html">Changelog</a></li>
                   </ul>
               </li>

               <li>
                   <a href="blog.html">Blog
                       <i class="las la-angle-down"></i>
                   </a>
                   <ul class="list">
                       <li><a href="blog.html">Blog</a></li>
                       <li><a href="blog-deatail.html">Blog Details</a></li>

                   </ul>
               </li>
               <li><a href="contact.html">Contact</a></li>
           </ul>
       </div>
       <div class="menu_btm">
           <a class="ticket-btn" href="contact.html"><i class="las la-ticket-alt"></i> Create a Ticket</a>
       </div>
   </div>
   <!-- /Mobile Canvus Menu -->
   {{-- header start --}}
   <header class="header_area">
       <div class="main_menu">
           <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <a class="navbar-brand" href="{{ route('home') }}"><img style="height: 60px;"
                           src="{{ asset('assets/img/tork-logo.png') }}" srcset="img/logo-2x.png 2x" alt="" /></a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse"
                       data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                       aria-expanded="false" aria-label="Toggle navigation">
                       <span></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="nav navbar-nav ml-auto">
                           {{-- <li class="{{ Route::is('home') ? 'active' : '' }}"><a
                                   href="{{ route('home') }}">Home</a></li> --}}
                           {{-- <li class="{{ Route::is('feature') ? 'active' : '' }}"><a
                                   href="{{ route('feature') }}">feature</a></li> --}}
                            <li class="{{ Route::is('introduction') ? 'active' : '' }}"><a
                                    href="{{ route('introduction') }}">What is SelfCoder</a></li>
                           <li class="{{ Route::is('marketplace') ? 'active' : '' }}"><a
                                   href="{{ route('marketplace') }}">Marketplace</a></li>
                           <li class="{{ Route::is('showcase') ? 'active' : '' }}"><a
                                   href="{{ route('showcase') }}">Showcase</a></li>
                           <li class="{{ Route::is('pricing') ? 'active' : '' }}"><a
                                   href="{{ route('pricing') }}">Pricing</a></li>
                            <li class="{{ Route::is('login') ? 'active' : '' }}"><a
                                   href=""  data-toggle="modal" data-target="#loginmodal">Login</a></li>

                            {{-- <li class="{{ Route::is('login') ? 'active' : '' }}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                modal
                              </button></li> --}}
                       </ul>
                       <ul class="nav navbar-nav navbar-right">
                           <li class="{{ Route::is('login') ? 'active' : '' }}"><a
                            href="" class="ticket-btn"  data-toggle="modal" data-target="#loginmodal"><i class="las la-ticket-alt"></i>Get Started</a>
                        </li>
                       </ul>
                   </div>
               </nav>
           </div>
           <div class="right_burger">
               <ul class="nav">
                   <li>
                       <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                           <img src="img/icon/search.png" alt="" />
                       </div>
                   </li>
                   <li>
                       <div class="menu_btn">
                           <img src="img/icon/menu.png" alt="" />
                       </div>
                   </li>
               </ul>
           </div>
       </div>
   </header>
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
                                                <label for="inputPassword" class="">Password</label>
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
                                            <label for="inputEmail" class="">Email</label>
                                            <input type="email" id="inputEmail" class="form-control input-1 mb-4" placeholder="Email address" required autofocus>
                                            <label for="inputPassword" class="">Password</label>
                                            <input type="password" id="inputPassword" class="form-control input-1 mb-4" placeholder="Password" required>
                                            <label for="inputPassword" class="">Confirm Password</label>
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
    a.log{
        color: white !important;
    }
    .img-google{
        height: 20px;
        width: 20px;
    }
</style>
