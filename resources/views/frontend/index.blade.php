@extends('frontend.master')
@section('main-content')
 <!--Start hero slider-->
 @include('frontend.layouts.slider')
        <!--End hero slider-->

        <!--Start category-->
            @include('frontend.layouts.category')
        <!--End category-->

        <!--Start banners-->
        @include('frontend.layouts.banners')
        <!--End banners-->

        <!--Start newproducts-->
        @include('frontend.layouts.newproducts')
        <!--End newproducts-->

        <!--Start featuredproduct-->
        @include('frontend.layouts.featuredproduct')
        <!--End featuredproduct-->

        <!-- TV Category -->
        @include('frontend.layouts.tvcategory')
        <!--End TV Category -->

        <!-- Tshirt Category -->
        @include('frontend.layouts.tshirt')
        <!--End Tshirt Category -->

        <!-- Computer Category -->
        @include('frontend.layouts.computercategory')
        <!--End Computer Category -->

        <!-- offers&deals -->
        @include('frontend.layouts.offers&deals')
        <!--End offers&deals -->

        <!--Vendor List -->
        @include('frontend.layouts.vendorlist')
        <!--End Vendor List -->
@endsection