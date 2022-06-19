<!doctype html>
<html lang="en">
<!-- Mirrored from tork.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 12:06:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include('layouts.style')
@yield('style')

<body>


    <!-- /Header -->
    @include('layouts.header')
    <!-- /Header -->

    <div class="content-wrapper ">

        <!--start page content-->
        @yield('content')
        <!--end page content-->

    </div>


    <!-- Footer -->
    @include('layouts.footer')
    <!-- /Footer -->


    @include('layouts.script')
    @yield('scripts')

</body>


<!-- Mirrored from tork.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 12:06:42 GMT -->

</html>
