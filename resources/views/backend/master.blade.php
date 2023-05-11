<!--Header Area-->
@include('backend.layouts.header')


<!--wrapper-->
<div class="wrapper">

    <!--Header Area-->
    @include('backend.layouts.sidebar')

    <!--Top Bar -->
    @include('backend.layouts.topbar')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            @yield('main-content')

        </div>
    </div>
    <!--end page wrapper -->

    <!--Overlay Area -->
    @include('backend.layouts.overlay')
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
            class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--Switcher Area -->
    @include('backend.layouts.footer')
</div>
<!--end wrapper-->

<!--Switcher Area -->
@include('backend.layouts.switcher')

<!--Script Area -->
@include('backend.layouts.script')