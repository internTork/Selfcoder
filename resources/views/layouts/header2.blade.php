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
                            {{-- <li class="{{ Route::is('login') ? 'active' : '' }}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                modal
                              </button></li> --}}
                       </ul>
                            <ul class="nav navbar-nav navbar-right">
                              <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="las la-ticket-alt"></i>Menu
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">My App </a></li>
                                  <li><a class="dropdown-item" href="#">My product</a></li>
                                  <li><a class="dropdown-item" href="#">My account</a></li>
                                  <li><a class="dropdown-item" href="#">Company name</a></li>
                                  <li><a class="dropdown-item" href="#">Logout</a></li>
                                </li>
                            </ul>
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
<style>
    .navbar-nav li:hover > ul.dropdown-menu {
	display: block;
}
.dropdown-submenu {
	position: relative;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
	text-decoration: underline;
	transform: rotate(-90deg);
}
</style>
